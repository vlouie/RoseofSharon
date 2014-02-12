<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#thanksgiving'), lightbox);
  });
</script>
<div id="content">
Click the picture for a better look!
<p class="priceWarning"><b>Note:</b> Prices subject to change due to season and availability. Arrangements may differ from picture.</p>
<h3>Thanksgiving</h3>
<table id="thanksgiving" data-csv="thanksgiving">
  <tbody>
  </tbody>
</table>
</div>
<?php
include('footer.php');
?>
