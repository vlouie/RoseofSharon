$(document).ready(function(){
    if ((/iPhone|iPod|iPad|Android|BlackBerry/).test(navigator.userAgent)){
    $('#pageview').width('100%');
    }
    else{
    var windowHeight = $(window).height();
    var documentHeight = $(document).height();
    //var maxHeight = Math.max(windowHeight, documentHeight);
    //alert('window height: ' + windowHeight);
    //alert('doc Height: ' + documentHeight);
    //alert('max: ' + maxHeight);
    $('#pageview').width($(window).width());
    $('#pageview').css('min-height', windowHeight + 'px');
    //$('#pageview').height(maxHeight);
    }
});
