(function () {
    'use strict';
    $(() => {

        $('.addToCartButton').click(function(){
            var id = $(this).parent().find('p').html();
            $.ajax({
                url: '../processing/addToCart.php',
                method: 'POST',
                data: {
                    id:id
                }
            })
            .done(function (data) {
                if (data.success === true) {
                    $('#amount'+id).find('.amount').html(data.amount);
                    let totalPrice = 0;
                    $('.price').each(function(){
                        totalPrice+=parseInt(
                            $(this).parent().parent().parent().parent().find('div').find('h1').find('.amount').html()
                            *
                            $(this).html()
                        );
                    })
                    $('#totalPrice').html(totalPrice);
                }
            })
            .fail(function () {
                $('body').html('Fatal error');
            });
            return false;
        });

        $('.removeFromCartButton').click(function(){
            var id = $(this).parent().find('p').html();
            $.ajax({
                url: '../processing/removeFromCart.php',
                method: 'POST',
                data: {
                    id:id
                }
            })
            .done(function (data) {
                if (data.success === true) {
                    if (data.amount == 0) {
                        $('#flex-content'+id).remove();
                        document.location.reload();
                    }
                    $('#amount'+id).find('.amount').html(data.amount);
                    let totalPrice = 0;
                    $('.price').each(function(){
                        totalPrice+=parseInt(
                            $(this).parent().parent().parent().parent().find('div').find('h1').find('.amount').html()
                            *
                            $(this).html()
                        );
                    })
                    $('#totalPrice').html(totalPrice);
                }
            })
            .fail(function () {
                $('body').html('Fatal error');
            });
            return false;
        });



    });
}) ();
