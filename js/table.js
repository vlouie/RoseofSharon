function tablize ( element, callback ){
    var table = element[0]
    var CSV_URL = "../tables/" + table.getAttribute("data-csv") + ".csv";
    var selector1 = '#'+table.id+' > tbody';
    var selector2 = '#'+table.id+' > tbody > tr:last';
	$.get(CSV_URL, function(data){
	  var rowArray = data.split("\n");
	  var entry;
	  for (var i = 1; i < rowArray.length-1; i++){
		entry = rowArray[i].split(",");
		if (i % 3 == 1){
		  	$(selector1).append("<tr><td><img src='/img/" + table.id + "/small_resize/" + entry[2] + ".jpg' data-id='"+ entry[2] +"'><br /><b>Name:</b> " + entry[0] + "<br /><b>Price:</b> $" + parseInt(entry[1]).toFixed(2) + "<br /><a href='/order.php?type=" + table.id + "&id=" + entry[3] +"'><button class='button'>Order</button></a></td>");
		  }
		  else if (i%3 == 2){
	  		$(selector2).append("<td><img src='/img/"+ table.id + "/small_resize/" + entry[2] + ".jpg' data-id='"+ entry[2]+"'><br /><b>Name:</b> " + entry[0] + "<br /><b>Price:</b> $" + parseInt(entry[1]).toFixed(2) + "<br /><a href='/order.php?type=" + table.id + "&id=" + entry[3] +"'><button class='button'>Order</button></a></td></tr>");
		  }
		  else if (i%3 ==0){
			  $(selector2).append("<td><img src='/img/" + table.id + "/small_resize/" + entry[2] + ".jpg' data-id='"+ entry[2]+ "'><br /><b>Name:</b> " + entry[0] + "<br /><b>Price:</b> $" + parseInt(entry[1]).toFixed(2) + "<br /><a href='/order.php?type=" + table.id + "&id=" + entry[3] +"'><button class='button'>Order</button></a></td>");
		  }
	  }

    callback(table.id);
  })
}

function lightbox(id){
    var pageHeight = $(window).height();
    alert(pageHeight);
    $('#modal').css({
        "max-height": pageHeight * 0.6
    });
    $('#modal > img').css({
        "height": pageHeight * 0.6
    });
    $('#' + id  + ' > tbody > tr > td > img').on('click', function(){
        $('#modal').html('<img src="/img/' + id + '/large_resize/' + this.getAttribute('data-id') + '.jpg" />');
        $('#lightbox').show();
        $('body').css('overflow', 'hidden');
    });
}

$('#lightbox').click(function(){
    $('#lightbox').hide();
    $('body').css('overflow', 'scroll');
});
