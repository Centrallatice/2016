$(document).ready(function() {
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
});
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}