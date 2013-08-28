$(document).ready(function(){
    var hash = {};
    var url = this.location.href;
    var split1 = url.split('?');
    var split2 = split1[1].split('&');
    for (var i in split2){
      var split3 = split2[i].split('=');
      hash[split3[0]] = split3[1];
    }
	var csv = hash['id'].match(/[a-z]+/g);
	$.get("../tables/" + csv + ".csv", function(data){
		var rowArray = data.split("\n");
		var entry;
		for (var i = 1; i < rowArray.length-1; i++){
			if (rowArray[i].indexOf(hash['id']) !== -1){
				entry = rowArray[i].split(",");
				$('#orderbox').val(entry[0]);
			}
		}
	});
});
