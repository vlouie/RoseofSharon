<?php
include('header.php');
?>
<script src="js/table.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    tablize($('#corsage'), lightbox);
  });
</script>
<div id="content">
Click the picture for a better look!
<h3>Corsages</h3>
<table id="corsage" data-csv="corsage">
  <tbody>
  </tbody>
</table>
</div>
<?php
include('footer.php');
?>
