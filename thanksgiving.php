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
<h3>Thanksgiving</h3>
<table id="thanksgiving" data-csv="thanksgiving">
  <tbody>
  </tbody>
</table>
</div>
<?php
include('footer.php');
?>
