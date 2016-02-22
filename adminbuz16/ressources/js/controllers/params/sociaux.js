var app = angular.module('buzancais');

app.controller('sociauxController', ['$scope','sociauxService', function($scope,sociauxService) {
    $scope.sociauxError=null;
    $scope.updateSoc = function(){
        var up = sociauxService.up($scope.Sociaux);
        up.then(function (response) {
            if (!response.data.success) $scope.sociauxError=response.data.message;
            else alert("Modification effectuée");
        }, function () {
            $scope.sociauxError="Erreur de connexion avec le serveur !";
        });
    }
    $scope.init = function(){
        var c = sociauxService.getAll($scope);
        c.then(function (response) {
            if (response.data.success) {
                $scope.Sociaux=response.data.donnees;
                $scope.sociauxError=null;
            }
            else{
                $scope.sociauxError=response.data.message;
            }
        }, function () {
            $scope.sociauxError="Erreur de connexion avec le serveur !";
        });
    }
    $scope.init();
}]);
app.factory('sociauxService', ['$http', function($http) {
    return {
        up: function(S) {
            return $http.post('./vendor/index.php/sociauxController/update',{soc:S});
        },
        getAll: function() {
            return $http.get('./vendor/index.php/sociauxController/getAll');
        }
    };
}]);