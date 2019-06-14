if (!$('body').hasClass('page-template-tpl_main')) {
  $('header').css({'background-color': '#692936'});
}

jQuery(document).ready(function($){
  $('.p_single__photo img').addClass('show');
  $('.p_single__photo-absolute').addClass('show');
  $('.p_single__title').addClass('show');
  $('.p_single__description').addClass('show');
  $('.p_single__button').addClass('show');
  $('.p_single__info').addClass('show');

  $('.main__welcome__content-title').addClass('show');
  $('.main__welcome__content-description').addClass('show');
  $('.main__welcome__content-buttons').addClass('show');
})

$('.mobile-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('mobile-menu__active');
  $('.mobile-cover').toggleClass('mobile-cover__open');
  $('body').toggleClass('modal-open');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 90) {
    $('header').addClass('header__fixed');
    $('header').css({'background-color': '#692936'});
  } else {
    if (!$('body').hasClass('page-template-tpl_main')) {
      $('header').removeClass('header__fixed');
    } else {
      $('header').css({'background-color': 'transparent'});
    }
  }
})

//Плавный скролл
$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  var target = $($.attr(this, 'href'));
  var targetScroll =  target.offset().top - 90
  $('html, body').animate({
      scrollTop: targetScroll
  }, 500);
});

//Callback Form Open
if ($('.callback').length > 0) {
  $(document).on('click', '.callback', function(){
    $('.callback__modal').addClass('callback__modal-open');
    $('body').addClass('modal-open');
    $('.modal__bg').addClass('modal__bg-open');
  });
}

//Callback Form Close
if ($('.callback__close').length > 0) {
  $(document).on('click', '.callback__close', function(){
    $('.callback__modal').removeClass('callback__modal-open');
    $('body').removeClass('modal-open');
    $('.modal__bg').removeClass('modal__bg-open');
  });
}

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
  } else {
    var swiperServices = new Swiper('.swiper-services', {
      slidesPerView: 1,
      spaceBetween: 0,
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
  } else {
    var swiperVideos = new Swiper('.main_videos_swiper', {
      slidesPerView: 2,
      spaceBetween: 45,
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