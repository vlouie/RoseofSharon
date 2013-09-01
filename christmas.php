<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#christmas'), lightbox);
  });
</script>
<div id="content">
Click the picture for a better look!
<h3>Christmas</h3>
<table id="christmas" data-csv="christmas">
  <tbody>
  </tbody>
</table>
<p class="priceWarning"><b>Note:</b> Prices subject to change.</b></p>
</div>
<?php
include('footer.php');
?>
