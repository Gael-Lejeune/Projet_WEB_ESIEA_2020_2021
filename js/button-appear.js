function addAnimation(event) { //Ajout de l'animation si on observe un scroll
    if (window.scrollY > 100 && !est_apparue) { //Appartition du bouton si l'utilisateur est descendu sur la page
        console.log(1);
        $('.bouton_scroll').fadeIn();
        est_apparue = true;
    }
    if (window.scrollY < 100 && est_apparue) { //Disparition du bouton si l'utilisateur est en haut de la page
        console.log(0);
        $('.bouton_scroll').fadeOut();
        est_apparue = false;
    }
} //addAnimation()

document.addEventListener('scroll', addAnimation); //Ajout d'un listener observant un scroll
var est_apparue = false;

$('.bouton_scroll').click(function(){
    window.scroll(0, 0);
}); //Ajout d'un listener observant un click
