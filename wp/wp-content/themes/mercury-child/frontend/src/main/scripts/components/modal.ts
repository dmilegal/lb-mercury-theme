document.addEventListener('DOMContentLoaded', () => {
  const openModalButtons = document.querySelectorAll('.open-modal')
  const closeModalButtons = document.querySelectorAll('[data-close]')
  const overlayElements = document.querySelectorAll('.modal__overlay')

  // Open modal
  openModalButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const modalId = button.getAttribute('data-modal')
      const modal = document.getElementById(modalId)
      modal.classList.add('modal--active')
    })
  })

  // Close modal
  closeModalButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const modal = button.closest('.modal__overlay')
      modal.classList.remove('modal--active')
    })
  })

  // Close modal when clicking outside the content
  overlayElements.forEach((overlay) => {
    overlay.addEventListener('click', (event) => {
      if (event.target === overlay) {
        overlay.classList.remove('modal--active')
      }
    })
  })
})
