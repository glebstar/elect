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
        $('.elect-area .lamp').click(function () {
            $(this).addClass('active');
        });
    }
}