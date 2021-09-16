
let img = document.getElementById('gallery-slider');
let imgs = [
    'img/2.jpg',
    'img/3.jpg',
    'img/4.jpg',
    'img/5.jpg',
    'img/6.jpg',
    'img/7.jpg',
    'img/1.jpg'
];
let x = 0;

function slide() {
    if (x < imgs.length) {
        x++;
    } else {
        x = 1;
    };
    img.innerHTML = `<img src="${imgs[x-1]}">`;
};

setInterval(slide, 3000);

