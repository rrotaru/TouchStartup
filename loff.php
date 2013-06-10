<?php require_once("header.php"); ?>

    <div class="section group">
      <div class="col span_1_of_3">
      </div>
      <div class="col span_1_of_3">
	
	<h4>User Logout</h4>
	

<?php
session_start();
session_destroy();
echo " you have sucessfully loged out";
exit;
?>
