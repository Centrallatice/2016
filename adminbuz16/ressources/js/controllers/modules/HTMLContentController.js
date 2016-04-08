var app = angular.module('buzancais');

app.controller('htmlContentAddController', ['$scope','$location','htmlContentService','$route','notifications',
    'pagesService','$q','modulesService','$timeout', function($scope,$location,htmlContentService,$route,notifications,
    pagesService,$q,modulesService,$timeout) {
    $scope.ready=false;
    $scope.listePages=new Array();
    $scope.isAllPage=false;
    $scope.nouveauModule={
        nom:"",
        idPage:{},
        position:"",
        contenu:""
    };
    $scope.listePages[0] = {
        Nom: "Toutes les pages du site",
        ThemeName: "default",
        date: null,
        description: null,
        id: "0",
        idAuteur: "1",
        idTheme: "1",
        lienmenu: null,
        motsclefs: null,
        titre: "Toutes les pages du site",
        type: "0",
        url: null  
    };
    $scope.checkIsAllPage=function(id){
        if(id==0){
            $scope.isAllPage=$scope.nouveauModule.idPage[0];
            if($scope.nouveauModule.idPage[0]){
                $scope.nouveauModule.idPage={0:true};
            }
        }
    }
    $scope.init=function(){
	var getPages = pagesService.getPages();
        getPages.then(function (response) {
            if (response.data.success) {
                for(var i=0;i<response.data.donnees.length;i++){
                    $scope.listePages[i+1]=response.data.donnees[i];
                }
                $scope.ready=true;
            }
            else{
                 notifications.showError({
                    message:response.data.message,
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la récupération des pages",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    
    $scope.addModule=function(){
	
        var errPage = true;
        for(var e in $scope.nouveauModule.idPage){
            if($scope.nouveauModule.idPage[e]) errPage=false;
        }
        $scope.errorPage=errPage;
        if(errPage) return false;
        
	var addModule = modulesService.addModuleMultiple($scope.nouveauModule,'customcontent');
        addModule.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"Le module a bien été créé",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
                $timeout(function(){
                    $location.path('/modules/lists/HTMLcontent');
                },3000);
            }
            else{
                notifications.showError({
                    message:response.data.message,
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la création du module",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    }
    $scope.init();
}]);
app.controller('htmlContentUpdateController', ['$scope','$location','htmlContentService','$route','notifications',
    'pagesService','$q','modulesService','$timeout', function($scope,$location,htmlContentService,$route,notifications,
    pagesService,$q,modulesService,$timeout) {
    $scope.ready=false;
    $scope.successUpdateModule=null;
    $scope.errorUpdateModule=null;
    $scope.errorPage=true;
    $scope.listePages=new Array();
    $scope.nouveauModule={
        nom:"",
        idPage:{},
        position:"",
        contenu:""
    };
    $scope.isAllPage=false;
    $scope.checkIsAllPage=function(id){
        if(id==0){
            $scope.isAllPage=$scope.nouveauModule.idPage[0];
            if($scope.nouveauModule.idPage[0]){
                $scope.nouveauModule.idPage={0:true};
            }
        }
    }
    $scope.listePages[0] = {
        Nom: "Toutes les pages du site",
        ThemeName: "default",
        date: null,
        description: null,
        id: 0,
        idAuteur: "1",
        idTheme: "1",
        lienmodule: null,
        motsclefs: null,
        titre: "Toutes les pages du site",
        type: "0",
        url: null  
    };
    $scope.init=function(){
        if(!$route.current.params.idModule || $route.current.params.idModule===null || $route.current.params.idModule===""){
            alert("Le module n'a pas été trouvé");
            $location.path("/modules/lists");
        }
        else{
            var getPages = pagesService.getPages();
            getPages.then(function (response) {
                if (response.data.success) {
                    for(var i=0;i<response.data.donnees.length;i++){
                        $scope.listePages[i+1]=response.data.donnees[i];
                    }
                    var getmoduleByID = modulesService.getmoduleByID($route.current.params.idModule);
                    getmoduleByID.then(function (response) {
                        if (response.data.success) {
                            $scope.errorUpdateModule=null;
                            $scope.successUpdateModule=null;
                            $scope.nouveauModule = response.data.donnees;
                            $scope.nouveauModule.id=$route.current.params.idModule;
                            if($scope.nouveauModule.idPage===true){
                                $scope.isAllPage=true;
                                $scope.nouveauModule.idPage={0:true};
                            }
                            $scope.ready=true;
                        }
                        else{
                            notifications.showError({
                                message:response.data.message,
                                hideDelay: 5000,
                                hide: true,
                                acceptHTML:true
                            });
                        }
                    }, function () {
                        notifications.showError({
                            message:"Une erreur est survenue lors de la récupération des pages",
                            hideDelay: 5000,
                            hide: true,
                            acceptHTML:true
                        });
                    });    
                }
                else{
                    notifications.showError({
                        message:response.data.message,
                        hideDelay: 5000,
                        hide: true,
                        acceptHTML:true
                    });
                }
            }, function () {
                notifications.showError({
                    message:"Une erreur est survenue lors de la récupération des pages",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            });
        }
    };
    $scope.valideUpdateModule=function(){
        var errPage = true;
        for(var e in $scope.nouveauModule.idPage){
            if($scope.nouveauModule.idPage[e]) errPage=false;
        }
        $scope.errorPage=errPage;
        if(errPage) return false;
        var updatemodule = modulesService.updateModuleMultiple($scope.nouveauModule);
        updatemodule.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:"Le module a bien été modifié",
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
                $timeout(function(){
                    $location.path('/modules/lists/HTMLcontent');
                },3000);
            }
            else{
                notifications.showError({
                    message:response.data.message,
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la récupération des pages",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });    
                    
    };
    $scope.init();
}]);
app.controller('htmlContentListsController', ['$scope','$location','htmlContentService','$route','notifications',
    'pagesService','$q','modulesService', function($scope,$location,htmlContentService,$route,notifications,
    pagesService,$q,modulesService) {
    $scope.errorListeModule=null;
    $scope.init=function(){
        var getBlocs = modulesService.getAllByType('customcontent');
        getBlocs.then(function (response) {
            if (response.data.success) {
                $scope.listeModulesBloc = response.data.donnees;
            }
            else{
                notifications.showError({
                    message:response.data.message,
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la récupération des contenus existants",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.deleteModule=function(module){
        if(!confirm("Êtes-vous sûr de vouloir supprimer ce module ?")) return false;
        var deleteModule = modulesService.deleteModule(module);
        deleteModule.then(function (response) {
            if (response.data.success) {
                $scope.listeModulesBloc = response.data.donnees;
            }
            else{
                notifications.showError({
                    message:response.data.message,
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
        }, function () {
            notifications.showError({
                message:"Une erreur est survenue lors de la suppression du module",
                hideDelay: 5000,
                hide: true,
                acceptHTML:true
            });
        });
    };
    $scope.init();
}]);

app.factory('htmlContentService', ['$http', function($http) {
    return {
        
    };
}]);