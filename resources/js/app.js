require('./bootstrap');

import AOS from 'aos';

AOS.init({
    duration: 500,
    once: false
});

function animateHeader() {
    const headerWrapper = document.querySelector('.header-wrapper');
    const headerLogo = document.querySelector('.header-logo');
    const header = document.querySelector('.header');
    const navItems = document.getElementsByClassName('navigation-item');

    if (window.pageYOffset > 100) {
        headerWrapper.classList.add('header-wrapper-solid');
        headerLogo.classList.add('header-logo-solid');
        header.classList.add('header-solid');
        for (let navItem of navItems) {
            navItem.classList.add('navigation-item-solid');
        }
    }

    window.onscroll = function () {
        if (window.pageYOffset > 100) {
            headerWrapper.classList.add('header-wrapper-solid');
            headerLogo.classList.add('header-logo-solid');
            header.classList.add('header-solid');
            for (let navItem of navItems) {
                navItem.classList.add('navigation-item-solid');
            }
        } else {
            headerWrapper.classList.remove('header-wrapper-solid');
            headerLogo.classList.remove('header-logo-solid');
            header.classList.remove('header-solid');
            for (let navItem of navItems) {
                navItem.classList.remove('navigation-item-solid');
            }
        }
    }
}



document.addEventListener('DOMContentLoaded', function () {
    animateHeader();
})
