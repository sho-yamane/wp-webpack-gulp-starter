// node_modules
import Barba from 'barba.js'

// custom_modules
import {consoleLog} from './modules/custom'
import {barbaTransition} from './modules/balba-settings'

// 動作テスト
$(document).ready(() => {
  consoleLog('文章引数')
})

// Barba
barbaTransition()
Barba.Pjax.start()
