var app = angular.module('buzancais');
app.controller('videosthequeController', ['$scope','videosthequeService','notifications', 
function($scope,videosthequeService,notifications) {
    $scope.init = function(){
        var getVideos = videosthequeService.getVideos();
        getVideos.then(function (response) {
            if (response.data.success) {
                $scope.listeMedias = response.data.donnees;
            }
            else{
                notifications.showError({message:response.data.message});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la récupération des vidéos"});
        });
    };
    $scope.addMedia = function(m){
        var addVideo = videosthequeService.addVideo(m);
        addVideo.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:'La vidéo a bien été ajouté !',
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
                $scope.newMedia={
                    nom:null,
                    file:null
                };
                $scope.init();
            }
            else{
                notifications.showError({message:response.data.message});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la création de la vidéo"});
        });
    };
    $scope.deleteMedia = function(m){
        if(!confirm("Êtes-vous sûr de vouloir supprimer cette vidéo ?")) return false;
        var deleteVideo = videosthequeService.deleteVideo(m);
        deleteVideo.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:'La vidéo a bien été supprimé !',
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
            notifications.showError({message:"Une erreur est survenue lors de la suppression de la vidéo"});
        });
    };
    $scope.init();
}]);


app.factory('videosthequeService', ['$http', function($http) {
    return {
        getVideos: function() {
            return $http.get('./vendor/index.php/videosController/getVideos');
        },
        addVideo: function(m) {
            return $http.post('./vendor/index.php/videosController/addVideo',{v:m});
        },
        deleteVideo: function(m) {
            return $http.post('./vendor/index.php/videosController/deleteVideo',{v:m});
        }
    };
}]);