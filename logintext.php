<?php
// If user is logged in, display option to log out, otherwise do vice versa.
if (isset($_SESSION['username']) && isset($_SESSION['userID'])) {
    echo "<div class='col span_1_of_3' style='margin-bottom:0;'>
            <h3><a href='logout.php' style='float: right;'>Logout</a></h3>
          </div>";
}
else {
    echo "<div class='col span_1_of_5' style='margin-bottom:0;'>
            <h3><a href='#' id='button' style='float: right;'>Login</a></h3>
            <div id='login_modal'>
              <div id='login_heading'>
                <h4>Please enter your username and password to login.</h4>
              </div>
                             
              <div id='login_content'>
                <form id='login' action='login.php' method='post'>
                   <input type='text' name='user' maxlength='40' placeholder='Username'>
                   <input type='password' name='pass' maxlength='40' placeholder='Password'>
                   <input id='login_button' type='submit' value='Login' />
                   <!--<div class='fb-login-button' data-show-faces='false' data-width='200' data-max-rows='1' style='visibility:inherit;'></div>-->
                   <!--<h2> Remember Me: </h2> <input type='checkbox' name='remember' value='1'>-->
                 </form>
              </div>
            </div>
          </div>
          <div class='col span_1_of_8' style='margin-bottom:0;'>
            <h3><a href='register.html' style='float: right;'>Register</a></h3>
          </div>";
}
?>