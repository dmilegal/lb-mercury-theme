import './related-posts.scss'
import 'swiper/css'
import Swiper from 'swiper'

function initRelatedPosts() {
  const containers = document.querySelectorAll<HTMLElement>('.lb-related-posts')

  containers.forEach((container) => {
    new Swiper(container, {
      slidesPerView: 'auto',
      spaceBetween: 8,
      freeMode: true,
      breakpoints: {
        768: {
          slidesPerView: 3,
          freeMode: false,
          spaceBetween: 20,
        },
      },
    })
  })
}

initRelatedPosts()
