<?php
require('../magpierss-master/rss_fetch.inc')
?>

<html>
<body>
<h2>Blog</h2>
                <div id="feed" class="rssFeed"><div class="rssBody"><ul>
                <?php
                
                  $url = 'http://environnement.ca/blog/?feed=rss2';
                  // $rss = fetch_rss($url);

                  echo '<pre>';
                  echo $url;
                  echo '</pre>';

                  // foreach ( $rss->items as $item ) {
                  //         // echo "Title: " . utf8_encode($item['title']);
                  //         //echo "Published: " . date("n/j/o h:i A", $published);
                  //         // echo "Content: " . utf8_encode(implode(",", $item['content']));
                  //         echo '<li class="rssRow odd">';
                  //         echo '<h4>';
                  //         echo '<a href="';
                  //         echo  $item['link'];
                  //         echo  '" title="" target="_self">';
                  //         echo utf8_encode($item['title']);
                  //         echo '</a></h4><div>';
                  //         //echo date("n/j/o h:i A", $item['pubdate');
                  //         echo '</div>';
                  //         echo utf8_encode(implode(",", $item['content']));
                  //         echo '</li>';

                  // }
                ?>
                </ul></div></div>
</body>
</html>
