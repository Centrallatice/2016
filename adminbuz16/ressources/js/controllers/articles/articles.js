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
    
    $scope.init();
}]);
app.controller('articlesAddController', ['$scope','articlesService','$location','categoriesService','pagesService', function($scope,articlesService,$location,categoriesService,pagesService) {
    $scope.ready=false;
    $scope.pagesSuccess=false;
    $scope.errorAjoutArticle=null;
    $scope.init = function(){
        var getCategories = categoriesService.getCategories();
        getCategories.then(function (response) {
            if (response.data.categories.success) {
                $scope.categoriesError=null;
                $scope.listeCategories = response.data.categories.donnees;
            }
            else{
                $scope.categoriesError = response.data.categories.message;
            }
        }, function () {
            $scope.categoriesError="Une erreur est survenue lors de la récupération des catégories";
        });
        var getPages = pagesService.getPages();
        getPages.then(function (response) {
            if (response.data.success) {
                $scope.pagesError=null;
                $scope.listePages = response.data.donnees;
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.pagesError="Une erreur est survenue lors de la récupération des pages";
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
                $scope.pagesError = null;
                $scope.pagesSuccess = true;
            }
            else{
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.pagesError="Une erreur est survenue lors de la création de l'article";
        });
        $scope.ready=true;
    }
    $scope.init();
}]);





app.controller('articlesEditController', ['$scope','articlesService','categoriesService','$location','$route','pagesService', function($scope,articlesService,categoriesService,$location,$route,pagesService) {
    $scope.ready=false;
    $scope.changed=false;
    $scope.pagesError=null;
    $scope.changeIcone=function(){
        if(!(confirm("Êtes-vous sûr de vouloir supprimer cette image ?"))) return false;
        $scope.newArticle.image=null;
        document.getElementById('image').value="";
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
//                for(var e in $scope.newArticle){
//                    $scope.newArticle[e]=null;
//                }
//                document.getElementById('image').value='';
                $scope.newArticle.image=response.data.donnees.nameimage;
                $scope.pagesError = null;
                $scope.pagesSuccess = true;
                $scope.changed=true;
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