/*Регистрация*/

$('#regBtn').on('click', function (e) {
    e.preventDefault();

    let name = $('#nameReg').val();
    let email = $('#emailReg').val();
    let password = $('#passwordReg').val();

    $.ajax({
        type: 'POST',
        url: '/registration',
        dataType: 'text',
        cache: false,
        data: {name: name, email: email, password: password},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function () {
            $('.form').hide();
            $('.alert-success').show();
        },
        error: function (msg) {
            console.log(msg)
        },
    });
    return false;
});

/* Управление тегами */

$(document).on('click', '[name = btn-tag]', function(e) {
    $('#'+ e.target.id).remove();
});

let tagCount = 0;

$('#addTag').on('click', function () {
    tagCount = Math.floor(Math.random() * (5000 - 1000)) + 1000;
    if (tagCount != $('.tag-'+ tagCount)){
        $('#tags').append(
            "<div class=\'row\' id=\'tag-" + tagCount + "\'>" +
            "<div class=\'col-10\'><input type=\'text\' class=\'form-control\' name=\'tags[]\' placeholder=\'Новый тэг\'></div>" +
            "<div class=\'col-2\'><button type=\'button\' name=\'btn-tag\' id=\'tag-" + tagCount + "\' class=\'btn btn-warning\'>Х</button></div>" +
            "</div>"
        );
    }
});

/* Управление ингредиентами */

$(document).on('click', '[name = btn-ing]', function(e) {
    $('#'+ e.target.id).remove();
});

let ingCount = 0;

$('#addIngredient').on('click', function () {
    ingCount = Math.floor(Math.random() * (5000 - 1000)) + 1000;
    if (ingCount != $('.ing-'+ ingCount)){
        $('#ingredients').append(
            "<div class=\'row\' id=\'ing-" + ingCount + "\'>" +
            "<div class=\'col-12\'><input type=\'text\' class=\'form-control\' name=\'ingredients[]\' placeholder=\'Новый ингредиент\'></div>" +
            "<div class=\'col-10\'><input type='text' class='form-control' name='quantity[]' placeholder='Количество'></div>" +
            "<div class=\'col-2\'><button type=\'button\' name=\'btn-ing\' id=\'ing-" + ingCount + "\' class=\'btn btn-warning\'>Х</button></div>" +
            "</div>"
        );
    }
});
