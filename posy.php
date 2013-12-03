<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#posy'), lightbox);
  });
</script>
<div id="content">
Click the picture for a better look!
<h3>Posies</h3>
<table id="posy" data-csv="posy">
  <tbody>
  </tbody>
</table>
<p class="priceWarning"><b>Note:</b> Prices subject to change. Arrangements may differ from picture.</p>
</div>
<?php
include('footer.php');
?>
