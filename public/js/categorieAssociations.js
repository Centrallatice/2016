$(document).ready(function() {
    $('.sameheight').matchHeight();
    $(".blocAsso").each(function() {
        $(this).find(".triangle").css('left',parseInt(parseInt($(this).width()/2))+"px");
        $(this).find(".textpan").css("width",$(this).get(0).getBoundingClientRect().width+"px");
        
    });
    $(".blocAsso").mouseover(function() {
        $("<div class='cache' style='width:"+$(this).get(0).getBoundingClientRect().width+"px;height:"+$(this).get(0).getBoundingClientRect().height+"px;'></div>").appendTo(this);
        $(this).find(".textpan").show();
    });
    $(".blocAsso").mouseout(function() {
        $(this).find(".textpan").hide();
        $(this).find(".cache").remove();
    });
});
$(window).on('resize',function(){
    $(".blocAsso").each(function() {
        $(this).find(".triangle").css('left',$(this).width()/2+"px");
    });
});