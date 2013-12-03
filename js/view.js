$(document).ready(function(){
    var windowHeight = $(window).height();
    var documentHeight = $(document).height();
    //var maxHeight = Math.max(windowHeight, documentHeight);
    //alert('window height: ' + windowHeight);
    //alert('doc Height: ' + documentHeight);
    //alert('max: ' + maxHeight);
    $('#pageview').width($(window).width());
    $('#pageview').css('min-height', windowHeight + 'px');
    //$('#pageview').height(maxHeight);
});
