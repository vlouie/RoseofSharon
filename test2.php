<?php
include('header.php');
?>
<script type="text/javascript">
var i;
var CSV_URL = "/tables/christmas.csv";

$(document).ready(function(){
	$.get(CSV_URL, function(data){
		console.log("data: ", data);
	  var rowArray = data.split("\n");
	  var entry;
	  for (var i = 1; i < rowArray.length-1; i++){
		entry = rowArray[i].split(",");
		if (i % 3 == 1){
		  	$('#myTable > tbody').append("<tr><td><img src='/img/small_resize/" + entry[2] + ".jpg'><br /><b>Name:</b> " + entry[0] + "<br /><b>Price:</b> $" + parseInt(entry[1]).toFixed(2) + "<br /><a href='/order.php?id=" + entry[3] +"'><button>Order</button></a></td>");
		  }
		  else if (i%3 == 2){
	  		$('#myTable > tbody > tr:last').append("<td><img src='/img/small_resize/" + entry[2] + ".jpg'><br /><b>Name:</b> " + entry[0] + "<br /><b>Price:</b> $" + parseInt(entry[1]).toFixed(2) + "<br /><a href='/order.php?id=" + entry[3] +"'><button>Order</button></a></td></tr>");
		  }
		  else if (i%3 ==0){
			  $('#myTable > tbody > tr:last').append("<td><img src='/img/small_resize/" + entry[2] + ".jpg'><br /><b>Name:</b> " + entry[0] + "<br /><b>Price:</b> $" + parseInt(entry[1]).toFixed(2) + "<br /><a href='/order.php?id=" + entry[3] +"'><button>Order</button></a></td>");
		  }
	  }

  });
});
</script>
<table id="myTable" border="1">
  <tbody>
  </tbody>
</table>

</body>
</html>
