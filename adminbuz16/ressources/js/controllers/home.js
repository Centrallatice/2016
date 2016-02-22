var app = angular.module('buzancais');

app.controller('homeController', ['homeService','$rootScope','$scope','$location', function(homeService,$rootScope,$scope,$location) {
    $scope.statsData=null;
    $scope.homeError=null;
	
    $scope.init = function(){
	var getStatsHOME = homeService.getStatsHOME();
        getStatsHOME.then(function (response) {
            if (response.data.success) {
                $scope.statsData=response.data.donnees;
                $scope.homeError = false;
                $scope.homeMessage=null;
            }
            else{
                $scope.statsData=null;
                $scope.homeError = true;
                $scope.homeMessage=response.data.message;
            }
        }, function () {
            alert("Erreur de connexion avec le serveur ! Vous allez être redirigé vers la page de connexion");
            $location.path('/login');
        });
    };
    $scope.init();
}]);
app.factory('homeService', ['$http', function($http) {
    return {
        getStatsHOME: function() {
            return $http.get('./vendor/index.php/homeController/getStatsHOME');
        }
    };
}]);