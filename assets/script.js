console.clear();
// mobile nav
const mobileBtn = document.querySelector('.mobile-btn');
const nav = document.querySelector('ul.flex');
mobileBtn.addEventListener('click', function () {
    mobileBtn.classList.toggle('active');
    nav.classList.toggle('active');
})

let contentIndex = 0;
const content = document.querySelector('.top-wrapper');
const color = content.dataset.color;
document.documentElement.style.setProperty('--accent-1', color);

