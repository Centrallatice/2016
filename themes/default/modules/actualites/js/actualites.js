$(document).ready(function() {
    $("#owl-actualite").owlCarousel({
        items:1,
        navigation:true,
        singleItem:true,
        autoPlay:false,
        pagination:true,
        slideSpeed:1000,
        navigationText:["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
        paginationSpeed:1000
    });
    
    $("#owl-actualites").owlCarousel({
        items:1,
        navigation:true,
        singleItem:true,
        autoPlay:false,
        pagination:true,
        slideSpeed:2000,
        navigationText:["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
        paginationSpeed:1000
    });
});