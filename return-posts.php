<!--PHP Script for returning recent post elements to main page-->
<!--By Robert Rotaru-->

<?php
  include('RSS/magpie/rss_fetch.inc');

$url = "http://newhiteboard.com/feed/";

$feed = fetch_rss($url);

if ($feed) {
    
    $items = array_slice($feed->items, 0, 5);
   
    foreach ($items as $item) {
        $description = preg_split("/<div class='yarpp-related-rss'>/", $item['description']);
        echo "<div id='post_container'>
              <div id='post_card'>
                <div class='front face'>
                  <h3 class='post title'>" . $item["title"] . "</h3>
                  <p>" . date("F d, Y", strtotime($item["pubdate"])) . "</p>
                  <p id='blurb'>" . $item[""] . "</p>
                </div>
                <div class='back face'>
                  <p class='post content'>" . $description[0] . "</p>
                  <span class='read-more'><a href='" . $item["link"] . "'>Read more</a></span>
                </div>
              </div>
            </div>";
    }
}
?>