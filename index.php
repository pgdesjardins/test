<?php
include '../magpierss-master/rss_fetch.inc';
?>

<html>
<body>
<h2>Blog</h2>
                <div id="feed" class="rssFeed"><div class="rssBody"><ul>
                <?php
                
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
                ?>
                </ul></div></div>
                
                <?php
                $url = "http://environnement.ca/blog/?feed=rss2";
$xml = simplexml_load_file($url);
echo "<pre>";
echo $xml;
echo "</pre>";
for($i = 0; $i < 1; $i++){
  
  $title = $xml->channel->item[$i]->title;
  $link = $xml->channel->item[$i]->link;
  $description = $xml->channel->item[$i]->description;
  $pubDate = $xml->channel->item[$i]->pubDate;
  

  echo "<a target='_blank' href='$link'><b>$title</b></a>"; // Title of post
  echo "$description"; // Description
  echo "<br />$pubDate<br /><br />";
  } // Date Published
  ?>

</body>
</html>
