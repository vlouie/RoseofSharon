<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#mothers_day'), lightbox);
  });
</script>
<div id="content">
Click the picture for a better look!
<p class="priceWarning"><b>Note:</b> Prices subject to change due to season and availability. Arrangements may differ from picture.</p>
<h3>Mother's Day</h3>
<table id="mothers_day" data-csv="mothers_day">
  <tbody>
  </tbody>
</table>
</div>
<?php
include('footer.php');
?>
