var app = angular.module('buzancais');
app.controller('actualitesListsController', ['$scope','actualitesService','$location', function($scope,actualitesService,$location) {
    $scope.mesActualites=null;
    $scope.errorActus=null;
    $scope.init = function(){
        var listesActus = actualitesService.getActualites();
        listesActus.then(function (response) {
            if (response.data.success) {
                $scope.mesActualites=response.data.donnees;
            }
            else $scope.errorActus=response.data.success;
        }, function () {
            $scope.errorActus="Une erreur est survenue lors de la création de l'actualité"
        });
    };
    $scope.updateActualite=function(actu){
        $location.path("/actualites/update/"+actu.id);
    };
    $scope.delActualite = function(a){
        if(!confirm("Êtes-vous sûr de vouloir supprimer défintivement cette actualité ?")) return false;
        var delActualite = actualitesService.delActualite(a);
        delActualite.then(function (response) {
            if (response.data.success) {
                $scope.init();
            }
            else $scope.errorActus=response.data.success;
        }, function () {
            $scope.errorActus="Une erreur est survenue lors de la suppression de l'actualité"
        });
    };
    
    $scope.init();
}]);
app.controller('actualitesAddController', ['$scope','actualitesService','$location','categoriesService', function($scope,actualitesService,$location,categoriesService) {
    $scope.newActualite=null;
    $scope.errorAjoutActu=null;
    $scope.categoriesError=null;
    $scope.editorOptions = {
        language: 'fr',
        allowedContent: true,
        entities: false
    };
    $scope.controleChamp={
            titre:false,
            idCategorie:false,
            resume:false,
            contenu:false
    };
    $scope.annuleCreation = function(){
            $scope.newActualite=null;
            $location.path('/actualites/lists');
    };
    $scope.addActualite = function(act){
        if(!act){
            for(var e in $scope.controleChamp){
                $scope.controleChamp[e]=true;
            }
            return false;
        }
        else{
            var error=false;
            for(var e in $scope.controleChamp){
                if(!act[e]){
                        $scope.controleChamp[e]=true;  
                        error=true;
                    }
                    else $scope.controleChamp[e]=false;
            }
            if(error) return false;
        }
        var addActu = actualitesService.addActualite(act);
        addActu.then(function (response) {
            if (response.data.success) {
                $scope.errorAjoutActu=null;
                $scope.annuleCreation();
            }
            else $scope.errorAjoutActu=response.data.message;
        }, function () {
            $scope.errorAjoutActu="Une erreur est survenue lors de la création de l'actualité"
        });
    };
	
    $scope.init = function(){
        var getCategories = categoriesService.getCategories();
        getCategories.then(function (response) {
            if (response.data.categories.success) {
                $scope.categoriesError=null;
                $scope.listeCategories = response.data.categories.donnees;
            }
            else{
                $scope.categoriesError = response.data.categories.message;
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de la récupération des catégories";
        });
    };
	$scope.init();
}]);





app.controller('actualitesUpdateController', ['$scope','actualitesService','categoriesService','$location','$route', function($scope,actualitesService,categoriesService,$location,$route) {
    $scope.newActualite=null;
    $scope.errorAjoutActu=null;
    $scope.categoriesError=null;
    $scope.editorOptions = {
        language: 'fr',
        allowedContent: true,
        entities: false
    };
    $scope.controleChamp={
        titre:false,
        idCategorie:false,
        resume:false,
        contenu:false
    };
    
    $scope.annuleCreation = function(){
        $scope.newActualite=null;
        $location.path('/actualites/lists');
    };
    $scope.init = function(){
        if(!$route.current.params.idActu || $route.current.params.idActu===null || $route.current.params.idActu===""){
            alert("L'actualité n'a pas été trouvé");
            $location.path("/actualites/lists");
        }
        else{
            var getCategories = categoriesService.getCategories();
            getCategories.then(function (response) {
                if (response.data.categories.success) {
                    $scope.categoriesError=null;
                    $scope.listeCategories = response.data.categories.donnees;
                    var monActu = actualitesService.getActuByID($route.current.params.idActu);
                    monActu.then(function (response) {
                        if (response.data.success) {
                            $scope.errorAjoutActu=null;
                            $scope.newActualite = response.data.donnees;
                            $scope.baseImage = response.data.pathImage;
                            $scope.newActualite.updateImage=false;

                            if(response.data.donnees.idCategorie){
                                for(var c in $scope.listeCategories){
                                    if($scope.listeCategories[c].id==$scope.newActualite.idCategorie){
                                        $scope.newActualite.idCategorie=$scope.listeCategories[c];
                                    }
                                }
                            }
                        }
                        else{
                            $scope.errorAjoutActu = response.data.message;
                        }
                    }, function () {
                        $scope.errorAjoutActu="Une erreur est survenue lors de la récupération de l'actualité";
                    });
                }
                else{
                    $scope.categoriesError = response.data.categories.message;
                }
            }, function () {
                $scope.categoriesError="Une erreur est survenue lors de la récupération des catégories";
            });
            
            
        }
    };
    $scope.updateActualite=function(a){
        var updateActualite = actualitesService.updateActualite(a);
        updateActualite.then(function (response) {
            if (response.data.success) {
                $scope.errorAjoutActu=null;
                alert("L'actualité a bien été modifiée");
                $scope.init();
            }
            else{
                $scope.errorAjoutActu = response.data.message;
            }
        }, function () {
            $scope.errorAjoutActu="Une erreur est survenue lors de la modification de l'actualité";
        });
    }
    $scope.changeImage=function(){
        if(!(confirm("Êtes-vous sûr de vouloir supprimer cette image?"))) return false;
        $scope.newActualite.updateImage=true;
        $scope.newActualite.image=null;
        document.getElementById('image').value="";
    }
    $scope.changeImageSilence=function(){
        $scope.newActualite.updateImage=true;
    }
    $scope.init();
}]);
app.factory('actualitesService', ['$http', function($http) {
    return {
        getActualites: function() {
            return $http.get('./vendor/index.php/actualitesController/getActualites');
        },
	addActualite: function(a) {
            return $http.post('./vendor/index.php/actualitesController/addActualite',{actualite:a});
        },
	delActualite: function(a) {
            return $http.post('./vendor/index.php/actualitesController/delActualite',{actualite:a});
        },
	updateActualite: function(a) {
            return $http.post('./vendor/index.php/actualitesController/updateActualite',{actualite:a});
        },
	getActuByID: function(a) {
            return $http.post('./vendor/index.php/actualitesController/getActuByID',{actualite:a});
        }
    };
}]);