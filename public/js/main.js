$(document).ready(function() {
    $('.sameheight').matchHeight();
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '1265323180149649',
        xfbml      : true,
        version    : 'v2.5'
      });
    };
    $(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation();
    });
    $("#owl-flashinfo").owlCarousel({
        items:1,
        navigation:false,
        singleItem:true,
        autoPlay:true,
        pagination:false,
        slideSpeed:200,
        paginationSpeed:200
    });
    $('.btn-newsletter').on('click',function(){
        $('#modalNewsletter').modal('show');
        $('#modalNewsletter').on('hidden.bs.modal', function (e) {
           $('#helpBlockMailNL').hide();
           $('#group-nl').removeClass('has-error');
           $('#helpBlockMailNL').removeClass('alert-danger').removeClass('alert-success');
           $('#helpBlockMailNL').html("");
           $('#mailvaluenewsletter').val("");
        });
    });
    $('#valideInscriptionNL').on('click',function(){
        if(!validateEmail($('#mailvaluenewsletter').val())){
            $('#helpBlockMailNL').addClass('alert-danger');
            $('#helpBlockMailNL').show();
            $('#group-nl').addClass('has-error');
            $('#helpBlockMailNL').html("Merci de saisir une adresse mail valide");
            return false;
        }
        else{
            $('#helpBlockMailNL').hide();
            $('#group-nl').removeClass('has-error');
            $('#helpBlockMailNL').removeClass('alert-danger');
            $('#helpBlockMailNL').html("");
            var donnees=JSON.stringify({mail:$('#mailvaluenewsletter').val()});
            $.ajax({
                method: "POST",
                url: basePATH+"ajax/inscriptionNL",
                data: donnees,
                dataType: "JSON"
              }).done(function(msg) {
                if(!msg.success){
                    $('#helpBlockMailNL').show();
                    $('#helpBlockMailNL').addClass('alert-danger');
                    $('#group-nl').addClass('has-error');
                    $('#helpBlockMailNL').html(msg.message);
                }
                else{
                    $('#helpBlockMailNL').show();
                     $('#helpBlockMailNL').removeClass('alert-danger').addClass('alert-success');
                    $('#group-nl').removeClass('has-error').addClass('has-success').css('color','green');
                    $('#helpBlockMailNL').html("Merci votre adressse a bien été enregistrée");
                    $('#mailvaluenewsletter').val("");
                }
            });
        }
    });
	$('#bottomNL').on('click',function(){
        if(!validateEmail($('#bottomNLinput').val())){
            alert("Merci de saisir une adresse mail valide");
            return false;
        }
        else{
            var donnees=JSON.stringify({mail:$('#bottomNLinput').val()});
            $.ajax({
                method: "POST",
                url: basePATH+"ajax/inscriptionNL",
                data: donnees,
                dataType: "JSON"
              }).done(function(msg) {
                if(!msg.success){
                    alert(msg.message);
                }
                else{
                    alert("Merci votre adressse a bien été enregistrée");
                    $('#bottomNLinput').val("");
                }
            });
        }
    });
    if($('#print').length > 0){				
        $('#print').bind('click', function(){window.print(); return false;}).attr('href', 'javascript:void(0);');
    }
    

    if($('#btnTypoMore').length){
        $('#btnTypoMore').bind('click', function(){
            var fontSizeTitle = parseInt($('.container-article h3').css("font-size"));
            fontSizeTitle = fontSizeTitle + 1 + "px";
            $('.container-article h3').css({'font-size':fontSizeTitle});
            
            var fontSizeTitle = parseInt($('.container-article h4').css("font-size"));
            fontSizeTitle = fontSizeTitle + 1 + "px";
            $('.container-article h4').css({'font-size':fontSizeTitle});
            
            var fontSizeTitle = parseInt($('.container-article h2').css("font-size"));
            fontSizeTitle = fontSizeTitle + 1 + "px";
            $('.container-article h2').css({'font-size':fontSizeTitle});
            
            var fontSizeTitle = parseInt($('.container-article h1').css("font-size"));
            fontSizeTitle = fontSizeTitle + 1 + "px";
            $('.container-article h1').css({'font-size':fontSizeTitle});
            
            
            var fontSizeArticle = parseInt($('.contenu-article').css("font-size"));
            fontSizeArticle = fontSizeArticle + 1 + "px";
            $('.contenu-article,.contenu-article p, .contenu-article p span').css({'font-size':fontSizeArticle});
        }).attr('href', 'javascript:void(0);');
    }

    if($('#btnTypoLess').length){
        $('#btnTypoLess').bind('click', function(){
            var fontSizeTitle = parseInt($('.container-article h4').css("font-size"));
            fontSizeTitle = fontSizeTitle - 1 + "px";
            $('.container-article h4').css({'font-size':fontSizeTitle});
            
            var fontSizeTitle = parseInt($('.container-article h3').css("font-size"));
            fontSizeTitle = fontSizeTitle - 1 + "px";
            $('.container-article h3').css({'font-size':fontSizeTitle});
            
            var fontSizeTitle = parseInt($('.container-article h2').css("font-size"));
            fontSizeTitle = fontSizeTitle - 1 + "px";
            $('.container-article h2').css({'font-size':fontSizeTitle});
            
            var fontSizeTitle = parseInt($('.container-article h1').css("font-size"));
            fontSizeTitle = fontSizeTitle - 1 + "px";
            $('.container-article h1').css({'font-size':fontSizeTitle});
            
            
            var fontSizeArticle = parseInt($('.contenu-article').css("font-size"));
            fontSizeArticle = fontSizeArticle - 1 + "px";
            $('.contenu-article,.contenu-article p, .contenu-article p span').css({'font-size':fontSizeArticle});
        }).attr('href', 'javascript:void(0);');
    }
    if($('.owl-horizontal').length>0){
        var timer = $('.owl-horizontal').hasClass('owl-docs') ? 8000 : 3000;
        
        $(".owl-horizontal").owlCarousel({
            autoPlay: timer, //Set AutoPlay to 3 seconds
            items : 3,
            autoWidth:true,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            transitionStyle : "fade"
        });
    }
    if($('.owl-one').length>0){
        $(".owl-one").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 1,
            itemsDesktop : 1,
            singleItem:true,
            navigation:false,
            pagination:false,
            itemsDesktopSmall : 1,
            transitionStyle : "fade"
        });
    }
    $('.fancycontent').on('click',function(){
        $('#modalCaroussel .media-object').attr('src',$(this).find('img').attr("src"));
        $('#modalCaroussel .media-body').html($('#data-content-carou-'+$(this).attr("id")).html());
        $('#modalCaroussel').modal('show');
        $('.pixel-when-modal').height($('body').height());
        $('body').on('click',function(){
            $('#modalCaroussel').modal('hide');
        });
        $('#modalCaroussel').on('show.bs.modal', function (e) {
            
        });
        return false;
    });
    if($('.variousfancy').length>0){
        $(".variousfancy").fancybox({
            maxWidth	: 800,
            maxHeight	: 600,
            fitToView	: false,
            width		: '70%',
            height		: '70%',
            autoSize	: false,
            closeClick	: false,
            openEffect	: 'none',
            closeEffect	: 'none'
	});
    }
    if($('.fancyboxme').length>0){
        $(".fancyboxme").fancybox({
            maxWidth	: 800,
            maxHeight	: 600,
            fitToView	: false,
            width		: '70%',
            height		: '70%',
            autoSize	: false,
            closeClick	: false,
            openEffect	: 'none',
            closeEffect	: 'none'
	});
    }
});
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}