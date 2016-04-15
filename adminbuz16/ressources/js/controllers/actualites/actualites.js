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
app.controller('actualitesAddController', ['$scope','actualitesService','$location','categoriesService','modulesService', function($scope,actualitesService,$location,categoriesService,modulesService) {
    $scope.newActualite=null;
    $scope.errorAjoutActu=null;
    $scope.categoriesError=null;
    $scope.opendebut = function($event) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope.openeddebut = true;
    };
    $scope.editorOptions = {
        language: 'fr',
        allowedContent: true,
        entities: false
    };
    $scope.controleChamp={
            titre:false,
            idCategorie:false,
            resume:false,
            contenu:false,
            dateEvenement:false
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
        var getDiapos = modulesService.getAllByType('caroussel');
        getDiapos.then(function (response) {
            if (response.data.success) {
                $scope.listeModulesDiapo = response.data.donnees;
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des diaporamas existants";
        });
    };
	$scope.init();
}]);





app.controller('actualitesUpdateController', ['$scope','actualitesService','categoriesService','$location','$route','modulesService', function($scope,actualitesService,categoriesService,$location,$route,modulesService) {
    $scope.newActualite=null;
    $scope.errorAjoutActu=null;
    $scope.categoriesError=null;
    $scope.opendebut = function($event) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope.openeddebut = true;
    };
    $scope.controleChamp={
        titre:false,
        idCategorie:false,
        resume:false,
        dateEvenement:false,
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
            var getDiapos = modulesService.getAllByType('caroussel');
            getDiapos.then(function (response) {
                if (response.data.success) {
                    $scope.listeModulesDiapo = response.data.donnees;
                }
                else{
                    $scope.pagesError = response.data.message;
                }
            }, function () {
                $scope.Error = true;
                $scope.Message="Une erreur est survenue lors de la récupération des diaporamas existants";
            });
                            
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
                            
                            var retDate = response.data.donnees.dateEvenement.split('/');
                            var retAnnee = retDate[2].split(' ');
                            var dEvenementF = new Date(retAnnee[0],retDate[1]-1,retDate[0],1,0,0);
                            $scope.newActualite.dateEvenement=dEvenementF;
                            
                            if(response.data.donnees.idCategorie){
                                for(var c in $scope.listeCategories){
                                    if($scope.listeCategories[c].id==$scope.newActualite.idCategorie){
                                        $scope.newActualite.idCategorie=$scope.listeCategories[c];
                                    }
                                }
                            }
                            if(response.data.donnees.idCarroussel){
                                for(var c in $scope.listeModulesDiapo){
                                    if($scope.listeModulesDiapo[c].id==$scope.newActualite.idCarroussel){
                                        $scope.newActualite.idCarroussel=$scope.listeModulesDiapo[c];
                                    }
                                }
                            }
                            $scope.editorOptions = {
                                    language: 'fr',
                                    allowedContent: true
                            };
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