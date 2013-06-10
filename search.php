<?php require_once("header.php"); ?>

      <div class="section group">
        <div id="desc" class="section group">
          <div class="col span_2_of_5">
            <h3>Jobs</h3>
          </div>
          <div class="col span_2_of_5">
            <h3>Posts</h3>
          </div>
          <div class="col span_1_of_5">
            <h3>Profiles</h3>
          </div>
        </div>
      </div>
      <div class="section group">
				<div class="col span_2_of_5">
        <?php require_once('search-jobs.php'); ?>
        </div>
        <div class="col span_2_of_5">
        <?php require_once('search-posts.php'); ?>
        </div>
        <div class="col span_1_of_5">
        <?php require_once('search-profiles.php'); ?>
        </div>
      </div>

<?php require_once("footer.php"); ?>
