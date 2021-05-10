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
          // Code à éxécuter si le l'administrateur clique sur "OK"
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

      $('#form-add-item').on('submit', function () {
            $('#nameaddError').fadeOut();
            $('#artistaddError').fadeOut();
            $('#dateaddError').fadeOut();
            $('#categoryaddError').fadeOut();
            $('#urladdError').fadeOut();
            $('#descriptionaddError').fadeOut();
            $('#priceaddError').fadeOut();
            $('#amountaddError').fadeOut();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize()
            })
            .done(function (data) {
                if (data.success == true) {
                  alert(data.message);
                } else {
                  $('#nameaddError').html(data.nameMessage).fadeIn();
                  $('#artistaddError').html(data.artistMessage).fadeIn();
                  $('#dateaddError').html(data.dateMessage).fadeIn();
                  $('#categoryaddError').html(data.categorieMessage).fadeIn();
                  $('#urladdError').html(data.urlMessage).fadeIn();
                  $('#descriptionaddError').html(data.descriptionMessage).fadeIn();
                  $('#priceaddError').html(data.priceMessage).fadeIn();
                  $('#amountaddError').html(data.amountMessage).fadeIn();
                }
            })
            .fail(function () {
                $('body').html('Fatal error');
            });
            return false;
        });

      $('#form-delete-item').on('submit', function (e) {
        e.preventDefault();
        if (confirm("Êtes-vous certain de vouloir supprimer ce produit ?")) {
          // Code à éxécuter si le l'administrateur clique sur "OK"
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
          // Code à éxécuter si le l'administrateur clique sur "OK"
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
          // Code à éxécuter si le l'administrateur clique sur "OK"
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
      $('#form-modify-user').on('submit', function (e) {
        e.preventDefault();
        if ( confirm("Toute modification doit être faite avec l'accord de l'utilisateur concerné.\nCliquez sur 'OK' si vous l'avez, ou annulez.") ) {
          // Code à éxécuter si le l'administrateur clique sur "OK"
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
          alert("Vous avez choisi de ne pas modifier l'utilisateur.");
        }
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

    });
}) ();
