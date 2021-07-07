const menuIcon = document.querySelector
(".hamburger-menu");

const navbar = document.querySelector(".nav-wrapper");
const menuContainer = document.querySelector(".menu-menu-1-container");

menuIcon.addEventListener('click', ()=> {
    navbar.classList.toggle("change");
    menuContainer.classList.toggle("pointerchange");
})

const menu = document.querySelector(".menu")

menuIcon.addEventListener('click', ()=> {
    menu.classList.toggle("changeflex");
})

// Todo rendesen megcsinálni

const navmenu1 = document.querySelector(".menu")
const menuElement1 = document.querySelector
(".menu-item-8");
menuElement1.addEventListener('click', ()=> {
    navmenu1.classList.remove("changeflex");
    menuContainer.classList.remove("pointerchange");
    navbar.classList.toggle("change");
})


const navmenu2 = document.querySelector(".menu")
const menuElement2 = document.querySelector
(".menu-item-9");
menuElement2.addEventListener('click', ()=> {
    navmenu2.classList.remove("changeflex");
    menuContainer.classList.remove("pointerchange");
    navbar.classList.toggle("change");
})

const navmenu3 = document.querySelector(".menu")
const menuElement3 = document.querySelector
(".menu-item-10");
menuElement3.addEventListener('click', ()=> {
    navmenu3.classList.remove("changeflex");
    menuContainer.classList.remove("pointerchange");
    navbar.classList.toggle("change");
})

const navmenu4 = document.querySelector(".menu")
const menuElement4 = document.querySelector
(".menu-item-11");
menuElement4.addEventListener('click', ()=> {
    navmenu4.classList.remove("changeflex");
    menuContainer.classList.remove("pointerchange");
    navbar.classList.toggle("change");
})


