// Search Block End
const $ = jQuery
// Mobile Menu Open Start
$('#mobile-header-trigger').on('click', function () {
  $('.lb-mobile-menu').addClass('lb-mobile-menu--active')
  $('#mobile-header-trigger').addClass('is-active')
  $('body').css('overflow-y', 'hidden')
})

$('.lb-mobile-menu__close-button').on('click', closeMobileMenu)
$('.lb-mobile-menu').on('click', function (e) {
  if (e.target !== this) return
  closeMobileMenu()
})

function closeMobileMenu() {
  $('.lb-mobile-menu').removeClass('lb-mobile-menu--active')
  $('#mobile-header-trigger').removeClass('is-active')
  $('body').css('overflow-y', '')
}

$('.menu-item-has-children > a[href="#"],.menu-item-has-children > a[href=""]').on(
  'click',
  function (e) {
    e.preventDefault()
  }
)

// Mobile Menu Open End

// Mobile Children Start

$('.lb-mobile-menu .lb-mobile-menu__toggle-button').on('click', function (e) {
  e.preventDefault()
  let $parentLi = $(this).parent()
  $parentLi.addClass('toggled')
  if ($('.lb-mobile-menu .menu-item-has-children').hasClass('toggled')) {
    $parentLi.children('ul').toggle()
  }
  $parentLi.toggleClass('space-up')
  return false
})

// Mobile Children End
