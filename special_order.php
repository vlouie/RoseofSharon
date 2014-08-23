<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#special_order'), lightbox);
  });
</script>
<div id="content">
<h3 id="specialBanner">Special Order</h3>
<p class="priceWarning"><b>Note:</b> Prices subject to change due to season and availability. Arrangements may differ from picture.</p>
<table class="productTable" id="special_order" data-csv="special_order">
  <tbody>
  </tbody>
</table>
<?php
include('footer.php');
?>
