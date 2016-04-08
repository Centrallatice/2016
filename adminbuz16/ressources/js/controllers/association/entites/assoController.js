var app = angular.module('buzancais');
app.controller('assoAddController', ['$scope','assoService','notifications','$location','$timeout','catAssoService',
    function($scope,assoService,notifications,$location,$timeout,catAssoService) {
   $scope.editorOptions = {
        language: 'fr',
        allowedContent: true,
        entities: false,
        height:'200px'
    };
    
    $scope.init=function(){
        $scope.newAsso={
            nom:null,
            image:null,
            idCategorie:null
        };
        var getS = catAssoService.getCatAssos();
        getS.then(function (response) {
            if (response.data.success) {
                $scope.ready = true;
                $scope.listeCatAsso = response.data.donnees;
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
    $scope.addAsso=function(){
        var addS = assoService.addAsso($scope.newAsso);
        addS.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"L'association a bien été ajouté",
                    hideDelay: 3000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.newAsso={
                    nom:null,
                    image:null
                };
                $timeout(function(){
                    $location.path("/association/entites/lists");
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
                message:"Une erreur est survenue lors de la création l'association",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);
app.controller('assoListsAssoController', ['$scope','assoService','notifications', 
    function($scope,assoService,notifications) {
    $scope.listeAsso=null;
    $scope.ready=false;
    $scope.init=function(){
        var getS = assoService.getAssos();
        getS.then(function (response) {
            if (response.data.success) {
                $scope.ready = true;
                $scope.listeAsso = response.data.donnees;
                $scope.imagePath = response.data.path;
            }     
            else{
                notifications.showError({
                    message:"Une erreur est survenue lors de la récupération des associations",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la récupération des associations",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.deleteAsso=function(id){
        if(!confirm("Êtes-vous sûr de vouloir supprimer cette association ?")) return false;
        var delS = assoService.deleteAsso(id);
        delS.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"L'association a bien été supprimée",
                    hideDelay: 3000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.init();
            }     
            else{
                notifications.showError({
                    message:"Une erreur est survenue lors de la suppression l'association",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la récupération l'association",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);
app.controller('assoUpdateAssoController', ['$scope','assoService','notifications','$route','$location', 'catAssoService','$q',
    function($scope,assoService,notifications,$route,$location,catAssoService,$q) {
    
    $scope.ready=false;
    $scope.init=function(){
        if(!$route.current.params.idAsso || $route.current.params.idAsso===null || $route.current.params.idAsso===""){
            notifications.showError({message:"L'association n'a pas été trouvée"});
            $location.path("/association/entites/lists");
        }
        else{
            $q.all([
                catAssoService.getCatAssos(),
                assoService.getAsso($route.current.params.idAsso)])
            .then(function (res) {
                if(res[0].data.success && res[1].data.success){
                    
                    $scope.newAsso = res[1].data.donnees;
                    $scope.imagePath = res[1].data.path;
                    $scope.newAsso.updateIcone=false;
                    $scope.listeCatAsso=res[0].data.donnees;
                    if($scope.newAsso.idCategorie){
                        for(var c in res[0].data.donnees){
                            if(res[0].data.donnees[c].id==$scope.newAsso.idCategorie){
                                $scope.newAsso.idCategorie=res[0].data.donnees[c];
                            }
                        }
                    }
                            
                    $scope.ready = true;
                }
                else{
                    notifications.showError({message:"Une erreur est survenue lors de la récupération des données"});
                    $scope.ready=true;
                }
            });
        }
        $scope.changeIcone=function(){
            if($scope.newAsso.image!==null && $scope.newAsso.image!==""){
                if(confirm("Êtes-vous sûr de vouloir supprimer cette image ?")){
                    $scope.newAsso.image=null;
                    $scope.newAsso.updateIcone=true;
                    
                }
                else return false;
            }
            else $scope.newAsso.updateIcone=true;
        }
    };
    
    $scope.updateAsso=function(){
        var updateS = assoService.updateAsso($scope.newAsso);
        updateS.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"L'association a bien été modifiée",
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
                message:"Une erreur est survenue lors de la modification l'association",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);

app.factory('assoService', ['$http', function($http) {
    return {
        getAssos: function() {
            return $http.get('./vendor/index.php/assoController/getAll');
        },
        getAsso: function(id) {
            return $http.post('./vendor/index.php/assoController/getAsso',{id:id});
        },
        addAsso: function(s) {
            return $http.post('./vendor/index.php/assoController/addAsso',{association:s});
        },
        updateAsso: function(s) {
            return $http.post('./vendor/index.php/assoController/updateAsso',{association:s});
        },
        deleteAsso: function(s) {
            return $http.post('./vendor/index.php/assoController/deleteAsso',{association:s});
        }
    };
}]);