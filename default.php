<?php
include('header.php');
?>
<script src="js/jquery.slides.min.js"></script>
 <script>
    $(function() {
      $('#slides').slidesjs({
        width: 450,
        height: 600,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
  </script>
<!-- Content here -->
<div id="content">
	<div class="container">
		<div id="slides">
		  <img src="img/20110127787.jpg" alt="">
		  <img src="img/20110203795.jpg" alt="">
		  <img src="img/201104121297.jpg" alt="">
		  <img src="img/201104151327.jpg" alt="">
		  <img src="img/201104181364.jpg" alt="">
		  <img src="img/201104271486.jpg" alt="">
		</div>
	</div>
	<h3>Welcome</h3>
	Insert text.
</div>
<?php
include('footer.php');
?>