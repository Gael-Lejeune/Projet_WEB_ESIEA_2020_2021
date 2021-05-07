(function () {
    'use strict';
    $(() => {


      $('#form-register').on('submit', function () {
            $('#lastnameError').fadeOut();
            $('#firstnameError').fadeOut();
            $('#usernameError').fadeOut();
            $('#mailError').fadeOut();
            $('#passwordError').fadeOut();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize()
            })
            .done(function (data) {
                if (data.success === true) {
                  window.location = "../controller/compte.php";
                } else {
                  $('#lastnameError').html(data.lastnameMessage).fadeIn();
                  $('#firstnameError').html(data.firstnameMessage).fadeIn();
                  $('#usernameError').html(data.nameMessage).fadeIn();
                  $('#mailError').html(data.mailMessage).fadeIn();
                  $('#passwordError').html(data.pwdMessage).fadeIn();
                }

            })
            .fail(function () {
                $('body').html('Fatal error');
            });
            return false;
        });
    });
}) ();
