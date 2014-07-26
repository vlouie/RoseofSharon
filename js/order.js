$(document).ready(function(){
    var hash = {};
    var url = this.location.href;
    var split1 = url.split('?');
    var split2 = split1[1].split('&');
    for (var i in split2){
      var split3 = split2[i].split('=');
      hash[split3[0]] = split3[1];
    }
	var id = hash['id'].match(/[0-9]+/g);
	var csv = hash['type'].match(/[a-z_]+/g);
    $.get("../tables/" + csv + ".csv", function(data){
        var rowArray = data.split("\n");
        var entry;
        for (var i = 1; i < rowArray.length-1; i++){
            if (rowArray[i].indexOf(hash['id']) !== -1){
                entry = rowArray[i].split(",");
                if (parseInt(entry[3]) == parseInt(id[0])){
                  $('#orderbox').val(entry[0]);
                    jQuery('<b />', {
                        text: 'Your Order'
                    }).appendTo('#orderImage');
                    jQuery('<br />').appendTo('#orderImage');
                    jQuery('<img />', {
                        id: 'orderImg',
                        src: '/img/' + csv + '/small_resize/' + entry[2] + '.jpg'
                    }).appendTo('#orderImage');
                    jQuery('<p />', {
                        id: 'orderCost',
                        text: '$' + parseInt(entry[1]).toFixed(2)
                    }).appendTo('#orderImage');
                }
            }
        }
    });
});
