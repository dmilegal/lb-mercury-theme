// Search Block End
const $ = jQuery
// Mobile Menu Open Start
$('#mobile-header-trigger').on('click', function () {
  $('.lb-mobile-menu').addClass('lb-mobile-menu--active')
  $('#mobile-header-trigger').addClass('is-active')
  $('body').css('overflow-y', 'hidden')
})

$('.lb-mobile-menu__close-button').on('click', function () {
  $('.lb-mobile-menu').removeClass('lb-mobile-menu--active')
  $('#mobile-header-trigger').removeClass('is-active')
  $('body').css('overflow-y', '')
})

$('.menu-item-has-children > a').on('click', function (e) {
  e.preventDefault()
})

// Mobile Menu Open End

// Mobile Children Start

$('.lb-mobile-menu .menu-item-has-children').on('click', function () {
  $(this).addClass('toggled')
  if ($('.lb-mobile-menu .menu-item-has-children').hasClass('toggled')) {
    $(this).children('ul').toggle()
  }
  $(this).toggleClass('space-up')
  return false
})

// Mobile Children End