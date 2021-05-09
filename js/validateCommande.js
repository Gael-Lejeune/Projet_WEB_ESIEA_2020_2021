(function () {
    'use strict';
    $(() => {

        $('#validateButton').click(function(){
            if ($('#carte').is(':empty') || $('#address').is(':empty')) {
                console.log('marche pas');
                $('#error').fadeIn();
            } else {
                $.ajax({
                    url: '../processing/validateCommande.php',
                    method: 'POST',
                    data: {
                        id:$('#userId').html(),
                        CC:$('#carte').html(),
                        address:$('#address').html()
                    }
                })
                .done(function (data) {
                    if (data.success === true) {
                        window.location = "../controller/commande.php";
                    }
                })
                .fail(function () {
                    $('body').html('Fatal error');
                });
            }
            return false;
        });

    });
}) ();
