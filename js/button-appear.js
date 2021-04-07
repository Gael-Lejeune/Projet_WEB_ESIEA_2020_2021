var button = document.getElementById('button');


document.addEventListener('scroll', addAnimation);
addAnimation();

var hasAppearred = false;

function addAnimation(event) {
  if(window.scrollY > 100 && !hasAppearred) {
    console.log(1);
    button.classList.add('visible');
    button.classList.remove('invisible');

    hasAppearred = true;
  }

  if(window.scrollY < 100 && hasAppearred) {
    console.log(2);
    button.classList.add('invisible');
    button.classList.remove('visible');
    hasAppearred = false;
  }
}
