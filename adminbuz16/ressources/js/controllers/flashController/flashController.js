var app = angular.module('buzancais');
app.controller('flashController', ['$rootScope','$scope','$location','flashsService','categoriesService','themesService', function($rootScope,$scope,$location,flashsService,categoriesService,themesService) {
    $scope.flashs = null;
    $scope.flashsError = null;
    $scope.themesError = null;
    $scope.flashsErrorAdd = null;
    $scope.collapseAddFlashs = true;
    $scope.controleChamp={
        titre:false,
	resume:false,
	contenu:false
    };	
    
    $scope.init = function(){
        
        var getFlashs = flashsService.getFlashs();
        getFlashs.then(function (response) {
            if (response.data.success) {
                $scope.listeFlashs = response.data.donnees;
            }
            else{
                $scope.flashsError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des informations";
        });
		
    };
    $scope.annuleModification=function(){
        $scope.newFlash={
            toChange:false
        };
    }
    $scope.updateFlash=function(P){
        $scope.newFlash={
            id:P.id,
            titre:P.titre,
            resume:P.resume,
            contenu:P.contenu,
            toChange:true
        };
        $scope.collapseAddFlashs = false;
    }
    
    $scope.addFlash = function(flash){
        if(typeof flash == "undefined"){
            for(var e in $scope.controleChamp){
                $scope.controleChamp[e]=true;
            }	
            return false;
        }
        
        if(!flash.titre) $scope.controleChamp.titre=true;
        else $scope.controleChamp.titre=false;

        if(!flash.resume) $scope.controleChamp.resume=true; 
        else $scope.controleChamp.resume=false;

        if(!flash.contenu) $scope.controleChamp.contenu=true; 
        else $scope.controleChamp.contenu=false;

        for(var e in $scope.controleChamp){
            if($scope.controleChamp[e]) return false;
        }
		
        var addFlash = flashsService.addFlash(flash);
        addFlash.then(function (response) {
            if (response.data.success) {
                $scope.collapseAddFlashs = true;
                $scope.annuleModification();
                $scope.init();
            }
            else{
                $scope.flashsErrorAdd="Une erreur est survenue lors de la création de l'information";
            }
        }, function () {
            $scope.flashsErrorAdd="Une erreur est survenue lors de la création de l'information";
        });
    }
    $scope.deleteFlash = function(flash){
        if(!confirm("Êtes-vous sûr de vouloir supprimer définitivement cette information ?")) return false;
        var delFlash = flashsService.delFlash(flash);
        delFlash.then(function (response) {
            if (response.data.success) {
                $scope.annuleModification();
                $scope.init();
            }
            else{
                $scope.flashsErrorAdd="Une erreur est survenue lors de la suppression de l'information";
            }
        }, function () {
            $scope.flashsErrorAdd="Une erreur est survenue lors de la suppression de l'information";
        });
    }
    $scope.init();
}]);
app.controller('listenlController', ['$scope','flashsService', function($scope,flashsService) {
   
    $scope.init = function(){
        
        var getUsers = flashsService.getUsers();
        getUsers.then(function (response) {
            if (response.data.success) {
                $scope.listeUsers = response.data.donnees;
            }
            else{
                
            }
        }, function () {
        });
		
    };
    
    $scope.init();
}]);
app.factory('flashsService', ['$http', function($http) {
    return {
        getFlashs: function() {
            return $http.get('./vendor/index.php/flashsController/getAll');
        },
        addFlash: function(f) {
            return $http.post('./vendor/index.php/flashsController/addFlash',{flash:f});
        },
        getUsers: function(f) {
            return $http.get('./vendor/index.php/flashsController/getUsers');
        },
        delFlash: function(f) {
            return $http.post('./vendor/index.php/flashsController/deleteFlash',{flash:f});
        }
    };
}]);