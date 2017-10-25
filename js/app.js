// node_modules
import Barba from 'barba.js'
import 'slick-carousel'

// custom_modules
import {consoleLog} from './modules/custom'
import {barbaTransition} from './modules/balba-settings'
import {Carousel} from './modules/slick-settings'

// common
$(document).ready(() => {
  // 動作テスト
  consoleLog('文章引数')

  // Barba
  barbaTransition()
  Barba.Pjax.start()

  // Slick
  const carousel = new Carousel('#js-slider')
  carousel.init()
})
