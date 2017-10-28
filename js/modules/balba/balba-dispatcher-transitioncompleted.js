// node_modules
import Barba from 'barba.js'

// custom_modules
import {anim} from '../../modules/gsap-anim'
import {hamburger} from '../../modules/hamburger'

export function barbaDispatcherTransitionCompleted () {
  Barba.Dispatcher.on('transitionCompleted', () => {
    // commmon
    $('#wpadminbar a').addClass('no-barba')
    hamburger('#js-hamburger', '#js-nav')
    anim()
  })
}
