let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar')
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active')
} ;

window.onscroll = () => {
    menu.classList.remove('fa-times')
    navbar.classList.remove('active')
};

var swiper = new Swiper(".home-slider", {
    loop : true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

var swiper = new Swiper(".reviews-slider", {
    loop:true,
    autoHeight:true,//自动高度。设置为true时，wrapper和container会随着当前slide的高度而发生变化。
    grabCursor:true,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        
      },
      768: {
        slidesPerView: 2,
        
      },
      1024: {
        slidesPerView: 3,
        
      },
    },
  });

let loadMore_btn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;
  loadMore_btn.onclick = () => {
    
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];

    for(var i = currentItem; i<currentItem+3; i++) {
      boxes[i].style.display = 'inline-block';
    };
    currentItem+=3;

    if(currentItem>=boxes.length)
    {
      loadMore_btn.style.display = 'none';
    }
  }