var app = angular.module('buzancais');

app.controller('coordonneesController', ['$scope','coordService', function($scope,coordService) {
    $scope.coordsError=null;
    $scope.updateCoord = function(Coordonnees){
        var up = coordService.up(Coordonnees);
        up.then(function (response) {
            if (!response.data.success) $scope.coordsError=response.data.message;
            else alert("Les coordonnées ont bien été modifiées");
        }, function () {
            $scope.coordsError="Erreur de connexion avec le serveur !";
        });
    }
    $scope.init = function(){
        var c = coordService.getAll($scope);
        c.then(function (response) {
            if (response.data.success && response.data.donnees.nom) {
                $scope.Coordonnees=response.data.donnees;
            }
            else{
                $scope.coordsError=response.data.message;
            }
        }, function () {
            $scope.coordsError="Erreur de connexion avec le serveur !";
        });
    }
    $scope.init();
}]);
app.factory('coordService', ['$http', function($http) {
    return {
        up: function(C) {
            return $http.post('./vendor/index.php/coordonneesController/update',{coord:C});
        },
        getAll: function() {
            return $http.get('./vendor/index.php/coordonneesController/getAll');
        }
    };
}]);