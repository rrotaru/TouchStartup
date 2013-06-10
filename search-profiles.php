<!--PHP Script to return search results from users table-->
<?php

  $search_term=$_POST["search"];
  $sql_users_search = "SELECT users.userID, users.imageLink,company.companyName as firstName, null as lastName FROM company 
  INNER JOIN users ON (users.userID = company.userID)
  WHERE companyName LIKE '%".$search_term."%' OR companyDesc LIKE '%".$search_term."%' OR location LIKE '%".$search_term."%'
  UNION
  SELECT users.userID, users.imageLink,employees.firstName,employees.lastName FROM employees  
  INNER JOIN users ON (users.userID = employees.userID)
  WHERE firstName LIKE '%".$search_term."%' OR lastName LIKE '%".$search_term."%' OR location LIKE '%".$search_term."%' OR occupation LIKE '%".$search_term."%'
  ";
  try {
    $rows = $conn->query($sql_users_search);
    $count = $rows->rowCount();
    if ($count == 0) {
      echo "<p>No matching profiles found.</p>";
    }
    foreach($rows as $row) {
        echo "<div class='search_profile' id='search-profile'>
                    <a href='profile.php?userID=" . $row["userID"] . "'><span></span></a>
                    <img href='' src='" . $row["imageLink"] . "' width='100%' height='100%'/>
                    <h4><a href='profile.php?userID=" . $row["userID"] . "'>"
                    . $row["firstName"] . " " . $row["lastName"] . "</a></h4></div>";
    }
  } catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
  }
?>