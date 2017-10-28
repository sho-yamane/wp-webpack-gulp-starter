// node_modules
import Barba from 'barba.js'

// custom_modules

export function barbaDispatcherInitStateChange () {
  Barba.Dispatcher.on('initStateChange', () => {
    if (typeof ga === 'function') {
      /* eslint-disable */
      ga('send', 'pageview', window.location.pathname)
      /* eslint-enable */
    }
  })
}
