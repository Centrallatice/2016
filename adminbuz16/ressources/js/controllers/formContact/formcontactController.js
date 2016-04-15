var app = angular.module('buzancais');

app.controller('formcontactController', ['$scope','formcontactService', function($scope,formcontactService) {
    $scope.contactError=null;
    $scope.init = function(){
        var c = formcontactService.getAll($scope);
        c.then(function (response) {
            if (response.data.success) {
                $scope.demandes=response.data.donnees;
            }
            else{
                $scope.contactError=response.data.message;
            }
        }, function () {
            $scope.contactError="Erreur de connexion avec le serveur !";
        });
    }
    $scope.init();
}]);
app.factory('formcontactService', ['$http', function($http) {
    return {
        getAll: function() {
            return $http.get('./vendor/index.php/demandeContactController/getAll');
        }
    };
}]);