(function () {
    'use strict';
    $(() => {

      //produits
      $('#form-delete-item').on('submit', function (e) {
        e.preventDefault();
        if (confirm("Êtes-vous certain de vouloir supprimer ce produit ?")) {
          // Code à éxécuter si le l'utilisateur clique sur "OK"
          $.ajax({
              url: $(this).attr('action'),
              method: $(this).attr('method'),
              data: $(this).serialize()
          })
          .done(function (data) {
                if (data.success === true) {
                  alert(data.message);
                } else {
                  alert(data.message);
                }
          })
          .fail(function () {
              $('body').html('Fatal error');
          });
        } else {
          alert("Vous avez choisi de ne pas supprimer cette produit.");
        }
        return false;
      });


      //catégories
      $('#form-modify-category').on('submit', function () {
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

      $('#form-delete-category').on('submit', function (e) {
        e.preventDefault();
        if (confirm("Êtes-vous certain de vouloir supprimer cette catégorie ?")) {
          // Code à éxécuter si le l'utilisateur clique sur "OK"
          $.ajax({
              url: $(this).attr('action'),
              method: $(this).attr('method'),
              data: $(this).serialize()
          })
          .done(function (data) {
                if (data.success === true) {
                  alert(data.message);
                } else {
                  alert(data.message);
                }
          })
          .fail(function () {
              $('body').html('Fatal error');
          });
        } else {
          alert("Vous avez choisi de ne pas supprimer cette catégorie.");
        }
        return false;
      });


      //utilisateurs
      $('#form-modify-user').on('submit', function () {
          $.ajax({
              url: $(this).attr('action'),
              method: $(this).attr('method'),
              data: $(this).serialize()
          })
          .done(function (data) {
            if ( confirm("Vous allez modifier un utilisateur.\n   Cliquez sur 'OK' pour confirmer, ou annulez.") ) {
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


      $('#form-delete-user').on('submit', function (e) {
        e.preventDefault();
        if (confirm("Êtes-vous certain de vouloir supprimer ce compte ?")) {
          // Code à éxécuter si le l'utilisateur clique sur "OK"
          $.ajax({
              url: $(this).attr('action'),
              method: $(this).attr('method'),
              data: $(this).serialize()
          })
          .done(function (data) {
                if (data.success === true) {
                  alert(data.message);
                } else {
                  alert(data.message);
                }
          })
          .fail(function () {
              $('body').html('Fatal error');
          });
        } else {
          alert("Vous avez choisi de ne pas supprimer ce compte.");
        }
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
