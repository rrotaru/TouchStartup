<!--PHP Script for returning recent user data to main page-->
<!--By Robert Rotaru-->

<?php

  /* Selects all data from the user table and joins it with appropriate data from either the
     employees or company tables to display on the home page.
  */
  $sql_profiles = "SELECT users.username, users.imageLink, users.userID, employees.firstName, employees.lastName, employees.location, employees.occupation, employees.userID
FROM users
INNER JOIN employees ON (users.userID = employees.userID)
UNION
SELECT users.username, users.imageLink, users.userID, company.companyName, null as lastName, company.location, null as occupation, company.userID
FROM users
INNER JOIN company ON (users.userID = company.userID) ORDER BY RAND()";
  try {
    $rows = $conn->query($sql_profiles);
    $item_column = 0;
    foreach($rows as $row) {
      // Checks if the profile should begin a new row
      if ($item_column < 1) {
        echo "<div class='section group'>
                <div class='col span_1_of_5'>
                  <div class='profile' id='profile_container'>
                    <div id='profile_card'>
                      <div class='front face'>
                        <img src='" . $row["imageLink"] . "' width='100%' height='auto'/>
                      </div>
                      <div class='back face'>
                        <a href='profile.php?userID=" . $row["userID"] . "'>
                          <span></span>
                        </a>
                        <h4>" . $row["firstName"] . " " . $row["lastName"] . "</h4>
                        <h5>" . $row["location"] . "</h5>
                        <h5>" . $row["occupation"] . "</h5>
                      </div>
                    </div>
                  </div>
                </div>";
        $item_column++;
      }
      // Checks if the profile should end a row
      else if ($item_column > 3) {
        echo "<div class='col span_1_of_5'>
                <div class='profile' id='profile_container'>
                  <div id='profile_card'>
                    <div class='front face'>
                      <img src='" . $row["imageLink"] . "' width='100%' height='auto'/>
                    </div>
                    <div class='back face'>
                      <a href='profile.php?userID=" . $row["userID"] . "'>
                        <span></span>
                      </a>
                      <h4>" . $row["firstName"] . " " . $row["lastName"] . "</h4>
                      <h5>" . $row["location"] . "</h5>
                      <h5>" . $row["occupation"] . "</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
        $item_column = 0;
      }
      else {
        echo "<div class='col span_1_of_5'>
                <div class='profile' id='profile_container'>
                  <div id='profile_card'>
                    <div class='front face'>
                      <img src='" . $row["imageLink"] . "' width='100%' height='auto'/>
                    </div>
                    <div class='back face'>
                      <a href='profile.php?userID=" . $row["userID"] . "'>
                        <span></span>
                      </a>
                      <h4>" . $row["firstName"] . " " . $row["lastName"] . "</h4>
                      <h5>" . $row["location"] . "</h5>
                      <h5>" . $row["occupation"] . "</h5>
                   </div>
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