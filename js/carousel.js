const test = document.getElementById('test');

const items = document.getElementsByClassName('img');
const nbSlides = items.length;
const left = document.getElementById('left');
const right = document.getElementById('right');
const interests1 = document.getElementById('interests1')
const interests2 = document.getElementById('interests2')
let count = 0;

function slideLeft() {
  items[count].classList.remove('active');
  if (count > 0) {
    count--;
  } else {
    count = nbSlides - 1;
  }
  items[count].classList.add('active');
  interests1.innerHTML = items[count].title;
  interests2.innerHTML = items[count].title;
}

function slideRight() {
  items[count].classList.remove('active');
  if (count < nbSlides - 1) {
    count++;
  } else {
    count = 0;
  }
  items[count].classList.add('active');
  interests1.innerHTML = items[count].title;
  interests2.innerHTML = items[count].title;
}

left.addEventListener('click', slideLeft);
right.addEventListener('click', slideRight);

function refresh_carousel() {
  let t = 5000;
  setInterval(slideRight, t);
}

refresh_carousel();