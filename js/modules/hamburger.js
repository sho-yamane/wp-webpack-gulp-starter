export function hamburger (elem, elem2) {
  $(elem).click(() => {
    $(elem).toggleClass('is-active')
    $(elem2).toggleClass('is-active')
  })
}
