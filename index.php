<?php
// include '../magpierss-master/rss_fetch.inc';
require_once(dirname(__FILE__).'/Feed.php');

?>

<html>
<body>
<h2>Blog</h2>
              <?php
              $url = 'http://environnement.ca/blog/?feed=rss2';

              $opts = array(
  'http'=>array(
    'header'=>"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36")
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents($url, false, $context);

              echo '<pre>'.$file.'</pre>';
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
