let openNav = document.querySelector(".open-nav") ;
let closNav = document.querySelector(".close-nav") ;
let nav = document.querySelector(".links") ;
// opens nav dropdown 
const open_nav =() =>{
    nav.style.display = "flex"
    openNav.style.display = "none"
    closNav.style.display = "block"
}

// close nav dropdown 
const closeNav =() =>{
    closNav.style.display = "none"
    nav.style.display = "none"
    openNav.style.display = "block"
}
openNav.addEventListener('click',open_nav);
closNav.addEventListener('click',closeNav);