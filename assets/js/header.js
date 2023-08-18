/*!  Author: Zeddy Emmanuel

    --> Java script for the Header
    --> Copyright (c) 2021 - Zeddy Emmanuel
    
    --> File: header.js
 */

let headerNav = document.querySelector(".header-c");
let navLinks = document.querySelector(".nav-links");

headerNav.addEventListener('click', (e) => {
    // open & close navigation bar on mobile
    if (e.target.classList.contains('bx-menu')) {
        headerNav.classList.add('is-active');
    }
    if (e.target.classList.contains('bx-x')) {
        headerNav.classList.remove('is-active');
    }
    if (e.target.classList.contains('nav-overlay')) {
        headerNav.classList.remove('is-active');
    }
});