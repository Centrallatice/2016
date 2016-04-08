var app = angular.module('buzancais');

app.controller('articlesListsController', ['$scope','articlesService','$location', function($scope,articlesService,$location) {
    $scope.articleError=null;
    $scope.init = function(){
        var getArticles = articlesService.getArticles();
        getArticles.then(function (response) {
            if (response.data.success) {
                $scope.listeArticles = response.data.donnees;
            }
            else{
                $scope.articleError = response.data.message;
            }
        }, function () {
            $scope.articleError="Une erreur est survenue lors de la récupération des articles";
        });
    };
    $scope.delArticle = function(article){
        
        if(!confirm("Êtes-vous sûr de vouloir supprimer cet article ?")) return false;
        var delArticle= articlesService.delArticle(article);
        delArticle.then(function (response) {
            if (response.data.success) {
                var index=0;
                for(var e in $scope.listeArticles){
                    if($scope.listeArticles[e].id==article.id){
                        $scope.listeArticles.splice(index,1);
                    }
                    index++;
                }
            }
            else{
                $scope.articleError = response.data.message;
            }
        }, function () {
            $scope.articleError="Une erreur est survenue lors de la récupération des articles";
        });
    };
    
    $scope.init();
}]);
app.controller('articlesAddController', ['$scope','articlesService','categoriesService','modulesService',
    'pagesService','notifications', function($scope,articlesService,categoriesService,modulesService,pagesService,notifications) {
    $scope.ready=false;
    
    $scope.newArticle={
        disposition:"TWO_COLS_IMG_LEFT",
        showTitle:1,
        showPointille:1
    };
    $scope.init = function(){
        var getCategories = categoriesService.getCategories();
        getCategories.then(function (response) {
            if (response.data.categories.success) {
                $scope.listeCategories = response.data.categories.donnees;
            }
            else{
                notifications.showError({message:response.data.categories.message});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la récupération des catégories"});
        });
        var getPages = pagesService.getPages();
        getPages.then(function (response) {
            if (response.data.success) {
                $scope.listePages = response.data.donnees;
            }
            else{
                notifications.showError({message:response.data.message});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la récupération des pages"});
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
        $scope.ready=true;
    };
    $scope.addArticle=function(){
        var addArticle = articlesService.addArticle($scope.newArticle);
        addArticle.then(function (response) {
            if (response.data.success) {
                for(var e in $scope.newArticle){
                    $scope.newArticle[e]=null;
                }
                notifications.showSuccess({
                    message:'Votre article a bien été créé !',
                    hideDelay: 5000,
                    hide: true,
                    acceptHTML:true
                });
            }
            else{
                notifications.showError({message:response.data.message});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la création de l'article"});
        });
        $scope.ready=true;
    }
    $scope.init();
}]);

app.controller('articlesEditController', ['$scope','articlesService','categoriesService','modulesService',
    '$location','$route','pagesService','$timeout', function($scope,articlesService,categoriesService,modulesService,
    $location,$route,pagesService,$timeout) {
    $scope.ready=false;
    $scope.changed=false;
    $scope.pagesError=null;
    $scope.changeIcone=function(){
        if(!(confirm("Êtes-vous sûr de vouloir supprimer cette image ?"))) return false;
        $scope.newArticle.image=null;
        $scope.newArticle.updateImage=true;
        document.getElementById('image').value="";
    }
	$scope.setNewImage=function(){
        $scope.newArticle.updateImage=true;
    }
    $scope.init = function(){
        if(!$route.current.params.idArticle || $route.current.params.idArticle===null || $route.current.params.idArticle===""){
            alert("L'article n'a pas été trouvé");
            $location.path("/articles/lists");
        }
        else{
            var getCategories = categoriesService.getCategories();
            getCategories.then(function (response) {
                if (response.data.categories.success) {
                    $scope.pagesError=null;
                    $scope.listeCategories = response.data.categories.donnees;
                    var getDiapos = modulesService.getAllByType('caroussel');
                    getDiapos.then(function (response) {
                        if (response.data.success) {
                            $scope.listeModulesDiapo = response.data.donnees;
                        }
                    }, function () {
                        $scope.Error = true;
                        $scope.Message="Une erreur est survenue lors de la récupération des diaporamas existants";
                    });
                    $scope.ready=true;
                    var getPages = pagesService.getPages();
                    getPages.then(function (response) {
                        if (response.data.success) {
                            $scope.pagesError=null;
                            $scope.listePages = response.data.donnees;
                            
                            var monArticle = articlesService.getArticleByID($route.current.params.idArticle);
                            monArticle.then(function (response) {
                                if (response.data.success) {
                                    
                                    $scope.pagesError=null;
                                    $scope.newArticle = response.data.donnees;
                                    $scope.baseImage = response.data.pathImage;
                                    $scope.newArticle.updateImage=false;

                                    if(response.data.donnees.idCategorie){
                                        for(var c in $scope.listeCategories){
                                            if($scope.listeCategories[c].id===$scope.newArticle.idCategorie){
                                                $scope.newArticle.idCategorie=$scope.listeCategories[c];
                                            }
                                        }
                                    }
                                    
                                    if(response.data.donnees.idPage){
                                        for(var c in $scope.listePages){
                                            if($scope.listePages[c].id===$scope.newArticle.idPage){
                                                $scope.newArticle.idPage=$scope.listePages[c];
                                            }
                                        }
                                    }
                                    if(response.data.donnees.idCaroussel){
                                        for(var c in $scope.listeModulesDiapo){
                                            if($scope.listeModulesDiapo[c].id===$scope.newArticle.idCaroussel){
                                                $scope.newArticle.idCarroussel=$scope.listeModulesDiapo[c];
                                            }
                                        }
                                    }
                                }
                                else{
                                    $scope.pagesError = response.data.message;
                                }
                            }, function () {
                                $scope.pagesError="Une erreur est survenue lors de la récupération de l'article";
                            });
                        }
                        else{
                            $scope.pagesError = response.data.message;
                        }
                    }, function () {
                        $scope.pagesError="Une erreur est survenue lors de la récupération des pages";
                    });                    
                }
                else{
                    $scope.pagesError = response.data.categories.message;
                }
            }, function () {
                $scope.pagesError="Une erreur est survenue lors de la récupération des catégories";
            });
            
            $scope.ready=true;
        }
    };
    $scope.updateArticle=function(){
        var updateArticle = articlesService.updateArticle($scope.newArticle);
        updateArticle.then(function (response) {
            if (response.data.success) {
                $timeout(function(){
                        $location.path('/articles/lists');
                },3000);
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.pagesError="Une erreur est survenue lors de la modification de l'article";
        });
        $scope.ready=true;
    };
    $scope.init();
}]);
app.factory('articlesService', ['$http', function($http) {
    return {
        getArticles: function() {
            return $http.get('./vendor/index.php/articlesController/getArticles');
        },
	addArticle: function(e) {
            return $http.post('./vendor/index.php/articlesController/addArticle',{article:e});
        },
	delArticle: function(e) {
            return $http.post('./vendor/index.php/articlesController/delArticle',{article:e});
        },
	updateArticle: function(e) {
            return $http.post('./vendor/index.php/articlesController/updateArticle',{article:e});
        },
	getArticleByID: function(e) {
            return $http.post('./vendor/index.php/articlesController/getArticleByID',{article:e});
        }
    };
}]);