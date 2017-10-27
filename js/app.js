// node_modules
import Barba from 'barba.js'
import 'slick-carousel'
// import {TweenMax, Power2, TimelineLite} from 'gsap'
// import ScrollToPlugin from 'gsap/ScrollToPlugin'

// custom_modules
import {barbaTransition} from './modules/balba-settings'
import {Carousel} from './modules/slick-settings'
import {anim} from './modules/gsap-anim'
import {hamburger} from './modules/hamburger'

$(document).ready(() => {
  // Barba
  barbaTransition()
  Barba.Pjax.start()
})

Barba.Dispatcher.on('newPageReady', function (currentStatus, oldStatus, container, newPageRawHTML) {
  const head = document.head
  const newPageRawHead = newPageRawHTML.match(/<head[^>]*>([\s\S.]*)<\/head>/i)[0]
  const newPageHead = document.createElement('head')
  newPageHead.innerHTML = newPageRawHead

  const removeHeadTags = [
    'meta[name="keywords"]',
    'meta[name="description"]',
    'meta[property^="og"]',
    'meta[name^="twitter"]',
    'meta[itemprop]',
    'link[itemprop]',
    'link[rel="prev"]',
    'link[rel="next"]',
    'link[rel="canonical"]'
  ].join(',')

  const headTags = head.querySelectorAll(removeHeadTags)

  for (let i = 0; i < headTags.length; i++) {
    head.removeChild(headTags[i])
  }

  const newHeadTags = newPageHead.querySelectorAll(removeHeadTags)

  for (let j = 0; j < newHeadTags.length; j++) {
    head.appendChild(newHeadTags[j])
  }
})

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
