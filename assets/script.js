// preloader
const preloader = document.querySelector('.preloader');
var percent = document.querySelector('.percent');
var progress = document.querySelector('.progress');
var count = 0;
var inc = 2;


animate = () => {
    if (count == 100) {
        clearInterval(loading);
    } else {
        inc = inc + 2;
        count++;
        progress.style.width = inc + 'px';
        percent.textContent = count + '%';
    }
}
var loading = setInterval(animate, 50);
window.addEventListener('DOMContentLoaded', () => {
    preloader.classList.add('up');
    clearInterval(loading);
})

// shrinked nav
const header = document.querySelector('header');
const height = header.getBoundingClientRect().height;
console.log(height);
window.addEventListener('scroll', () => {
    document.body.scrollTop > height ?
        header.classList.add('shrinked') :
        header.classList.remove('shrinked');
})

// to top
const topBtn = document.querySelector('#top');
const socials = document.querySelector('.social-wrapper')
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        topBtn.classList.add('on');
        socials.classList.add('on');
    } else {
        topBtn.classList.remove('on');
        socials.classList.remove('on');
    }
})
topBtn.addEventListener('click', () => {
    document.body.scrollTop = 0;
})

// mobile nav
const mobileBtn = document.querySelector('.mobile-btn');
const nav = document.querySelector('ul.flex');
mobileBtn.addEventListener('click', function () {
    mobileBtn.classList.toggle('active');
    nav.classList.toggle('active');
})



// footer
const year = document.querySelector('.time');
year.innerHTML = new Date().getFullYear();


