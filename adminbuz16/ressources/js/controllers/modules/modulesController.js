var app = angular.module('buzancais');
app.controller('modulesController', ['modulesService', function(modulesService) {
    
}]);
app.factory('modulesService', ['$http', function($http) {
    return {
        getAll: function() {
            return $http.get('./vendor/index.php/modulesController/getAll');
        },
        getAllByType: function(t) {
            return $http.post('./vendor/index.php/modulesController/getAllByType',{type:t});
        },
        addModule: function(m,t) {
            return $http.post('./vendor/index.php/modulesController/addModule',{module:m,type:t});
        },
        deleteModule: function(m,t) {
            return $http.post('./vendor/index.php/modulesController/deleteModule',{module:m});
        }
    };
}]);