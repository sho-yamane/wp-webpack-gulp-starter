// node_modules
import Barba from 'barba.js'

// custom_modules
import {barbaTransition} from './modules/balba-transition'
import {barbaDispatcherLinkClicked} from './modules/balba-dispatcher-linkclicked'
import {barbaDispatcherInitStateChange} from './modules/balba-dispatcher-initstatechange'
import {barbaDispatcherNewPageReady} from './modules/balba-dispatcher-newpageready'
import {barbaDispatcherTransitionCompleted} from './modules/balba-dispatcher-transitioncompleted'

// Barba
$(document).ready(() => {
  barbaTransition()
  Barba.Prefetch.init()
  Barba.Pjax.start()
})
barbaDispatcherLinkClicked()
barbaDispatcherInitStateChange()
barbaDispatcherNewPageReady()
barbaDispatcherTransitionCompleted()
