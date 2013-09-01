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
Click the picture for a better look!
<h3>Special Order</h3>
<table id="special_order" data-csv="special_order">
  <tbody>
  </tbody>
</table>
<p class="priceWarning"><b>Note:</b> Prices subject to change.</b></p>
</div>
<?php
include('footer.php');
?>
