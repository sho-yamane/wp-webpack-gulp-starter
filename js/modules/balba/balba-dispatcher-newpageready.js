// node_modules
import Barba from 'barba.js'
import 'slick-carousel'

// custom_modules
import {Carousel} from '../../modules/slick-settings'
import {cleanUp} from '../../modules/balba/balba-head-cleanup'

export function barbaDispatcherNewPageReady () {
  Barba.Dispatcher.on('newPageReady', function (currentStatus, oldStatus, container, newPageRawHTML) {
    cleanUp(currentStatus, oldStatus, container, newPageRawHTML)

    if (window.location.pathname === '/') {
      const carousel = new Carousel('#js-slider')
      carousel.init()
    }
  })
}
