<!--PHP Script to return search results from posts table-->
<?php

  $search_term=$_POST["search"];
  include('RSS/magpie/rss_fetch.inc');

  $url = "http://newhiteboard.com/feed/";

  $feed = fetch_rss($url);
  
if ($feed) {
    
    // Checks if nothing was returned
    $empty = true;
    $items = $feed->items;
   
    foreach ($items as $item) {
    	$match = false;
        // Attempts to match search-term to a field in each entry
    	foreach ($item as $field) {
            if (preg_match("/".$search_term."/", $field)) { $match = true; $empty = false; continue; }
        }
        // If there is no match, filter out the entry.
        if (!$match) { continue;}
        // Otherwise return the entry.
        $description = preg_split("/<div class='yarpp-related-rss'>/", $item['description']);
        echo "<div id='search-post'>
                <h3 class='post title'><a href='" . $item["link"] . "'>" . $item["title"] . "</a></h3>
                <p>" . date("F d, Y", strtotime($item["pubdate"])) . "</p>
                <p class='search-content'>" . $description[0] . "</p>
          </div>";
    }
    if ($empty) {
    	echo "<p>No matching posts found.</p>";
    }
}
?>