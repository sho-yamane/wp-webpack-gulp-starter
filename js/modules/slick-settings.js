import 'slick-carousel'

export class Carousel {
  constructor (selector) {
    this.$el = $(selector)
  }

  init () {
    this.$el.slick({
      dots: true,
      autoplay: true
    })
  }
}
