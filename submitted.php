<?php require_once("header.php"); ?>

    <div class="section group">
      <div class="col span_1_of_4">
        <?php require_once('see-applications.php'); ?>

      </div>
      <div class="col span_1_of_2" style="padding: 1em;">
<?php
require_once(dirname(__FILE__) . '\\config\\config.php');


$sql = "SELECT * FROM applications";
echo "<table border='1' cellspacing='0' cellpadding='6'> 
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Resume</th>
            <th>Date Submitted</th>
          </tr>
        </thead>
        <tbody>";

try {
  $rows = $conn->query($sql);
  foreach($rows as $row) {
      echo "<tr>
              <td>" . $row["id"] . "</td>
              <td>" . $row["name"] . "</td>
              <td>
                <a href='mailto:" . $row["email"] . "'>" . $row["email"] . "</a>
                <br><a href='tel:" . $row["phone"] . "'>" . $row["phone"] . "</td>
              <td>
                <a href='" . $row["file_location"] . $row["resume"] . "'>" . $row["resume"] . "</a>
                <br><a href='" . $row["file_location"] . $row["letter"] . "'>" . $row["letter"]. "</a></td>
              <td>" . $row["submitted_date"]. "</td>
            </tr>";
  }
} catch (PDOException $e) {
  echo "Query failed: " . $e->getMessage();
}
echo "</tbody></table>";
$conn = null;
?>
         </div>
      </div>
<?php require_once("footer.php"); ?>

