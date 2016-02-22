var app = angular.module('buzancais');
app.controller('categoriesController', ['$scope','categoriesService', function($scope,categoriesService) {
    $scope.categories = null;
    $scope.categoriesError = null;
    $scope.categoriesErrorAddCat = null;
    $scope.collapseAddCat = true;
    $scope.duplicateCat=false;
    $scope.prepareIcone=false;
    $scope.errorTitre=false;
    $scope.errorColor=false;
    $scope.baseIcone=null;
    
    $scope.init = function(){
        var getCategories = categoriesService.getCategories();
        getCategories.then(function (response) {
            if (response.data.categories.success) {
                $scope.categoriesError=null;
                $scope.listeCategories = response.data.categories.donnees;
                $scope.baseIcone=response.data.baseIconePath;
            }
            else{
                $scope.categoriesError = response.data.categories.message;
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de la récupération des catégories";
        });
    };
    $scope.annuleModification=function(){
        $scope.newCategorie={
            titre:null,
            id:null,
            parent:null,
            color:null,
            icone:null,
            description:null,
            updateIcone:false
        };
        document.getElementById('iconecat').value="";
        $scope.duplicateCat=false;
        
    }
    $scope.changeIcone=function(){
        if(!(confirm("Êtes-vous sûr de vouloir supprimer cette icone ?"))) return false;
        $scope.newCategorie.updateIcone=true;
        $scope.newCategorie.icone=null;
        document.getElementById('iconecat').value="";
    }
    $scope.toggleEtat=function(C){
        var toggleEtat = categoriesService.toggleEtat(C);
        toggleEtat.then(function (response) {
            if (response.data.success) {
                $scope.categoriesError=null;
                C.Statut = (C.Statut==1) ? 0 : 1;
            }     
            else{
                $scope.categoriesError=response.data.message;
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de la modification du statut de la catégorie"
        });
    }
    $scope.updateCategorie=function(C){
        
        $scope.newCategorie = C;
        var cParent=null;

        if(C.idParent!==null){
            for(var e in $scope.listeCategories){
                if($scope.listeCategories[e]['id']==C.idParent) cParent=$scope.listeCategories[e];
            }
        }
        
        $scope.newCategorie={
            titre:C.Nom.substr(C.prefixe.length),
            id:C.id,
            parent:cParent,
            color:C.color,
            icone:C.icone,
            description:C.Description,
            toChange:true,
            updateIcone:false
        };
        $scope.collapseAddCat = false;
        
    }
    $scope.deleteCategorie=function(C){
	if(!(confirm("Êtes-vous sûr de vouloir supprimer cette catégorie et les catégories enfants ?"))) return false;
            var dCat = categoriesService.deleteCategorie(C);
            dCat.then(function (response) {
            if (response.data.success) {
                $scope.categoriesError=null;
		$scope.listeCategories=null;
                $scope.init();
            }     
            else{
                $scope.categoriesError=response.data.message;
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de la suppression de la catégorie"
        });
	}
    $scope.addCategorie = function(C){
        if(!C){
            $scope.errorTitre=true;
            $scope.errorColor=true;
            return false;
        }
        else{
            $scope.errorTitre=false;
            if(!C.color){
                $scope.errorColor=true;
                return false;
            }
            else $scope.errorColor=false;
        }
        
        if(C.toChange && C.parent){
            if(C.id==C.parent.id){
                $scope.duplicateCat=true;
                return false;
            }
            else $scope.duplicateCat=false;
        }
        
        var addCategorie = categoriesService.addCategorie(C);
        addCategorie.then(function (response) {
            if (response.data.success) {
                $scope.categoriesError=null;
                $scope.collapseAddCat = true;
                $scope.annuleModification();
                $scope.init();
            }
            else{
                $scope.categoriesError="Une erreur est survenue lors de l'ajout/modification de la catégorie"
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de l'ajout/modification de la catégorie"
        });
    }
    $scope.init();
}]);

app.factory('categoriesService', ['$http', function($http) {
    return {
        getCategories: function() {
            return $http.get('./vendor/index.php/categoriesController/getAllDisplay');
        },
        addCategorie: function(c) {
            return $http.post('./vendor/index.php/categoriesController/addCategorie',{cat:c});
        },
        toggleEtat: function(c) {
            return $http.post('./vendor/index.php/categoriesController/toggleEtat',{cat:c});
        },
        deleteCategorie: function(c) {
            return $http.post('./vendor/index.php/categoriesController/deleteCategorie',{cat:c});
        }
    };
}]);