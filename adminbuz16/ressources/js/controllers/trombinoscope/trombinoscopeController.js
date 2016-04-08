var app = angular.module('buzancais');
app.controller('trombinoscopeController', ['$scope','trombinoscopeService','notifications', 
function($scope,trombinoscopeService,notifications) {
$scope.collapseAddCat=true;
    $scope.init = function(){
        var getAdjoints = trombinoscopeService.getAdjoints();
        getAdjoints.then(function (response) {
            if (response.data.success) {
                $scope.urlAdjoint = response.data.url;
                $scope.listeAdjoints = response.data.donnees;
            }
            else{
                notifications.showError({
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true,
					message:response.data.message});
            }
        }, function () {
            notifications.showError({
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true,
					message:"Une erreur est survenue lors de la récupération du trombinoscope"});
        });
    };
    $scope.addAdjoint = function(m){
        var addAdjoint = trombinoscopeService.addAdjoint(m);
        addAdjoint.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:'La personne a bien été ajoutée !',
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.newAdjoint={
                    nom:null,
                    detailfonction:null,
                    fonction:null,
                    email:null
                };
                document.getElementById('img').value="";
                $scope.init();
            }
            else{
                notifications.showError({
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true,
					message:response.data.message});
            }
        }, function () {
            notifications.showError({
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true,
					message:"Une erreur est survenue lors de l'ajout de la personne"});
        });
    };
    $scope.deleteAdjoint = function(m){
        if(!confirm("Êtes-vous sûr de vouloir retirer cet adjoint ?")) return false;
        var deleteAdjoint = trombinoscopeService.deleteAdjoint(m);
        deleteAdjoint.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:'La personne a bien été retirée !',
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.init();
            }
            else{
                notifications.showError({
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true,
					message:response.data.message});
            }
        }, function () {
            notifications.showError({
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true,
					message:"Une erreur est survenue"});
        });
    };
    $scope.init();
}]);


app.factory('trombinoscopeService', ['$http', function($http) {
    return {
        getAdjoints: function() {
            return $http.get('./vendor/index.php/trombinoscopeController/getPersonnes');
        },
        addAdjoint: function(a) {
            return $http.post('./vendor/index.php/trombinoscopeController/addPersonne',{personne:a});
        },
        deleteAdjoint: function(a) {
            return $http.post('./vendor/index.php/trombinoscopeController/deletePersonne',{personne:a});
        }
    };
}]);