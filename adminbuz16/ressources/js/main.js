angular.module('buzancais', ['ngRoute','ui.bootstrap','colorpicker.module',
    'angularFileUpload','ngCkeditor','angularMoment','angular-loading-bar',
    'ngFileUpload','bootstrapLightbox']).controller('HomeController', function() {
   
}).directive('fileSelect', ['$window', function ($window) {
    return {
        restrict: 'A',
        require: 'ngModel',
        link: function (scope, el, attr, ctrl) {
            var fileReader = new $window.FileReader();
            fileReader.onload = function () {
                ctrl.$setViewValue(fileReader.result);
                if ('fileLoaded' in attr) {
                    scope.$eval(attr['fileLoaded']);
                }
            };
            fileReader.onprogress = function (event) {
                if ('fileProgress' in attr) {
                    scope.$eval(attr['fileProgress'], {'$total': event.total, '$loaded': event.loaded});
                }
            };
            fileReader.onerror = function () {
                if ('fileError' in attr) {
                    scope.$eval(attr['fileError'], {'$error': fileReader.error});
                }
            };
            var fileType = attr['fileSelect'];

            el.bind('change', function (e) {
                var fileName = e.target.files[0];
                if (fileType === '' || fileType === 'text') {
                    fileReader.readAsText(fileName);
                } else if (fileType === 'data') {
                    fileReader.readAsDataURL(fileName);
                }
            });
        }
    };
}]).run(['$rootScope', 'loginService','$location','amMoment',function ($rootScope, loginService,$location,amMoment) {
    $rootScope.location = $location;
    amMoment.changeLocale('fr');
    $rootScope.menu={
        pages : false
    };
    
    $rootScope.logout=function(){
        var l = loginService.logout();
        l.then(function (response) {
            if (response.data.success) {
                $location.path('/login');
            }
        });
    };
    $rootScope.$on('$routeChangeStart', function (event, next, current) {
        
        var isLogged = loginService.isLogged();
        isLogged.then(function (response) {
            if (response.data.success) {
                $rootScope.userData=response.data.donnees;
            }
            else{
                $rootScope.userData=null;
                $location.path('/login');
            }
        }, function () {
            alert("Erreur de connexion avec le serveur ! Vous allez être redirigé vers la page de connexion");
            $location.path('/login');
        });
        
    });
}]).constant('angularMomentConfig', {
  preprocess: 'utc',
  timezone: 'Europe/Berlin'
}).filter('to_trusted', ['$sce', function($sce){
        return function(text) {
            return $sce.trustAsHtml(text);
        };
    }]);