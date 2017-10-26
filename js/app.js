// node_modules
import Barba from 'barba.js'
import 'slick-carousel'
// import {TweenMax, Power2, TimelineLite} from 'gsap'
// import ScrollToPlugin from 'gsap/ScrollToPlugin'

// custom_modules
import {consoleLog} from './modules/custom'
import {barbaTransition} from './modules/balba-settings'
import {Carousel} from './modules/slick-settings'
import {anim} from './modules/gsap-anim'

// common
$(document).ready(() => {
  // 動作テスト
  consoleLog('文章引数')

  // Barba
  $('#wpadminbar a').addClass('no-barba')
  barbaTransition()
  Barba.Pjax.start()

  // Slick
  const carousel = new Carousel('#js-slider')
  carousel.init()

  // Gsap
  anim()
})
