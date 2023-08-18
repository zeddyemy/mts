/*!  Author: Zeddy Emmanuel

    --> Java script for the Header
    --> Copyright (c) 2021 - Zeddy Emmanuel
    
    --> File: header.js
 */

let headerNav = document.querySelector(".header-c");
let navLinks = document.querySelector(".nav-links");
let searchBlock = document.querySelector(".search-block");

headerNav.addEventListener('click', (e) => {
    // open & close navigation bar on mobile
    if (e.target.classList.contains('menuBtn')) {
        headerNav.classList.add('is-active');
    }
    if (e.target.classList.contains('bx-x') || e.target.classList.contains('nav-overlay')) {
        headerNav.classList.remove('is-active');
    }
    // open & close search box modal
    if (e.target.classList.contains('searchBtn')) {
        searchBlock.classList.toggle('active');
        setTimeout(() => { searchBlock.querySelector('input').focus(); }, 300);
    }
    if (e.target.classList.contains('close-search') || e.target.classList.contains('search-block')) {
        if (searchBlock.classList.contains('active')) {
            searchBlock.classList.add('closing');
            setTimeout(() => { searchBlock.classList.remove('active', 'closing'); }, 300);
        }
    }
});