<?php
include('header.php');
?>
<script src="js/jquery.slides.min.js"></script>
 <script>
    $(function() {
      $('#slides').slidesjs({
        width: 600,
        height: 450,
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
		  <img src="img/christmas/large_resize/20101201489.jpg" alt="">
		  <img src="img/easter/large_resize/201104151333.jpg" alt="">
		  <img src="img/mothers_day/large_resize/201105031827.jpg" alt="">
		  <img src="img/thanksgiving/large_resize/20101003043.jpg" alt="">
		  <img src="img/corsage/large_resize/DSCN4752.jpg" alt="">
		  <img src="img/special_order/large_resize/DSCN4927.jpg" alt="">
		</div>
	</div>
	<h3>Welcome</h3>
	Insert text.
</div>
<?php
include('footer.php');
?>
