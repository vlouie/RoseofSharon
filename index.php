<?php
include('header.php');
?>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
      animSpeed: 500,
      pauseTime: 3000,
      directionNav: true,
      controlNav: true,
      prevText: "<<",
      nextText: ">>"
    });
});
</script>

<!--
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
-->
<!-- Content here -->
<div id="content">
  <h1>Rose of Sharon Floral Arts</h1>
  <div class="slider-wrapper theme-default">
    <div class="ribbon"></div>
    <div id ="slider" class="nivoSlider">
      <img src="img/slide01.jpg" alt="" />
      <img src="img/slide02.jpg" alt="" />
      <img src="img/slide03.jpg" alt="" />
      <img src="img/slide04.jpg" alt="" />
      <img src="img/slide05.jpg" alt="" />
      <img src="img/slide06.jpg" alt="" />
      <img src="img/slide07.jpg" alt="" />
      <img src="img/slide08.jpg" alt="" />
      <img src="img/slide09.jpg" alt="" />
    </div>
  </div>
	<!--<div class="container">
	</div>-->
	<h3>Welcome</h3>
  <table>
    <tr>
      <td>
        <a href="/christmas.php">
          <div id="christmasButton">Christmas</div>
        </a>
      </td>
      <td>
        <a href="/easter.php">
          <div id="easterButton">Easter</div>
        </a>
      </td>
      <td>
        <a href="/mothers_day.php">
          <div id="mothersButton">Mother's Day</div>
        </a>
      </td>
      <td>
        <a href="/thanksgiving.php">
          <div id="thanksgivingButton">Thanksgiving</div>
        </a>
      </td>
      <td>
        <a href="/valentines.php">
          <div id="valentinesButton">Valentine's</div>
        </a>
      </td>
      <td>
        <a href="/weddings.php">
          <div id="weddingsButton">Weddings</div>
        </a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="/corsage.php">
          <div id="corsageButton">Corsages</div>
        </a>
      </td>
      <td>
        <a href="/posy.php">
          <div id="posyButton">Posies</div>
        </a>
      </td>
      <td>
        <a href="/high_style.php">
          <div id="highstyleButton">High Style</div>
        </a>
      </td>
      <td>
        <a href="/event.php">
          <div id="eventButton">Events</div>
        </a>
      </td>
      <td>
        <a href="/special_order.php">
          <div id="specialButton">Special Order</div>
        </a>
      </td>
    </tr>
  </table>
</div>
<?php
include('footer.php');
?>
