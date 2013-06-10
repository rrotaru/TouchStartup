<html><head><title>MagpieRSS Test</title></head><body>

<?php

include('RSS/magpie/rss_fetch.inc');

$url = "http://newhiteboard.com/feed/";

$feed = fetch_rss($url);

/*echo "<pre>";

print_r($feed);
echo "</pre>";

function search($entry) {

	return preg_match
}*/

if ($feed) {
    
    $items = $feed->items;
   
    foreach ($items as $item) {
    	$match = true;
    	/*foreach ($item as $field) {
            if (preg_match('/Grid/', $field)) { $match = true; continue; }
        }*/
        if (!$match) { continue;}
        $description = preg_split("/<div class='yarpp-related-rss'>/", $item['description']);
        echo "<div id='post_container'>
              <div id='post_card'>
                <div class='front face'>
                  <h3 class='post title'>" . htmlspecialchars_decode($item["title"], ENT_QUOTES) . "</h3>
                  <p>" . date("F d, Y", strtotime($item["pubdate"])) . "</p>
                  <p id='blurb'>" . $item[""] . "</p>
                </div>
                <div class='back face'>
                  <p class='post content'>" . $description[0] . "end</p>
                  <span class='read-more'><a href='" . $item["link"] . "'>Read more</a></span>
                </div>
              </div>
            </div>";
    }
}

?>

</body></html>