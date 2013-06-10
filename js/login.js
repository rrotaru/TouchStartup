$(document).ready(function() {
    $(".login_btn").click(function() {
      var loginBox = $("#login_box");

      if (loginBox.is(":visible"))
          loginBox.fadeOut("fast");
      else
          loginBox.fadeIn("fast");
      return false;
    });
});
