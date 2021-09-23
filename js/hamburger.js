const hamburger = document.querySelector('.hamburger')
const menuLink = document.querySelector('.menu__link')

hamburger.addEventListener('click', () => {
    menuLink.classList.toggle('open')
}); 