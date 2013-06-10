<!--PHP Script to return jobs from jobs table-->
<?php

  $sql_jobs = "SELECT * FROM jobs";

  try {
    $rows = $conn->query($sql_jobs);
    $item_column = 0;
    foreach($rows as $row) {
      // Checks if the profile should begin a new row
      if ($item_column < 1) {
        echo "<div class='section group'>
                <div class='col span_1_of_3'>
                  <div id='jobs_container'>
                   <div id='jobs_card'>
                     <img id='jobs-image' src='".$row["image_link"]."' width='150' height='150'/>
                    <h3 class='jobs title'><a href='viewjob.php?id=" . $row["id"] . "'>" . $row["title"] . "</a></h3>
                    <p>" . $row["company"] . ", " . $row["location"] . "
                    <br>Posted " . date("F d Y", $row["post_date"]) . "</p>
                    <p id='job-desc'>" . $row["job_description"] . "</p>
                  </div>
                </div>
              </div>";
        $item_column++;
      }
      // Checks if the profile should end a row
      else if ($item_column > 1) {
        echo "<div class='col span_1_of_3'>
                <div id='jobs_container'>
                  <div id='jobs_card'>
                    <img id='jobs-image' src='".$row["image_link"]."' width='150' height='150'/>
                    <h3 class='jobs title'><a href='viewjob.php?id=" . $row["id"] . "'>" . $row["title"] . "</a></h3>
                    <p>" . $row["company"] . ", " . $row["location"] . "
                    <br>Posted " . date("F d Y", $row["post_date"]) . "</p>
                    <p id='job-desc'>" . $row["job_description"] . "</p>
                  </div>
                </div> 
              </div>
            </div>";
        $item_column = 0;
      }
      else {
        echo "<div class='col span_1_of_3'>
                <div id='jobs_container'>
                  <div id='jobs_card'>
                    <img id='jobs-image' src='".$row["image_link"]."' width='150' height='150'/>
                    <h3 class='jobs title'><a href='viewjob.php?id=" . $row["id"] . "'>" . $row["title"] . "</a></h3>
                    <p>" . $row["company"] . ", " . $row["location"] . "
                    <br>Posted " . date("F d Y", $row["post_date"]) . "</p>
                    <p id='job-desc'>" . $row["job_description"] . "</p>
                  </div>
                </div>
              </div>";
        $item_column++;
      }
    }
  } catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }
?>
