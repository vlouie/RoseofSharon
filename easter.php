<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#easter'), lightbox);
  });
</script>
<div id="content">
Click the picture for a better look!
<h3>Easter</h3>
<table id="easter" data-csv="easter">
  <tbody>
  </tbody>
</table>
<p class="priceWarning"><b>Note:</b> Prices subject to change.</b></p>
</div>
<?php
include('footer.php');
?>
