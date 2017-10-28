// node_modules
import Barba from 'barba.js'

// custom_modules
import {barbaTransition} from './modules/balba/balba-transition'
import {barbaDispatcherLinkClicked} from './modules/balba/balba-dispatcher-linkclicked'
import {barbaDispatcherInitStateChange} from './modules/balba/balba-dispatcher-initstatechange'
import {barbaDispatcherNewPageReady} from './modules/balba/balba-dispatcher-newpageready'
import {barbaDispatcherTransitionCompleted} from './modules/balba/balba-dispatcher-transitioncompleted'

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
