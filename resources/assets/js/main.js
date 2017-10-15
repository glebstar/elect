$(document).ready(function () {
    newGame();
});

function newGame() {
    $.post('/new', {_token: _token}, function (data) {
        fillLamps(data.elect);
    });
}

function fillLamps(elect) {
    $('.elect-area .area').html('');
    for(var key in elect.lamps) {
        $('.elect-area .area').append('<div class="lamp" id="lamp-' + elect.lamps[key].id + '"></div>');
    }
    $('.elect-area .lamp').click(function () {
        newMove(this);
    });
}

function newMove(obj) {
    if ($(obj).hasClass('active')) {
        return false;
    }

    $(obj).addClass('active');

    var id = $(obj).attr('id').replace(/^lamp\-(\d+)/, '$1');
    $.post('/move', {_token: _token, id: id}, function (data) {
        changeLamps(data.elect);
        changeMoves(data.elect.move);
    });
}

function changeLamps(elect) {
    for(var key in elect.lamps) {
        $('#lamp-' + elect.lamps[key].id).removeClass('active');
        if (elect.lamps[key].active) {
            $('#lamp-' + elect.lamps[key].id).addClass('active');
        }
    }
}

function changeMoves(n) {
    $('.digit').removeClass('digit-1').removeClass('digit-2').removeClass('digit-3').removeClass('digit-4').removeClass('digit-5').removeClass('digit-6').removeClass('digit-7').removeClass('digit-8').removeClass('digit-9');
    var ns = n.toString();
    var d = 0;
    for(var i=ns.length-1; i>-1; i--) {
        $('.d-' + d).addClass('digit-' + ns[i]);
        d++;
    }
}