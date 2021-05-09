(function () {
    'use strict';
    $(() => {

      //produits
      $('#form-select-item').on('change', function () {
        $('#zoneItem').fadeOut();
        $.ajax({
          url: $(this).attr('action'),
          method: $(this).attr('method'),
          data: $(this).serialize()
        })
        .done(function (data) {
          if (data.success == true) {
            $('#zoneItem').html(data.message).fadeIn();
          } else {
            $('#zoneItem').html(data.message).fadeIn();
          }
        })
        .fail(function () {
          $('body').html('Fatal error');
        });
        return false;
      });


      $('#form-modify-item').on('submit', function (e) {
        e.preventDefault();
        if (confirm("Êtes-vous certain de vouloir modifier ce produit ?")) {
          // Code à éxécuter si le l'utilisateur clique sur "OK"
          $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: $(this).serialize()
          })
          .done(function (data) {
            if (data.success == true) {
              alert(data.message);
            } else {
              alert(data.message);
            }
          })
          .fail(function () {
            $('body').html('Fatal error');
          });
        } else {
          alert("Vous avez choisi de ne pas modifier ce produit.");
        }
        return false;
      });

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
          alert("Vous avez choisi de ne pas supprimer ce produit.");
        }
        return false;
      });


      //catégories
      $('#form-select-category').on('change', function () {
        $('#zoneCategory').fadeOut();
        $.ajax({
          url: $(this).attr('action'),
          method: $(this).attr('method'),
          data: $(this).serialize()
        })
        .done(function (data) {
          if (data.success == true) {
            $('#zoneCategory').html(data.message).fadeIn();
          } else {
            $('#zoneCategory').html(data.message).fadeIn();
          }
        })
        .fail(function () {
          $('body').html('Fatal error');
        });
        return false;
      });

      $('#form-modify-category').on('submit', function (e) {
        e.preventDefault();
        if (confirm("Êtes-vous certain de vouloir modifier cette catégorie ?")) {
          // Code à éxécuter si le l'utilisateur clique sur "OK"
          $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: $(this).serialize()
          })
          .done(function (data) {
            if (data.success == true) {
              alert(data.message);
            } else {
              alert(data.message);
            }
          })
          .fail(function () {
            $('body').html('Fatal error');
          });
        } else {
          alert("Vous avez choisi de ne pas modifier cette catégorie.");
        }
        return false;
      });

      $('#form-add-category').on('submit', function () {
            $('#labelError').fadeOut();
            $('#urlError').fadeOut();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize()
            })
            .done(function (data) {
                if (data.success == true) {
                  alert(data.message);
                } else {
                  $('#labelError').html(data.labelMessage).fadeIn();
                  $('#urlError').html(data.urlMessage).fadeIn();
                }

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
