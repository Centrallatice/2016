var app = angular.module('buzancais');

app.controller('carousselController', ['$rootScope','$scope','$location','carousselService','pagesService','modulesService','$sce', function($rootScope,$scope,$location,carousselService,pagesService,modulesService,$sce) {
    $scope.collapseAddDiaporama=true;
    $scope.collapseAddPhotos=true;
    $scope.errorAddDiaporama=null;
    $scope.diaporamaError=null;
    $scope.pageError=null;
    $scope.envoiImageEnCours=false;
    
    $scope.annuleModification=function(){
        $scope.controleChamp={
            Nom:false,
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
            var delDiapo = carousselService.delDiapo(img);
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
        
        var addImageDiapo = carousselService.addImageDiapo($scope.pictureDiapo,img);
        addImageDiapo.then(function (response) {
            if (response.data.success) {
                $scope.envoiImageEnCours=false;
                img.id=response.data.donnees;
                img.Contenu=img.contenu;
                img.imageFile=response.data.filename;
                var newImage = {
                    id:response.data.donnees,
                    Contenu:img.contenu,
                    Groupe:img.groupe,
                    imageFile:response.data.filename,
                    idModule:$scope.pictureDiapo.id
                };
                $scope.pictureDiapo.rep=response.data.rep;
                if(!$scope.pictureDiapo.pictures) $scope.pictureDiapo.pictures=new Array(newImage);
                else $scope.pictureDiapo.pictures.push(newImage);
                document.getElementById('iconecat').value="";
                document.getElementById('contenuPicture').value="";
                document.getElementById('libelle').value="";
                document.getElementById('groupe').value="";
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
        $scope.newDiaporama.showTitle=0;
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
        var getDiapos = modulesService.getAllByType('caroussel');
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
        var getDiapos = modulesService.getAllByType('caroussel');
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

       
        for(var e in $scope.controleChamp){
            if($scope.controleChamp[e]) return false;
        }
       
        
        var mService = modulesService.addModule(module,'caroussel');
        mService.then(function (response) {
            if (response.data.success) {
                module.type='caroussel';
                module.id=response.data.donnees;
                module.NomPage = (module.idPage) ? module.idPage.Nom : null;
                module.Diaporama = {id:null,Nom:null,pictures:{}};
               
                if(!$scope.listeModulesDiapo) $scope.listeModulesDiapo = new Array(); 
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


app.factory('carousselService', ['$http', function($http) {
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