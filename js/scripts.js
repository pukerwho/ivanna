$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

//MAIN HERO
var swiperMainServices = function() {
  if ($(document).width() > 760) {
    var swiperServices = new Swiper('.swiper-services', {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-services-button-next',
        prevEl: '.swiper-services-button-prev',
      },
    })
  }
}

swiperMainServices();

var swiperMainVideos = function() {
  if ($(document).width() > 760) {
    var swiperVideos = new Swiper('.main_videos_swiper', {
      slidesPerView: 4,
      spaceBetween: 90,
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    })
  }
}

swiperMainVideos();

if ($('.videos__block-play').length > 0) {
  $('.videos__block-play').hover(function(){
    $('.videos__block').addClass('videos__block__playhover');
  })
  $('.videos__block-play').mouseleave(function(){
    $('.videos__block').removeClass('videos__block__playhover');
  });
}