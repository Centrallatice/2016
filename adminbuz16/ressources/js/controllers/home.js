var app = angular.module('buzancais');

app.controller('homeController', ['homeService','$rootScope','$scope','$location', function(homeService,$rootScope,$scope,$location) {
    $scope.monthToName=function(month){
       
        switch(month){
            case 1:
                return 'Janvier';
                break;
            case 2:
                return 'Fevrier';
                break;
            case 3:
                return 'Mars';
                break;
            case 4:
                return 'Avril';
                break;
            case 5:
                return 'Mai';
                break;
            case 6:
                return 'Juin';
                break;
            case 7:
                return 'Juillet';
                break;
            case 8:
                return 'Aout';
                break;
            case 9:
                return 'Septembre';
                break;
            case 10:
                return 'Octobre';
                break;
            case 11:
                return 'Novembre';
                break;
            case 12:
                return 'Décembre';
                break;
            default:
                return '';
                break;
        }
    }
    $scope.statsData=null;
    $scope.homeError=null;
    var d =new Date();
    $scope.MoisEnCours=d.getMonth()+1;
    $scope.AnneeEnCours=d.getFullYear();
    $scope.MoisEnCoursFR=$scope.monthToName($scope.MoisEnCours);
    
    
    
    $scope.series = ['Visiteurs','Pages vues'];
    $scope.labels = [];
    $scope.data = [[],[]];
    
    $scope.getStats=function(sens){
        if(sens=='-'){
            if($scope.MoisEnCours==1){ 
                $scope.MoisEnCours=12;
                $scope.AnneeEnCours--;
            }
            else $scope.MoisEnCours--;
        }
        else{
            if($scope.MoisEnCours==12){ 
                $scope.MoisEnCours=1;
                $scope.AnneeEnCours++;
            }
            else $scope.MoisEnCours++;
        }
        $scope.MoisEnCoursFR=$scope.monthToName($scope.MoisEnCours);
        var getStatsHOMEVisiteur = homeService.getStatsHOMEVisiteur($scope.MoisEnCours,$scope.AnneeEnCours);
        getStatsHOMEVisiteur.then(function (response) {
            
            $scope.labels = [];
            $scope.data = [[],[]];
            
            if(response.data.visiteur){
                for(var e in response.data.visiteur){
                    $scope.labels.push(e+' '+$scope.monthToName($scope.MoisEnCours));
                    $scope.data[0].push(response.data.visiteur[e]);
                }
            }
            if(response.data.pages){
                for(var e in response.data.pages){
                    $scope.data[1].push(response.data.pages[e]);
                }
            }
            
        }, function () {
            alert("Erreur de connexion avec le serveur ! Vous allez être redirigé vers la page de connexion");
            $location.path('/login');
        });
    }
    
    $scope.init = function(){
	var getStatsHOME = homeService.getStatsHOME();
        getStatsHOME.then(function (response) {
            if (response.data.success) {
                $scope.statsData=response.data.donnees;
                $scope.homeError = false;
                $scope.homeMessage=null;
            
                if(response.data.detail){
                    for(var e in response.data.detail){
                        $scope.labels.push(e+' '+$scope.monthToName($scope.MoisEnCours));
                        $scope.data[0].push(response.data.detail[e]);
                    }
                }
                if(response.data.pages){
                    for(var e in response.data.pages){
                        $scope.data[1].push(response.data.pages[e]);
                    }
                }
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
        },
        getStatsHOMEVisiteur: function(m,y) {
            return $http.post('./vendor/index.php/homeController/getStatsHOMEVisiteur',{mois:m,annee:y});
        }
    };
}]);