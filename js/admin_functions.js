(function () {
    'use strict';
    $(() => {

      //produits


      //catégories


      //utilisateurs
      $('#form-modify-user').on('submit', function () {
          $.ajax({
              url: $(this).attr('action'),
              method: $(this).attr('method'),
              data: $(this).serialize()
          })
          .done(function (data) {
            if ( confirm("Votre compte va être supprimé.\n   Cliquez sur 'OK' pour confirmer, ou annulez.") ) {
                // Code à éxécuter si le l'utilisateur clique sur "OK"
                if (data.success === true) {
                  alert(data.message);
                  window.location = "../controller/inscription.php";
                } else {
                  alert(data.message);
                }
            }
          })
          .fail(function () {
              $('body').html('Fatal error');
          });
          return false;
      });


      $('#form-delete-user').on('submit', function () {
          $.ajax({
              url: $(this).attr('action'),
              method: $(this).attr('method'),
              data: $(this).serialize()
          })
          .done(function (data) {
            if ( confirm("Votre compte va être supprimé.\n   Cliquez sur 'OK' pour confirmer, ou annulez.") ) {
                // Code à éxécuter si le l'utilisateur clique sur "OK"
                if (data.success === true) {
                  alert(data.message);
                  window.location = "../controller/inscription.php";
                } else {
                  alert(data.message);
                }
            }
          })
          .fail(function () {
              $('body').html('Fatal error');
          });
          return false;
      });


















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

    });
}) ();
