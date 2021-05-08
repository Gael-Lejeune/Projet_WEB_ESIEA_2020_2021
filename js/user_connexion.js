(function () {
    'use strict';
    $(() => {


      $('#form-connect').on('submit', function () {
            $('#usernameError').fadeOut();
            $('#passwordError').fadeOut();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize()
            })
            .done(function (data) {
                if (data.role == 'client') {
                  window.location = "../controller/compte.php";
                } else if (data.role == 'admin') {
                  window.location = "../controller/admin.php";
                } else {
                  $('#usernameError').html(data.nameMessage).fadeIn();
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
