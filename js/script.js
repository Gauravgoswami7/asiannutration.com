let navbar = document.querySelector('.header .navbar');
let menuBtn = document.querySelector('#menu-btn');

menuBtn.onclick =()=> {
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll =()=> {
    menuBtn.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    grabCursor: true,
    loop: true,
    effect: "fade",
    centeredSlides: true,
    autoplay: {
      delay:2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".food-slider", {
    grabCursor: true,
    // loop: true,
    centeredSlides: true,
    // autoplay: {
    //     delay: 3500,
    //     disableOnInteraction: false,
    // },
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        700: {
            slidesPerView: 2,
        },
        1000: { 
            slidesPerView: 3,
        },
    },
});
var swiper = new Swiper(".mySwiper2", {
    direction: "vertical",
    grabCursor: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });


// let previewContainer = document.querySelector('.food-preview-container');
// let previewBox = previewContainer.querySelectorAll('.food-preview');

// let sidelinks= document.getElementsByClassName('side-links');
// function toggle(){
//     sidelinks.style.display="none";
// }


function signature(){
    var width = document.getElementById('menu-section').clientWidth;
    // if(width <= 768){
    //     document.getElementById('menu-nav-wrapper').style.display="none";
    //     document.getElementById('openbar').style.display="block";
    //   }
    //   else{
    //     document.getElementById('menu-nav-wrapper').style.display="block";
    //   }
    document.getElementById('signature').style.display="block";
    document.getElementById('burger').style.display="none";
    document.getElementById('rools').style.display="none";
    document.getElementById('salad').style.display="none";
    document.getElementById('family_couple').style.display="none";
    document.getElementById('meals').style.display="none";
    document.getElementById('dessert').style.display="none";
    document.getElementById('buckets').style.display="none";
}
function burger(){
    var width = document.getElementById('menu-section').clientWidth;
    // if(width <= 768){
    //     document.getElementById('menu-nav-wrapper').style.display="none";
    //     document.getElementById('openbar').style.display="block";
    //   }
    // else if(width> 768){
    //     document.getElementById('menu-nav-wrapper').style.display="block";
    //   }
    // document.getElementById('menu-nav-wrapper').style.display="none";
    document.getElementById('openbar').style.display="block";
    document.getElementById('signature').style.display="none";
    document.getElementById('burger').style.display="block";
    document.getElementById('rools').style.display="none";
    document.getElementById('salad').style.display="none";
    document.getElementById('family_couple').style.display="none";
    document.getElementById('meals').style.display="none";
    document.getElementById('dessert').style.display="none";
    document.getElementById('buckets').style.display="none";
}
function rolls(){
    var width = document.getElementById('menu-section').clientWidth;
    if(width <= 768){
        document.getElementById('menu-nav-wrapper').style.display="none";
        document.getElementById('openbar').style.display="block";
      }
    document.getElementById('menu-nav-wrapper').style.display="none";
    document.getElementById('openbar').style.display="block";
    document.getElementById('signature').style.display="none";
    document.getElementById('burger').style.display="none";
    document.getElementById('rools').style.display="block";
    document.getElementById('salad').style.display="none";
    document.getElementById('family_couple').style.display="none";
    document.getElementById('meals').style.display="none";
    document.getElementById('dessert').style.display="none";
    document.getElementById('buckets').style.display="none";

}
function salad(){
    var width = document.getElementById('menu-section').clientWidth;
    // if(width <= 768){
    //     document.getElementById('menu-nav-wrapper').style.display="none";
    //     document.getElementById('openbar').style.display="block";
    //   }
    // document.getElementById('menu-nav-wrapper').style.display="none";
    document.getElementById('openbar').style.display="block";
    document.getElementById('signature').style.display="none";
    document.getElementById('burger').style.display="none";
    document.getElementById('rools').style.display="none";
    document.getElementById('salad').style.display="block";
    document.getElementById('family_couple').style.display="none";
    document.getElementById('meals').style.display="none";
    document.getElementById('dessert').style.display="none";
    document.getElementById('buckets').style.display="none";
}
function family_couple(){
    var width = document.getElementById('menu-section').clientWidth;
    // if(width <= 768){
    //     document.getElementById('menu-nav-wrapper').style.display="none";
    //     document.getElementById('openbar').style.display="block";
    //   }
    // document.getElementById('menu-nav-wrapper').style.display="none";
    document.getElementById('openbar').style.display="block";
    document.getElementById('signature').style.display="none";
    document.getElementById('burger').style.display="none";
    document.getElementById('rools').style.display="none";
    document.getElementById('salad').style.display="none";
    document.getElementById('family_couple').style.display="block";
    document.getElementById('meals').style.display="none";
    document.getElementById('dessert').style.display="none";;
    document.getElementById('buckets').style.display="none";
}
function meals(){
    var width = document.getElementById('menu-section').clientWidth;
    // if(width <= 768){
    //     document.getElementById('menu-nav-wrapper').style.display="none";
    //     document.getElementById('openbar').style.display="block";
    //   }
    // document.getElementById('menu-nav-wrapper').style.display="none";
    document.getElementById('openbar').style.display="block";
    document.getElementById('signature').style.display="none";
    document.getElementById('burger').style.display="none";
    document.getElementById('rools').style.display="none";
    document.getElementById('salad').style.display="none";
    document.getElementById('family_couple').style.display="none";
    document.getElementById('meals').style.display="block";
    document.getElementById('dessert').style.display="none";
    document.getElementById('buckets').style.display="none";
}
function dessert(){
    var width = document.getElementById('menu-section').clientWidth;
    // if(width <= 768){
    //     document.getElementById('menu-nav-wrapper').style.display="none";
    //     document.getElementById('openbar').style.display="block";
    //   }
    // document.getElementById('menu-nav-wrapper').style.display="none";
    document.getElementById('openbar').style.display="block";
    document.getElementById('signature').style.display="none";
    document.getElementById('burger').style.display="none";
    document.getElementById('rools').style.display="none";
    document.getElementById('salad').style.display="none";
    document.getElementById('family_couple').style.display="none";
    document.getElementById('meals').style.display="none";
    document.getElementById('dessert').style.display="block";
    document.getElementById('buckets').style.display="none";
}
function buckets(){
    var width = document.getElementById('menu-section').clientWidth;
    // if(width <= 768){
    //     document.getElementById('menu-nav-wrapper').style.display="none";
    //     document.getElementById('openbar').style.display="block";
    //   }
    // document.getElementById('menu-nav-wrapper').style.display="none";
    document.getElementById('openbar').style.display="block";
    document.getElementById('signature').style.display="none";
    document.getElementById('burger').style.display="none";
    document.getElementById('rools').style.display="none";
    document.getElementById('salad').style.display="none";
    document.getElementById('family_couple').style.display="none";
    document.getElementById('meals').style.display="none";
    document.getElementById('dessert').style.display="none";
    document.getElementById('buckets').style.display="block";
}
function menuSwitchclose(){
   document.getElementById('menu-nav-wrapper').style.display="none";
   document.getElementById('openbar').style.display="block";
   
}
function menuSwitchopen(){
    document.getElementById('menu-nav-wrapper').style.display="block";
    document.getElementById('openbar').style.display="none";
   
}