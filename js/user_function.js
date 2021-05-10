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
                if (data.success == true) {
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
            $('#nomTitre').fadeOut();
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

        $('#form-delete').on('submit', function (e) {
          e.preventDefault();
          if (confirm("Votre compte va être supprimé.\n   Cliquez sur 'OK' pour confirmer, ou annulez.")) {
            // Code à éxécuter si le l'utilisateur clique sur "OK"
            $.ajax({
              url: $(this).attr('action'),
              method: $(this).attr('method'),
              data: $(this).serialize()
            })
            .done(function (data) {
              if (data.success === true) {
                alert(data.message);
                window.location = "../controller/inscription.php";
              } else {
                alert(data.message);
              }
            })
            .fail(function () {
              $('body').html('Fatal error');
            });
          } else {
            alert("Votre compte n'a pas été supprimé.");
          }
          return false;
        });


        // $('#form-logout').on('submit', function (e) {
        //   e.preventDefault();
        //   if (confirm("Vous allez être déconnecté.\n   Cliquez sur 'OK' pour confirmer, ou annulez.")) {
        //     // Code à éxécuter si le l'utilisateur clique sur "OK"
        //     $.ajax({
        //       url: $(this).attr('action'),
        //       method: $(this).attr('method'),
        //       data: $(this).serialize()
        //     })
        //     .done(function (data) {
        //       if (data.success === true) {
        //         window.location = "../controller/connexion.php";
        //       } else {
        //         alert("Vous n'avez pas été déconnecté.\n  Veuillez réessayer.");
        //       }
        //     })
        //     .fail(function () {
        //       $('body').html('Fatal error');
        //     });
        //   } else {
        //     alert("Vous n'avez pas été déconnecté.");
        //   }
        //   return false;
        // });

    });
}) ();
