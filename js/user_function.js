(function () {
    'use strict';
    $(() => {

        $('#form-address').on('submit', function () {
            $('#address').fadeOut();
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize()
            })
            .done(function (data) {
                //console.log(data);
                //console.log(data.address);
                if (data.success === true) {
                    $('#address').html(data.address).fadeIn();
                }
                alert(data.message);

            })
            .fail(function () {
                $('body').html('Fatal error');
            });
            return false;
        });

        $('#form-card').on('submit', function () {
            $('#carte').fadeOut();
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize()
            })
            .done(function (data) {
                if (data.success === true) {
                    $('#carte').html(data.card).fadeIn();
                }
                alert(data.message);

            })
            .fail(function () {
                $('body').html('Fatal error');
            });
            return false;
        });

        $('#form-name').on('submit', function () {
            $('#nomChangement').fadeOut();
            $('nomTitre').fadeOut();
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize()
            })
            .done(function (data) {
                if (data.success === true) {
                    $('#nomChangement').html(data.name).fadeIn();
                    $('#nomTitre').html(data.name).fadeIn();
                }
                alert(data.message);

            })
            .fail(function () {
                $('body').html('Fatal error');
            });
            return false;
        });

        function deleteAccountFunction() {
            if ( confirm( "Votre compte va être supprimé.\n   Cliquez sur 'OK' pour confirmer, ou annulez." ) ) {
                // Code à éxécuter si le l'utilisateur clique sur "OK"
                window.location = "../model/delete_user.php";
            } else {
                // Code à éxécuter si l'utilisateur clique sur "Annuler"
                return;
            }
        }

        function logoutFunction() {
            if ( confirm( "Vous allez être déconnecté.\n   Cliquez sur 'OK' pour confirmer, ou annulez." ) ) {
                // Code à éxécuter si le l'utilisateur clique sur "OK"
                window.location = "../model/logout.php";
            } else {
                // Code à éxécuter si l'utilisateur clique sur "Annuler"
                return;
            }
        }





    });
}) ();
