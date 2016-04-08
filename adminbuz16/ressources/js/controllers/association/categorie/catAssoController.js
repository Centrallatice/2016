var app = angular.module('buzancais');
app.controller('catAssoAddController', ['$scope','catAssoService','notifications','$location','$timeout',
    function($scope,catAssoService,notifications,$location,$timeout) {
    $scope.init=function(){
        $scope.newCatAsso={
            nom:null,
            image:null
        };
    };
    $scope.addCategorie=function(){
        var addS = catAssoService.addCatAsso($scope.newCatAsso);
        addS.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"La catégorie a bien été ajouté",
                    hideDelay: 3000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.newCatAsso={
                    nom:null,
                    image:null
                };
                $timeout(function(){
                    $location.path("/association/categories/lists");
                },2000);
            }     
            else{
                notifications.showError({
                    message:response.data.message,hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la création la catégorie",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);
app.controller('catAssoListsCatAssoController', ['$scope','catAssoService','notifications', 
    function($scope,catAssoService,notifications) {
    $scope.listeCatAsso=null;
    $scope.ready=false;
    $scope.init=function(){
        var getS = catAssoService.getCatAssos();
        getS.then(function (response) {
            if (response.data.success) {
                $scope.ready = true;
                $scope.listeCatAsso = response.data.donnees;
                $scope.imagePath = response.data.path;
            }     
            else{
                notifications.showError({
                    message:"Une erreur est survenue lors de la récupération des catégories",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la récupération des catégories",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.deleteCatAsso=function(id){
        if(!confirm("Êtes-vous sûr de vouloir supprimer cette catégorie ?")) return false;
        var delS = catAssoService.deleteCatAsso(id);
        delS.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"La catégorie a bien été supprimé",
                    hideDelay: 3000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.init();
            }     
            else{
                notifications.showError({
                    message:"Une erreur est survenue lors de la suppression la catégorie",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la récupération la catégorie",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);
app.controller('catAssoUpdateCatAssoController', ['$scope','catAssoService','notifications','$route','$location', 
    function($scope,catAssoService,notifications,$route,$location) {
    
    $scope.ready=false;
    $scope.init=function(){
        if(!$route.current.params.idCategorie || $route.current.params.idCategorie===null || $route.current.params.idCategorie===""){
            notifications.showError({message:"La catégorie n'a pas été trouvé"});
            $location.path("/association/categories/lists");
        }
        else{
            var getSbID = catAssoService.getCatAsso($route.current.params.idCategorie);
            getSbID.then(function (response) {
                if (response.data.success) {
                    $scope.ready = true;
                    $scope.newCatAsso = response.data.donnees;
                    $scope.imagePath = response.data.path;
                    $scope.newCatAsso.updateIcone=false;
                }     
                else{
                    notifications.showError({
                        message:"Une erreur est survenue lors de la récupération la catégorie",
                        hideDelay: 5000,
                        hide: true,
                        acceptHTML:true
                    });
                }
            }, function () {
                notifications.showError({
                    message:"Une erreur est survenue lors de la récupération la catégorie",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            });
        }
        $scope.changeIcone=function(){
            if($scope.newCatAsso.image!==null && $scope.newCatAsso.image!==""){
                if(confirm("Êtes-vous sûr de vouloir supprimer cette image ?")){
                    $scope.newCatAsso.image=null;
                    $scope.newCatAsso.updateIcone=true;
                    
                }
                else return false;
            }
            else $scope.newCatAsso.updateIcone=true;
        }
    };
    
    $scope.updateCatAsso=function(){
        var updateS = catAssoService.updateCatAsso($scope.newCatAsso);
        updateS.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"La catégorie a bien été modifiée",
                    hideDelay: 3000,
                    hide: true,
                    acceptHTML:true
                });
            }     
            else{
                notifications.showError({
                    message:response.data.message,hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la modification la catégorie",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);

app.factory('catAssoService', ['$http', function($http) {
    return {
        getCatAssos: function() {
            return $http.get('./vendor/index.php/catAssoController/getAll');
        },
        getCatAsso: function(id) {
            return $http.post('./vendor/index.php/catAssoController/getCatAsso',{id:id});
        },
        addCatAsso: function(s) {
            return $http.post('./vendor/index.php/catAssoController/addCatAsso',{categorie:s});
        },
        updateCatAsso: function(s) {
            return $http.post('./vendor/index.php/catAssoController/updateCatAsso',{categorie:s});
        },
        deleteCatAsso: function(s) {
            return $http.post('./vendor/index.php/catAssoController/deleteCatAsso',{categorie:s});
        }
    };
}]);