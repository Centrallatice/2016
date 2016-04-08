var app = angular.module('buzancais');
app.controller('contactAddServiceController', ['$scope','contactService','notifications', 
    function($scope,contactService,notifications) {
    
    $scope.init=function(){
        $scope.newService={
            nom:null,
            email:null,
            telephone:null,
            telephone2:null,
            adresserue:null,
            adresseville:null,
            adressecp:null,
            lienggmap:null,
            iframeggmap:null,
            horaires:null
        };
    };
    $scope.addService=function(){
        var addS = contactService.addService($scope.newService);
        addS.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"Le service a bien été ajouté",
                    hideDelay: 3000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.init();
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
                message:"Une erreur est survenue lors de la création du service",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);
app.controller('contactListsServiceController', ['$scope','contactService','notifications', 
    function($scope,contactService,notifications) {
    $scope.listeService=null;
    $scope.ready=false;
    $scope.init=function(){
        var getS = contactService.getServices();
        getS.then(function (response) {
            if (response.data.success) {
                $scope.ready = true;
                $scope.listeService = response.data.donnees;
            }     
            else{
                notifications.showError({
                    message:"Une erreur est survenue lors de la récupération des services",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la récupération des services",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.deleteService=function(id){
        if(!confirm("Êtes-vous sûr de vouloir supprimer ce service ?")) return false;
        var delS = contactService.deleteService(id);
        delS.then(function (response) {
            if (response.data.success) {
                $scope.init();
            }     
            else{
                notifications.showError({
                    message:"Une erreur est survenue lors de la suppression du service",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la récupération du service",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);
app.controller('contactUpdateServiceController', ['$scope','contactService','notifications','$route','$location', 
    function($scope,contactService,notifications,$route,$location) {
    
    
    $scope.ready=false;
    $scope.init=function(){
        if(!$route.current.params.idService || $route.current.params.idService===null || $route.current.params.idService===""){
            notifications.showError({message:"Le service n'a pas été trouvé"});
            $location.path("/contact/service/lists");
        }
        else{
            var getSbID = contactService.getService($route.current.params.idService);
            getSbID.then(function (response) {
                if (response.data.success) {
                    $scope.ready = true;
                    $scope.newService = response.data.donnees;
                }     
                else{
                    notifications.showError({
                        message:"Une erreur est survenue lors de la récupération du service",
                        hideDelay: 5000,
                        hide: true,
                        acceptHTML:true
                    });
                }
            }, function () {
                notifications.showError({
                    message:"Une erreur est survenue lors de la récupération du service",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            });
        }
    };
    
    $scope.updateService=function(){
        var updateS = contactService.updateService($scope.newService);
        updateS.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"Le service a bien été modifié",
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
                message:"Une erreur est survenue lors de la modification du service",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);

app.factory('contactService', ['$http', function($http) {
    return {
        getServices: function() {
            return $http.get('./vendor/index.php/contactController/getServices');
        },
		getService: function(id) {
            return $http.post('./vendor/index.php/contactController/getService',{id:id});
        },
        addService: function(s) {
            return $http.post('./vendor/index.php/contactController/addService',{service:s});
        },
        updateService: function(s) {
            return $http.post('./vendor/index.php/contactController/updateService',{service:s});
        },
        deleteService: function(s) {
            return $http.post('./vendor/index.php/contactController/deleteService',{id:s});
        }
    };
}]);