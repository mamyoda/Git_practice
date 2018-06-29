<?php

    $stg_url = "https://moneylab.f-academy.jp/feed/";
    $stg_rss = simplexml_load_file($stg_url,'SimpleXMLElement',LIBXML_NOCDATA);

    $stg_title = mb_convert_encoding(($stg_rss->channel->item->title),"sjis","utf-8");
    $stg_link = $stg_rss->channel->item->link;
    $stg_category = $stg_rss->channel->item->category;
    $stg_content = $stg_rss->channel->item->enclosure->attributes()->url;

    $more = mb_convert_encoding("もっと読む","sjis","utf-8");

    echo '<div class="matchHeight"><a href="' . $stg_link . '" target="_blank">
           <img src="' . $stg_content . '">' . $stg_title . '</a></div>
           <a href="' . $stg_link . '" class="btn center blank" target="_blank">' . $more . '</a>';
?>