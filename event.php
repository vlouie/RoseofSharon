<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#event'), lightbox);
  });
</script>
<div id="content">
<h3>Events</h3>
<p class="priceWarning"><b>Note:</b> Prices subject to change due to season and availability. Arrangements may differ from picture.</p>
<table class="productTable" id="event" data-csv="event">
  <tbody>
  </tbody>
</table>
</div>
<?php
include('footer.php');
?>
