<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#high_style'), lightbox);
  });
</script>
<div id="content">
Click the picture for a better look!
<h3>High Style</h3>
<table id="high_style" data-csv="high_style">
  <tbody>
  </tbody>
</table>
<p class="priceWarning"><b>Note:</b> Prices subject to change. Arrangements may differ from picture.</p>
</div>
<?php
include('footer.php');
?>
