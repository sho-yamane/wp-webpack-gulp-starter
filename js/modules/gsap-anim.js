import {TweenMax} from 'gsap'
// import {TweenMax, Power2, TimelineLite} from 'gsap'

export function anim () {
  TweenMax.fromTo('#fromTo', 0.5, {left: 0}, {left: 300})
}
