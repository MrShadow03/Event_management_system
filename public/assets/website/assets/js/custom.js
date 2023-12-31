$(document).ready(function(){
var swiper = new Swiper(".benar_box", {
    direction: "vertical",
    speed: 1000,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
  });


// CATERING CARD BOX

// var swiper = new Swiper(".img_left", {
//     grabCursor: true,
//     effect: "creative",
//     loop: true,
//     speed: 1000,
//      autoplay: {
//         delay: 2000,
//         disableOnInteraction: true,
//       },
//     creativeEffect: {
//       prev: {
//         shadow: true,
//         translate: [0, 0, -400],
//       },
//       next: {
//         translate: ["100%", 0, 0],
//       },
//     },
//   });


// var swiper = new Swiper(".img_left", {
//     effect: "cube",
//     grabCursor: true,
//     loop: true,
//     autoplay: {
//         delay: 2000,
//         disableOnInteraction: true,
//       },
//     cubeEffect: {
//       shadow: true,
//       slideShadows: true,
//       shadowOffset: 20,
//       shadowScale: 0.94,
//     },
//     pagination: {
//       el: ".swiper-pagination",
//     },
//   });

  var swiper = new Swiper(".img_right", {
    effect: "cube",
    grabCursor: true,
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 2800,
        disableOnInteraction: true,
      },
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 10,
      shadowScale: 0.5,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
  var swiper = new Swiper(".img_left", {
    effect: "cube",
    grabCursor: true,
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 2800,
        disableOnInteraction: true,
        reverseDirection: true,
      },
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 10,
      shadowScale: 0.5,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

//   var video_gallery = new Swiper(".video_gallery", {
//     grabCursor: true,
//     effect: "coverflow",
//     loop: true,
//     speed: 1000,
//     slidesPerView: 'auto',
//     coverflowEffect: {
//         rotate: 0,
//         stretch: 0,
//         depth: 300,
//         modifier: 1,
//         slideShadows: true,
//     },
    // breakpoints: {
    //     700: {
    //         slidesPerView: 1,
    //         loop: true,
    //         autoplay: {
    //             delay: 2000,
    //             disableOnInteraction: true,
    //         },
    //     },
    //     1000: {
    //         slidesPerView: 2,
    //         loop: true,
    //         autoplay: {
    //             delay: 2000,
    //             disableOnInteraction: true,
    //         },
    //     },
    //     1200: {
    //         slidesPerView: 3,
    //         loop: true,
    //         autoplay: {
    //             delay: 2000,
    //             disableOnInteraction: true,
    //         },
    //     },
    // },
  });

  var swiper_related_products = new Swiper(".related_products_items", {
    slidesPerView: 2,
    spaceBetween: 45,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
      },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        700: {
            slidesPerView: 3,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: true,
            },
        },
        1000: {
            slidesPerView: 4,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: true,
            },
        },
        1200: {
            slidesPerView: 5,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: true,
            },
        },
    },
  });

//   $('.related_products_items').owlCarousel({
//     items:3,
//     margin:20,
//     autoplay: true,
//     autoplayTimeout: 4000,
//     nav:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         768:{
//             items:2
//         },
//         1000:{
//             items:3
//         }
//     }

// });


// ** CLIENTS slider
$('#client_slider').owlCarousel({
    items:3,
    margin:20,
    autoplay: true,
    autoplayTimeout: 4000,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1000:{
            items:3
        }
    }

});






// Header fixed
window.onscroll = function()
{
    headerScroll()
};

function toggleFilterSidebar() {
    const filterSidebar = document.getElementById("filterSidebar");
    const overlay = document.getElementById("overlay");
    if (filterSidebar.classList.contains("active")) {
        filterSidebar.classList.remove("active");
        overlay.classList.remove("active");
    } else {
        filterSidebar.classList.add("active");
        overlay.classList.add("active");
    }
}

function toggleMobileMenu() {
    const mobileMenu = document.getElementById("mobileMenu");
    const overlay = document.getElementById("overlay");
    if (mobileMenu.classList.contains("side_nav_active")) {
        mobileMenu.classList.remove("side_nav_active");
        overlay.classList.remove("active");
    } else {
        mobileMenu.classList.add("side_nav_active");
        overlay.classList.add("active");
    }
}

function closeSidebars(){
    const mobileMenu = document.getElementById("mobileMenu");
    const filterSidebar = document.getElementById("filterSidebar");
    const overlay = document.getElementById("overlay");
    mobileMenu.classList.remove("side_nav_active");
    filterSidebar && filterSidebar.classList.remove("active");
    overlay.classList.remove("active");
}

function headerScroll() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        document.getElementById("mainNav_area").classList.add('active_nav');
    } else {
        document.getElementById("mainNav_area").classList.remove('active_nav');
    }
}

// Side NAVIGATION HERE
// const nav_bars = document.querySelector('.nav_bars')
// const bars = document.querySelector('.bars')
// const main_side_nav = document.querySelector('.main_side_nav')
//     if(nav_bars){
//         nav_bars.addEventListener('click', () => {
//             main_side_nav.style.transform = 'translateX(0%)'
//             document.querySelector('#overlay').classList.add('active')
//         })
//     }else {
//         main_side_nav.style.transform = 'translateX(-100%)'
//     }
//     if(bars){
//         bars.addEventListener('click', () => {
//             main_side_nav.style.transform = 'translateX(-100%)'
//         })
//     }


// SEARCH BTN
const search_btn = document.getElementById('search_bars');
const search_box = document.querySelector('.search_box');
let time = document.querySelector('.fa-x');

if(search_btn){
    search_btn.addEventListener('click', () => {
        search_box.classList.add('active')
        search_btn.style.display = 'none'
    })
}else{
    search_box.classList.remove('active')
}
if(time){
    time.addEventListener('click', ()=>{
        search_box.classList.remove('active')
        search_btn.style.display = 'block'
    })
}


// CART BTN

const cart_btn = document.getElementById('cart_btn');
const cart_bars = document.querySelector('.cart_bars');
const cart_box = document.querySelector('.cart_box');

if(cart_btn){
    cart_btn.addEventListener('click', () => {
        cart_box.classList.add('active');
        cart_btn.style.display = "none"
    })
}else{
    cart_btn.style.display = "block"
}

if(cart_bars){
    cart_bars.addEventListener('click', () => {
        cart_box.classList.remove('active');
        cart_btn.style.display = "block"
    })
}
