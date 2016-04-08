var app = angular.module('buzancais');

app.controller('photothequeController', ['$scope','photothequeService','Upload','$timeout','Lightbox', function($scope,photothequeService,Upload, $timeout,Lightbox) {
    $scope.collapseAddCat=true;
    $scope.collapseAddPhotos=true;
    $scope.collapseAddPicture=true;
    $scope.newCategorie=null;
    $scope.errorTitre=null;
    $scope.categoriesError=null;
    $scope.listeCategories=null;
    $scope.basePathRep=null;
    $scope.titreimageajout="";
    $scope.albumimageajout="";
    $scope.pictureCatParent=null;
    
    $scope.picturesCategorie=function(C){
	$scope.annuleModification();
        $scope.collapseAddPhotos=false;
        $scope.pictureCatParent={
            nom:C.Nom,
            id:C.id,
            Repertoire:C.Repertoire,
            pictures:C.pictures
        };
        $scope.uploadFiles = function(files, errFiles) {
            $scope.files = files;
            $scope.errFiles = errFiles;
            angular.forEach(files, function(file) {
                file.upload = Upload.upload({
                    method: 'POST',
                    file: file,
                    sendFieldsAs: 'form',
                    url: './vendor/index.php/photothequeController/addPicture',
                    fields: {p:$scope.pictureCatParent,nom:$scope.titreimageajout,album:$scope.albumimageajout}
                });
                file.upload.then(function (response) {
                    $timeout(function () {
                        file.result = response.data;
                        if(file.result.success){
                            $timeout(function(){$scope.successAddedPicture(file)}, 3000);
                        }
                    });
                }, function (response) {
                    if (response.status > 0)
                        $scope.errorMsg = response.status + ': ' + response.data;
                    }, function (evt) {
                        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
                });
            });
        }
    };
    
    $scope.successAddedPicture=function(file){
        $scope.pictureCatParent.pictures.push(file.result.donnees);
        var index=0;
        for(var image in $scope.files){
            if($scope.files[image].$$hashKey==file.$$hashKey){
                $scope.files.splice(index,1);
            }
            index++;
        }
    }
    $scope.openLightboxModal = function (index) {
        Lightbox.openModal($scope.pictureCatParent.pictures, index);
    };
    $scope.deletePicture=function(picture){
        if(!confirm("Êtes-vous sûr de vouloir supprimer cette image ?")) return false;
        var deletePicture = photothequeService.deletePicture(picture);
        deletePicture.then(function (response) {
            if (response.data.success) {
                var index=0;
                for(var image in $scope.pictureCatParent.pictures){
                    if($scope.pictureCatParent.pictures[image].id==picture.id){
                        $scope.pictureCatParent.pictures.splice(index,1);
                    }
                    index++;
                }
            }
            else{
                alert("Une erreur est survenue lors de la suppression de l'image");
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de la suppression de l'image";
        });
        
    }
    $scope.annuleModification=function(){
        $scope.newCategorie={
            nom:null,
            id:null,
            Repertoire:null
        };
        $scope.collapseAddCat=true;
        $scope.categoriesError=null;
    }
    $scope.init = function(){
        var getCategories = photothequeService.getCategories();
        getCategories.then(function (response) {
            if (response.data.success) {
                $scope.categoriesError=null;
                $scope.listeCategories = response.data.donnees;
                $scope.basePathRep = response.data.base_upload;
            }
            else{
                $scope.categoriesError = response.data.message;
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de la récupération des catégories";
        });
    };
    $scope.updateCategorie = function(C){
        $scope.newCategorie={
            nom:C.Nom,
            id:C.id,
            Repertoire:C.Repertoire,
            toChange:true
        };
        $scope.collapseAddCat=false;
    };
    $scope.addCategorie = function(c){
        var addCategorie;
        if(!c.toChange) addCategorie = photothequeService.addCategorie(c);
        else addCategorie = photothequeService.updateCategorie(c);
        
        addCategorie.then(function (response) {
            if (response.data.success) {
                $scope.categoriesError=null;
                $scope.newCategorie=null;
                $scope.collapseAddCat=true;
                $scope.init();
            }
            else{
                $scope.categoriesError = response.data.message;
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de la récupération des catégories";
        });
    };
    $scope.deleteCategorie = function(c){
        if(!confirm("Êtes-vous sûr de vouloir supprimer cette catégorie ?")) return false;
        var deleteCategorie = photothequeService.deleteCategorie(c);
        deleteCategorie.then(function (response) {
            if (response.data.success) {
                $scope.categoriesError=null;
                $scope.newCategorie=null;
                $scope.init();
            }
            else{
                $scope.categoriesError = response.data.message;
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de la suppression d'une catégories";
        });
    };
    $scope.init();
}]);
app.factory('photothequeService', ['$http', function($http) {
    return {
        getCategories: function() {
            return $http.get('./vendor/index.php/photothequeController/getCategories');
        },
        addCategorie: function(c) {
            return $http.post('./vendor/index.php/photothequeController/addCategorie',{categorie:c});
        },
        deleteCategorie: function(c) {
            return $http.post('./vendor/index.php/photothequeController/deleteCategorie',{categorie:c});
        },
        updateCategorie: function(c) {
            return $http.post('./vendor/index.php/photothequeController/updateCategorie',{categorie:c});
        },
        deletePicture: function(p) {
            return $http.post('./vendor/index.php/photothequeController/deletePicture',{deletePicture:p});
        }
    };
}]);