const navSlide = ()=>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.dropdown-content');
    const dropdownContent = document.querySelectorAll('.dropdown-content li');
    burger,addEventListener('click',()=>{
        // togle Nav
        nav.classList.toggle('nav-active');
    });
    //Animate Links
    dropdownContent.forEach((link, index)=>{
        if(link.style.animation){
            link.style.animation = ''
        }else{
            link.style.animation = `dropdownContentFade 0.5s ease forwards ${index / 7 + 1.5}s`;
        }
        // Burger Animation
        burger.classList.toggle('toggle');
    });
}
navSlide();