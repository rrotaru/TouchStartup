		</div>
	</div>
	<div id="footercontainer">
		<footer class="group">
			<div class="col span_1_of_4">
			<h4>About this site</h4>
			<p>The Grid is a redesign of The Whiteboard/CTNEXTDAILY based off of the idea of The Grid New Haven and the A100 program. This project is created by Group 3 of the A100 program. We strive to provide quality in our product and professionalism in our design.</p>
			</div>
			<div class="col span_1_of_4">
			<h4>Categories</h4>
      <p>Take a look at some of the categories we have to offer!</p>
      <select>
        <option value="profiles">Entrepreneur Profiles</option>
        <option value="users">User Profiles</option>
        <option value="experts">Ask an Expert</option>
        <option value="blogs">Blog Posts</option>
        <option value="events">Startup Events</option>
      </select>
      </div>
			<div class="col span_1_of_4">
			<h4>Social Media</h4>
      <p>Check us out at these various social media links for more Grid content and networking opportunities!</p>
			<a href="">Twitter</a><br>
      <a href="">Facebook</a><br>
      <a href="">LinkedIn</a><br>
      <a href="">Google+</a>
      
      </div>
			<div class="col span_1_of_4">
			<h4>Other</h4>
			<p>Seeing as you asked, the <a href="http://www.responsivegridsystem.com">Responsive Grid System</a> is brought to you by <a href="http://www.grahamrobertsonmiller.co.uk">Graham Miller</a> and is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>.</p>
			</div>

		</footer>
	</div>
</div>



	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
  <script>
    $(window).ready(sizeProfile);
    $(window).resize(sizeProfile);
    
    function sizeProfile() {
      var div = $('.profile');
      var width = div.width();

      div.css('height', width);
    };
  </script>
  <script>
    $(window).ready(sizeProfile);
    $(window).resize(sizeProfile);
    
    function sizeProfile() {
      var div = $('.search_profile');
      var span = $('.search_profile a span');
      var width = div.width();

      span.css('width', width);
      span.css('height', width + 15%);
      div.css('height', width + 15%);
    };
  </script>
  <script>
	    $(window).ready(function() {
	        $('.fb-login-button iframe').css('opacity', '0.1');
	    });
  </script>
  <script type="text/javascript">
      $(document).ready(function() {
          $('#button').click(function(e) {        // Button which will activate our modal
              $('#login_modal').reveal({          // The item which will be opened with reveal
                  animation: 'fade',              // fade, fadeAndPop, none
                  animationspeed: 300,            // how fast animtions are
                  closeonbackgroundclick: true,   // if you click background will modal close?
                  dismissmodalclass: 'close'      // the class of a button or element that will close an open modal
              });
          return false;
          });
      });
  </script>
  <script type="text/javascript" src="js/login.js"></script>
  <script src="js/jquery.reveal.js"></script> 
	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr-min.js"></script>
	<![endif]-->


	<!-- More Scripts-->
	<script src="js/responsivegridsystem.js"></script>
  
  <!--Close all MYSQL connections-->
  <?php $conn = null ?>
</body>
</html>
