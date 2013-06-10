<!--PHP Script for returning promoted content to main page-->
<!--By Robert Rotaru-->

<?php
  $sql_promoted = "SELECT * FROM posts WHERE promoted=1;";
  try {
    $rows = $conn->query($sql_promoted);
    $item_column = 0;
    foreach($rows as $row) {
      echo "<div id='promoted_container'>
                <div class='front face'>
                  <img id='post-image' src='" . $row["image_link"] . "' width='175' height='175'/>
                  <h3 class='promo title'>" . $row["title"] . "</h3>
                  <p>" . date("F d Y", $row["post_date"]) . "</p>
                  <p>" . $row["content"] . "</p>
                  <span class='read-more'><a href='" . $row["full_link"] . "'>Read more</a></span>
                </div>
            </div>";
    }
  } catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }
?>
