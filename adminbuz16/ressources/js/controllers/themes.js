var app = angular.module('buzancais');
app.controller('themesController', ['$rootScope','$scope','$location','themesService', function($scope,themesService) {
    
}]);

app.factory('themesService', ['$http', function($http) {
    return {
        getThemes: function() {
            return $http.get('./vendor/index.php/themesController/getAll');
        }
    };
}]);