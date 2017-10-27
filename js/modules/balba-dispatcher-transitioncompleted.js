// node_modules
import Barba from 'barba.js'
import 'slick-carousel'

// custom_modules
import {Carousel} from '../modules/slick-settings'
import {anim} from '../modules/gsap-anim'
import {hamburger} from '../modules/hamburger'

export function barbaDispatcherTransitionCompleted () {
  Barba.Dispatcher.on('transitionCompleted', () => {
    // top
    if (window.location.pathname === '/') {
      const carousel = new Carousel('#js-slider')
      carousel.init()
    }
    // commmon
    $('#wpadminbar a').addClass('no-barba')
    hamburger('#js-hamburger', '#js-nav')
    anim()
  })
}
