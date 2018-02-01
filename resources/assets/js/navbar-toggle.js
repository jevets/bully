// Adapted from https://bulma.io/documentation/components/navbar/

document.addEventListener('DOMContentLoaded', function () {
  const $burgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  if ($burgers.length > 0) {
    $burgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        const target = $el.dataset.target
        const $target = document.getElementById(target)

        $el.classList.toggle('is-active')
        $target.classList.toggle('is-active')
      })
    })
  }
})
