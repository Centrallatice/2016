var app = angular.module('buzancais');
app.controller('agendaListsController', ['$scope','agendaService','$location', function($scope,agendaService,$location) {
    $scope.mesEvenements=null;
    $scope.collapseAddPDF=false;
    $scope.errorEvenements=null;
    $scope.errorPDF=null;
    $scope.pdfExists=false;
//	$scope.addPDF=function(pdf){
//		var addPDF = agendaService.addPDF(pdf);
//        addPDF.then(function (response) {
//            if (response.data.success) {
//                alert("le document a bien été envoyé");
//				$scope.init();
//            }
//            else $scope.errorPDF="Une erreur est survenue lors de la mise a jour du document";
//        }, function () {
//            $scope.errorPDF="Une erreur est survenue lors de la mise a jour du document"
//        });
//	}
    $scope.init = function(){
        var listesActus = agendaService.getEvenements();
        listesActus.then(function (response) {
            if (response.data.success) {
                $scope.mesEvenements=response.data.donnees;
				$scope.pdfExists=response.data.pdfEncours;
            }
            else $scope.errorEvenements=response.data.message;
        }, function () {
            $scope.errorEvenements="Une erreur est survenue lors de la création de l'événement"
        });
    };
    $scope.updateEvenements=function(idEvenement){
        $location.path("/agenda/update/"+idEvenement.id);
    };
    $scope.delEvenement = function(a){
        if(!confirm("Êtes-vous sûr de vouloir supprimer défintivement cette événement ?")) return false;
        var delEvenement = agendaService.delEvenement(a);
        delEvenement.then(function (response) {
            if (response.data.success) {
                $scope.init();
            }
            else $scope.errorEvenements=response.data.success;
        }, function () {
            $scope.errorEvenements="Une erreur est survenue lors de la suppression de l'événement"
        });
    };
    
    $scope.init();
}]);
app.controller('agendaAddController', ['$scope','agendaService','$location','categoriesService', function($scope,agendaService,$location,categoriesService) {
    $scope.opendebut = function($event) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope.openeddebut = true;
    };
    $scope.openfin= function($event) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope.openedfin= true;
    };
    $scope.newEvenement=null;
    $scope.errorAjoutEvenement=null;
    $scope.categoriesError=null;
    $scope.editorOptions = {
        language: 'fr',
        allowedContent: true,
        entities: false
    };
    $scope.controleChamp={
        titre:false,
        dateEvenement:false,
        dateEvenementFin:false,
        idCategorie:false,
        resume:false,
        contenu:false
    };
    $scope.annuleCreation = function(){
        $scope.newEvenement=null;
        $location.path('/agenda/lists');
    };
    $scope.addEvenement = function(act){
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
        var addActu = agendaService.addEvenement(act);
        addActu.then(function (response) {
            if (response.data.success) {
                $scope.errorAjoutEvenement=null;
                $scope.annuleCreation();
            }
            else $scope.errorAjoutEvenement=response.data.success;
        }, function () {
            $scope.errorAjoutEvenement="Une erreur est survenue lors de la création de l'événement"
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





app.controller('agendaUpdateController', ['$scope','agendaService','categoriesService','$location','$route', function($scope,agendaService,categoriesService,$location,$route) {
    $scope.opendebut = function($event) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope.openeddebut = true;
    };
    $scope.openfin= function($event) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope.openedfin= true;
    };
    
    $scope.newEvenement=null;
    $scope.errorAjoutEvenement=null;
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
        $scope.newEvenement=null;
        $location.path('/agenda/lists');
    };
    $scope.init = function(){
        if(!$route.current.params.idEvenement || $route.current.params.idEvenement===null || $route.current.params.idEvenement===""){
            alert("L'événement n'a pas été trouvé");
            $location.path("/agenda/lists");
        }
        else{
            var getCategories = categoriesService.getCategories();
            getCategories.then(function (response) {
                if (response.data.categories.success) {
                    $scope.categoriesError=null;
                    $scope.listeCategories = response.data.categories.donnees;
                    
                    var monActu = agendaService.getEvenementByID($route.current.params.idEvenement);
                    monActu.then(function (response) {
                        if (response.data.success) {
                            $scope.errorAjoutEvenement=null;
                            $scope.newEvenement = response.data.donnees;
                            $scope.baseImage = response.data.pathImage;
                            $scope.newEvenement.updateImage=false;

                            var dEvenement = new Date(response.data.donnees.explodedDate[2],response.data.donnees.explodedDate[1]-1,response.data.donnees.explodedDate[0],1,0,0);
                            $scope.newEvenement.dateEvenement=dEvenement;
                            
                            var dEvenementF = new Date(response.data.donnees.explodedDateFin[2],response.data.donnees.explodedDateFin[1]-1,response.data.donnees.explodedDateFin[0],1,0,0);
                            $scope.newEvenement.dateEvenementFin=dEvenementF;
                            
                            
                            if(response.data.donnees.idCategorie){
                                for(var c in $scope.listeCategories){
                                    if($scope.listeCategories[c].id===$scope.newEvenement.idCategorie){
                                        $scope.newEvenement.idCategorie=$scope.listeCategories[c];
                                    }
                                }
                            }
                        }
                        else{
                            $scope.errorAjoutEvenement = response.data.message;
                        }
                    }, function () {
                        $scope.errorAjoutEvenement="Une erreur est survenue lors de la récupération de l'événement";
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
    $scope.updateEvenement=function(a){
        var updateEvenement = agendaService.updateEvenement(a);
        updateEvenement.then(function (response) {
            if (response.data.success) {
                $scope.errorAjoutEvenement=null;
                alert("L'événement a bien été modifiée");
            }
            else{
                $scope.errorAjoutEvenement = response.data.message;
            }
        }, function () {
            $scope.errorAjoutEvenement="Une erreur est survenue lors de la modification de l'événement";
        });
    }
    
    $scope.init();
}]);
app.factory('agendaService', ['$http', function($http) {
    return {
        getEvenements: function() {
            return $http.get('./vendor/index.php/agendaController/getEvenements');
        },
	addEvenement: function(e) {
            return $http.post('./vendor/index.php/agendaController/addEvenement',{evenement:e});
        },
	addPDF: function(e) {
            return $http.post('./vendor/index.php/agendaController/addPDF',{pdf:e});
        },
	delEvenement: function(e) {
            return $http.post('./vendor/index.php/agendaController/delEvenement',{evenement:e});
        },
	updateEvenement: function(e) {
            return $http.post('./vendor/index.php/agendaController/updateEvenement',{evenement:e});
        },
	getEvenementByID: function(e) {
            return $http.post('./vendor/index.php/agendaController/getEvenementByID',{evenement:e});
        }
    };
}]);