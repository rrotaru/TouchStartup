<?php

if (isset($_SESSION['username']) && isset($_SESSION['userID'])) {
    echo "<div id='nav' class='section group'>
        <div class='col span_1_of_7'>
          <a href='about.html'>About</a>
        </div>
        <div class='col span_1_of_7'>
          <a href='#'>Community</a>
        </div>
        <div class='col span_1_of_7'>
          <a href='jobslisting.php'>Opportunities</a>
        </div>
        <div class='col span_1_of_7'>
          <a href='#'>Experts</a>
        </div>
        <div class='col span_1_of_7'>
          <a href='profile.php?userID=" . $_SESSION['userID'] . "'>My Profile</a>
        </div>
        <div id='search' class='col span_2_of_7'>
          <form method='post' action='search.php'>
          <input type='text' name='search' id='search' placeholder='Search' >
          </form>
        </div>
      </div>";
}
else {
    echo "<div id='nav' class='section group'>
        <div class='col span_1_of_6'>
          <a href='about.html'>About</a>
        </div>
        <div class='col span_1_of_6'>
          <a href='#'>Community</a>
        </div>
        <div class='col span_1_of_6'>
          <a href='jobslisting.php'>Opportunities</a>
        </div>
        <div class='col span_1_of_6'>
          <a href='#'>Experts</a>
        </div>
        <div id='search' class='col span_2_of_6'>
          <form method='post' action='search.php'>
          <input type='text' name='search' id='search' placeholder='Search' >
          </form>
        </div>
      </div>";
}