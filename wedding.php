<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#wedding'), lightbox);
  });
</script>
<div id="content">
Click the picture for a better look!
<h3>Weddings</h3>
<table id="wedding" data-csv="wedding">
  <tbody>
  </tbody>
</table>
</div>
<?php
include('footer.php');
?>
