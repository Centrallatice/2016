var app = angular.module('buzancais');
app.controller('diaporamaController', ['$rootScope','$scope','$location','diaporamaService','pagesService','modulesService','$sce', function($rootScope,$scope,$location,diaporamaService,pagesService,modulesService,$sce) {
    $scope.collapseAddDiaporama=true;
    $scope.collapseAddPhotos=true;
    $scope.errorAddDiaporama=null;
    $scope.diaporamaError=null;
    $scope.pageError=null;
    $scope.envoiImageEnCours=false;
    
    $scope.annuleModification=function(){
        $scope.controleChamp={
            Nom:false,
            Page:false,
            Position:false,
            toChange:false
        };
        $scope.newDiaporama={};
    }
    $scope.picturesDiaporama=function(D){
	$scope.annuleModification();
        $scope.collapseAddPhotos=false;
        $scope.collapseAddDiaporama=true;
        $scope.pictureDiapo = D;
    };
    $scope.getHTMLContent=function(content){
        return $sce.trustAsHtml(content);
    };
    
    $scope.deleteImageFromDiapo=function(img){
        if(!confirm("Êtes-vous sur de vouloir supprimer cette diaporama ?")) return false;
        else{
            var delDiapo = diaporamaService.delDiapo(img);
            delDiapo.then(function (response) {
                if (response.data.success) {
                    var index=0;
                    for(var e in $scope.pictureDiapo.pictures){
                        if($scope.pictureDiapo.pictures[e].id==img.id){
                            $scope.pictureDiapo.pictures.splice(index,1);
                        }
                        index++;
                    }
                }
                else{
                    $scope.pagesError = response.data.message;
                }
            }, function () {
                $scope.Error = true;
                $scope.Message="Une erreur est survenue lors de la suppression";
            });
        }
    }
    $scope.ValideAddImage=function(img){
        if(!img.fichier){
            alert("Vous devez choisir au moins une image");
            return false;
        }
        $scope.envoiImageEnCours=true;
        
        var addImageDiapo = diaporamaService.addImageDiapo($scope.pictureDiapo,img);
        addImageDiapo.then(function (response) {
            if (response.data.success) {
                $scope.envoiImageEnCours=false;
                img.id=response.data.donnees;
                img.Contenu=img.contenu;
                img.imageFile=response.data.filename;
                $scope.pictureDiapo.pictures.push(img);
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des diaporamas existants";
        });
    }
    $scope.init = function(){
        var getPages = pagesService.getPages();
        getPages.then(function (response) {
            if (response.data.success) {
                $scope.listePages = response.data.donnees;
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des pages";
        });
        var getDiapos = modulesService.getAllByType('diaporama');
        getDiapos.then(function (response) {
            if (response.data.success) {
                $scope.listeModulesDiapo = response.data.donnees;
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des diaporamas existants";
        });
    };
    $scope.deleteDiaporama = function(m){
        if(!confirm("Êtes vous sûr de vouloir supprimer ce module ?")) return false;
        var dModule = modulesService.deleteModule(m);
        dModule.then(function (response) {
            if (response.data.success) {
                var index=0;
                for(var e in $scope.listeModulesDiapo){
                    if($scope.listeModulesDiapo[e].id==m.id){
                        $scope.listeModulesDiapo.splice(index,1);
                    }
                    index++;
                }
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des pages";
        });
        var getDiapos = modulesService.getAllByType('diaporama');
        getDiapos.then(function (response) {
            if (response.data.success) {
                $scope.listeModulesDiapo = response.data.donnees;
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des diaporamas existants";
        });
    };
    $scope.addDiaporama = function(module){
        
        if(typeof module == "undefined"){
            for(var e in $scope.controleChamp){
                $scope.controleChamp[e]=true;
            }	
            return false;
        }
        
        if(!module.nom) $scope.controleChamp.Nom=true;
        else $scope.controleChamp.Nom=false;

        if(!module.idPage) $scope.controleChamp.Page=true; 
        else $scope.controleChamp.Page=false;
        
        if(!module.position) $scope.controleChamp.Position=true; 
        else $scope.controleChamp.Position=false;
        
        for(var e in $scope.controleChamp){
            if($scope.controleChamp[e]) return false;
        }
       
        
        var mService = modulesService.addModule(module,'diaporama');
        mService.then(function (response) {
            if (response.data.success) {
                module.type='diaporama';
                module.id=response.data.donnees;
                module.NomPage = module.idPage.Nom;
                module.Diaporama = {id:null,Nom:null,pictures:{}};
                
                $scope.listeModulesDiapo.push(module);
                $scope.annuleModification();
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des pages";
        });
    };
    $scope.annuleModification();
    $scope.init();
}]);


app.factory('diaporamaService', ['$http', function($http) {
    return {
        addDiaporama: function(d) {
            return $http.post('./vendor/index.php/diaporamaController/addDiaporama',{diapo:d});
        },
        addImageDiapo: function(d,i) {
            return $http.post('./vendor/index.php/diaporamaController/addImageDiapo',{img:i,diapo:d});
        },
        delDiapo: function(i) {
            return $http.post('./vendor/index.php/diaporamaController/delDiapo',{img:i});
        }
    };
}]);