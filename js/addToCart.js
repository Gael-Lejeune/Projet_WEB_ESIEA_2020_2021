(function () {
    'use strict';
    $(() => {
        $('#addToCartButton').click(function(){
            $.ajax({
                url: '../processing/addToCart.php',
                method: 'POST',
                data: {
                    id:$('#itemId').html()
                }
            })
            .done(function (data) {
                if (data.success === true) {
                    $('#amount').html("Exemplaires dans le panier : " + data.amount).fadeIn();
                } else {
                    $("#stock").animate({marginLeft: "20px"}, 100);
                    $("#stock").animate({marginLeft: "0px"}, 100);
                    $("#stock").animate({marginLeft: "20px"}, 100);
                    $("#stock").animate({marginLeft: "0px"}, 100);
                    $("#stock").animate({marginLeft: "20px"}, 100);
                    $("#stock").animate({marginLeft: "0px"}, 100);
                }
            })
            .fail(function () {
                $('body').html('Fatal error');
            });
            return false;
        });
    });
}) ();
