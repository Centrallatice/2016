var app = angular.module('buzancais');
app.controller('mediasController', ['$scope','mediasService','notifications', 
function($scope,mediasService,notifications) {
    $scope.init = function(){
        var getMedias = mediasService.getMedias();
        getMedias.then(function (response) {
            if (response.data.success) {
                $scope.listeMedias = response.data.donnees;
            }
            else{
                notifications.showError({message:response.data.message});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la récupération des médias"});
        });
    };
    $scope.addMedia = function(m){
        m.type="document";
        var addMedia = mediasService.addMedia(m);
        addMedia.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:'Le média a bien été ajouté !',
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.newMedia={
                    nom:null,
                    file:null
                };
                document.getElementById('file').value="";
                $scope.init();
            }
            else{
                notifications.showError({message:response.data.message});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la création du média"});
        });
    };
    $scope.deleteMedia = function(m){
        if(!confirm("Êtes-vous sûr de vouloir supprimer ce média ?")) return false;
        var deleteMedia = mediasService.deleteMedia(m);
        deleteMedia.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:'Le média a bien été supprimé !',
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.init();
            }
            else{
                notifications.showError({message:response.data.message});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la suppression du média"});
        });
    };
    $scope.init();
}]);


app.factory('mediasService', ['$http', function($http) {
    return {
        getMedias: function() {
            return $http.get('./vendor/index.php/mediasController/getMedias');
        },
        addMedia: function(m) {
            return $http.post('./vendor/index.php/mediasController/addMedia',{media:m});
        },
        deleteMedia: function(m) {
            return $http.post('./vendor/index.php/mediasController/deleteMedia',{media:m});
        }
    };
}]);