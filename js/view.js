$(document).ready(function(){
    var windowHeight = $(window).height();
    var documentHeight = $(document).height();
    var maxHeight = Math.max(windowHeight, documentHeight);
    $('#pageview').width($(window).width());
    $('#pageview').height(maxHeight);
});
