//select element function
const selectElement = function (element){
return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggler.addEventListener('click', function(){
    body.classList.toggle('open');
});


$('.main-carousel').flickity({
    // options
    cellAlign: 'left',
    freeScroll: true,
    wrapAround: true
  });
  

//blog-slider
//var swiper = new swiper('blog-slider',{
 //   spaceBetween: 30,
  //  effect: 'fade',
   // loop: true,
    //mousewheel: {
    //    invert: false,
   // },
    //autoHeight: true,
   // pagination: {
      //  el: '.blog-slider_pagination',
    //    clickable: true,
//    }
//});

//Product Page Image Slide
