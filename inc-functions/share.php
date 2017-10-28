<?php

function webpack_gulp_starter_share_buttons() {
    $url_encode = urlencode( get_permalink() );
    $title_encode = urlencode( get_the_title() );
    $tw_account = 'xxxxxx';

    $twitter_html = '<div class="twitter"><a href="https://twitter.com/intent/tweet?url=' . $url_encode . '&text=' . $title_encode . '&tw_p=tweetbutton&via=' . $tw_account . '" target="_blank"><span class="icon"><img src="' . get_theme_file_uri( 'icons/twitter.svg' ) . '"></span><span class="txt">Twitter</span></a></div>';
    $facebook_html = '<div class="facebook"><a href="https://www.facebook.com/sharer.php?src=bm&u=' . $url_encode . '&t=' . $title_encode . '" target="_blank"><span class="icon"><img src="' . get_theme_file_uri( 'icons/facebook.svg' ) . '"></span><span class="txt">Facebook</span></a></div>';
    $hatebu_html = '<div class="hatebu"><a href="https://b.hatena.ne.jp/add?mode=confirm&url=' . $url_encode . '"><span class="icon"><img src="' . get_theme_file_uri( 'icons/hatebu.svg' ) . '"></span><span class="txt">Hatena</span></a></div>';

    $html = '<div class="share">';
    $html .= $twitter_html . $facebook_html . $hatebu_html;
    $html .= '</div>';

    return $html;
}
