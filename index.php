<?php
// include '../magpierss-master/rss_fetch.inc';
require_once(dirname(__FILE__).'/Feed.php');

?>

<html>
<body>
<h2>Blog</h2>
              <?php
              $url = 'http://environnement.ca/blog/?feed=rss2';
              $homepage = file_get_contents($url);
echo '<pre>'.$homepage;.'</pre>'
              ?>

                <div id="feed" class="rssFeed"><div class="rssBody"><ul>
                <!-- <?php
                
                  $url = 'http://environnement.ca/blog/?feed=rss2';
                  //$rss = fetch_rss($url);

                  echo '<pre>';
                  echo 1+2;
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
                ?> -->
                </ul></div></div>
                
                <?php
                $url = 'http://environnement.ca/blog/?feed=rss2';

$rss = Feed::loadRss($url);
echo 'Title: ', $rss->title;
echo 'Description: ', $rss->description;
echo 'Link: ', $rss->link;

foreach ($rss->item as $item) {
  echo 'Title: ', $item->title;
  echo 'Link: ', $item->link;
  echo 'Timestamp: ', $item->timestamp;
  echo 'Description ', $item->description;
  echo 'HTML encoded content: ', $item->{'content:encoded'};
}
  ?>



</body>
</html>
