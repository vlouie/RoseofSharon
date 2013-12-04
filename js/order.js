$(document).ready(function(){
    var hash = {};
    var url = this.location.href;
    var split1 = url.split('?');
    var split2 = split1[1].split('&');
    console.log('split2: ', split2);
    for (var i in split2){
      var split3 = split2[i].split('=');
      console.log('split3: ', split3);
      hash[split3[0]] = split3[1];
    }
    console.log("hash: ", hash);
	var id = hash['id'].match(/[0-9]+/g);
	var csv = hash['type'].match(/[a-z]+/g);
    console.log(id);
    console.log("../tables/" + csv + ".csv");
    $.get("../tables/" + csv + ".csv", function(data){
        var rowArray = data.split("\n");
        var entry;
        for (var i = 1; i < rowArray.length-1; i++){
            if (rowArray[i].indexOf(hash['id']) !== -1){
                entry = rowArray[i].split(",");
                if (parseInt(entry[3]) == parseInt(id[0])){
                  $('#orderbox').val(entry[0]);
                }
            }
        }
    });
});
