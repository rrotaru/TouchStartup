<!--PHP Script to return search results from jobs table-->
<?php

  $search_term=$_POST["search"];
  $sql_jobs_search = "SELECT * FROM jobs WHERE title LIKE '%".$search_term."%' OR type LIKE '%".$search_term."%' OR location LIKE '%".$search_term."%' OR company LIKE '%".$search_term."%' OR skills LIKE '%".$search_term."%'";
  try {
    $rows = $conn->query($sql_jobs_search);
    $count = $rows->rowCount();
    if ($count == 0) {
      echo "<p>No matching profiles found.</p>";
    }
    foreach($rows as $row) {
      echo "<div id='jobs_container'>
              <div id='jobs_card'>
                <img id='jobs-image' src='".$row['image_link']."' width='150' height='150'/>
                <h3 class='jobs title'><a href='viewjob.php?id=" . $row["id"] . "'>" . $row["title"] . "</a></h3>
                <p>" . $row["company"] . ", " . $row["location"] . "
                <br>Posted " . date("F d Y", $row["post_date"]) . "</p>
                <p id='job-desc'>" . $row["job_description"] . "</p>
              </div>
            </div>";
    }
  } catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }
?>
