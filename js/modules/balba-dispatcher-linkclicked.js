// node_modules
import Barba from 'barba.js'

// custom_modules

export function barbaDispatcherLinkClicked () {
  Barba.Dispatcher.on('linkClicked', () => {
    $('html, body').animate({scrollTop: 0}, 'slow')
  })
}
