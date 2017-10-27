// node_modules
import Barba from 'barba.js'

// custom_modules
import {barbaTransition} from './modules/balba-transition'
import {barbaDispatcherNewPageReady} from './modules/balba-dispatcher-newpageready'
import {barbaDispatcherTransitionCompleted} from './modules/balba-dispatcher-transitioncompleted'

// Barba
$(document).ready(() => {
  barbaTransition()
  Barba.Pjax.start()
})
barbaDispatcherNewPageReady()
barbaDispatcherTransitionCompleted()
