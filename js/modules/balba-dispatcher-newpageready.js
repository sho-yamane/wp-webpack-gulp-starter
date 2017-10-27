import Barba from 'barba.js'

export function barbaDispatcherNewPageReady () {
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
}
