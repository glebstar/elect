$(document).ready(function () {
    newGame();
});

function newGame() {
    $.post('/new', {_token: _token}, function (data) {
        fillLamps(data.elect);
    });
}

function fillLamps(elect) {
    for(var key in elect.lamps) {
        $('.elect-area .row').append('<div class="lamp" id="lamp-' + elect.lamps[key].id + '"></div>');
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