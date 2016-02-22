var app = angular.module('buzancais');
app.controller('loginController', ['loginService','$rootScope','$scope','$location', function(loginService,$rootScope,$scope,$location) {
    $rootScope.userData=null;
    $scope.setConnexion = function(user){
        var connexion = loginService.connexion(user);
        connexion.then(function successCallback(response) {
            if (response.data.success) {
                $rootScope.userData=response.data.donnees;
                $scope.Error = false;
                $scope.Message=null;
                $location.path('/');
            }
            else{
                $rootScope.userData=null;
                $scope.Error = true;
                $scope.Message=response.data.message;
            }
        }, function errorCallback(response) {
            alert("Erreur de connexion avec le serveur ! Vous allez être redirigé vers la page de connexion");
            $location.path('/login');
        });
    }
    
}]);
app.factory('loginService', ['$http', function($http) {
    return {
        isLogged: function() {
            return $http.get('./vendor/index.php/checkSession');
        },
        connexion: function(u) {
            return $http.post('./vendor/index.php/loginController/Connexion',{user:u});
        },
        logout: function() {
            return $http.post('./vendor/index.php/destroySession');
        }
    };
}]);