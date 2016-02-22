var app = angular.module('buzancais');
app.controller('pagesController', ['$rootScope','$scope','$location','pagesService','categoriesService','themesService', function($rootScope,$scope,$location,pagesService,categoriesService,themesService) {
    $scope.pages = null;
    $scope.pagesError = null;
    $scope.themesError = null;
    $scope.pagesErrorAddPage = null;
    $scope.collapseAddPage = true;
    $scope.controleChamp={
        Nom:false,
		titre:false,
		type:false,
		lienmenu:false,
		idTheme:false
    };	
    
    $scope.delPage=function(p){
        var delPage = pagesService.delPage(p);
        delPage.then(function (response) {
            if (response.data.success) {
                var index=0;
                for(var e in $scope.listePages){
                    if($scope.listePages[e].id==p.id){
                        $scope.listePages.splice(index,1);
                    }
                    index++;
                }
                $scope.pagesError = null;
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.pagesError="Une erreur est survenue lors de la suppression";
        });
    }
    $scope.init = function(){
        var getThemes = themesService.getThemes();
        getThemes.then(function (response) {
            if (response.data.success) {
                $scope.listeThemes = response.data.donnees;
            }
            else{
                $scope.themesError = response.data.message;
            }
        }, function () {
            $scope.themesError="Une erreur est survenue lors de la récupération des catégories";
        });
        
        var getPages = pagesService.getPages();
        getPages.then(function (response) {
            if (response.data.success) {
                $scope.listePages = response.data.donnees;
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des pages";
        });
		
    };
    $scope.annuleModification=function(){
        $scope.newPage={
            titre:null,
            Nom:null,
            type:null,
            url:null,
            idTheme:null,
            description:null,
            lienmenu:null,
            motsclefs:null,
            id:null,
            toChange:false
        };
    }
    $scope.updatePage=function(P){
        
        var theme=null;
        if(P.idTheme!==null){
            for(var e in $scope.listeThemes){
                if($scope.listeThemes[e]['id']==P.idTheme) theme=$scope.listeThemes[e];
            }
        }
        $scope.newPage={
            id:P.id,
            titre:P.titre,
            Nom:P.Nom,
            type:P.type,
            idTheme:theme,
            lienmenu:P.lienmenu,
            url:P.url,
            description:P.description,
            motsclefs:P.motsclefs,
            toChange:true
        };
        $scope.collapseAddPage = false;
    }
    $scope.addPage = function(page){
        if(typeof page == "undefined"){
            for(var e in $scope.controleChamp){
                $scope.controleChamp[e]=true;
            }	
            return false;
        }

        if(!page.titre) $scope.controleChamp.titre=true;
        else $scope.controleChamp.titre=false;
        
        if(!page.lienmenu) $scope.controleChamp.lienmenu=true;
        else $scope.controleChamp.lienmenu=false;

        if(!page.Nom) $scope.controleChamp.Nom=true; 
        else $scope.controleChamp.Nom=false;

        if(!page.idTheme) $scope.controleChamp.idTheme=true; 
        else $scope.controleChamp.idTheme=false;

        if(!page.type) $scope.controleChamp.type=true;
        else $scope.controleChamp.type=false;


        for(var e in $scope.controleChamp){
            if($scope.controleChamp[e]) return false;
        }
		
        var addPage = pagesService.addPage(page);
        addPage.then(function (response) {
            if (response.data.success) {
                $scope.annuleModification();
                $scope.init();
            }
            else{
                $scope.pagesErrorAddPage="Une erreur est survenue lors de la création de la page";
            }
        }, function () {
            $scope.pagesErrorAddPage="Une erreur est survenue lors de la création de la page";
        });
    }
	$scope.setURL=function(entry){
		$scope.newPage.url=entry.replace(/[^a-z0-9]/gi,'-').toLowerCase();
	}
    $scope.init();
}]);
app.factory('pagesService', ['$http', function($http) {
    return {
        getPages: function() {
            return $http.get('./vendor/index.php/pagesController/getAll');
        },
        addPage: function(p) {
            return $http.post('./vendor/index.php/pagesController/addPage',{page:p});
        },
        delPage: function(p) {
            return $http.post('./vendor/index.php/pagesController/delPage',{page:p});
        }
    };
}]);