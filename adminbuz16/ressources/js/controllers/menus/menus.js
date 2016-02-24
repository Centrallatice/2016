var app = angular.module('buzancais');
//ADD
app.controller('menuAddController', ['$scope','menuService','$location','pagesService', function($scope,menuService,$location,pagesService) {
    $scope.ready=false;
    $scope.successAjoutMenu=null;
    $scope.errorAjoutMenu=null;
    $scope.errorPage=true;
    $scope.listePages=new Array();
    $scope.isAllPage=false;
    $scope.nouveauMenu={
            nom:"",
            idPage:{},
            position:""
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
            $scope.isAllPage=$scope.nouveauMenu.idPage[0];
            if($scope.nouveauMenu.idPage[0]){
                $scope.nouveauMenu.idPage={0:true};
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
                $scope.pagesError = response.data.message;
            }
        }, function () {
            $scope.pagesError="Une erreur est survenue lors de la récupération des pages";
        });
    };
    
    $scope.addMenu=function(){
	
        var errPage = true;
        for(var e in $scope.nouveauMenu.idPage){
            if($scope.nouveauMenu.idPage[e]) errPage=false;
        }
        $scope.errorPage=errPage;
        if(errPage) return false;
        
	var addMenu = menuService.addmenu($scope.nouveauMenu);
        addMenu.then(function (response) {
            if (response.data.success) {
                $scope.successAjoutMenu="Le menu a bien été créé !";
                $scope.errorAjoutMenu = null;
                document.getElementById('nom').value="";
                document.getElementById('position').value="";
            }
            else{
                $scope.errorAjoutMenu = response.data.message;
                $scope.successAjoutMenu = null;
            }
        }, function () {
            $scope.errorAjoutMenu="Une erreur est survenue lors de la création du menu";
                $scope.successAjoutMenu = null;
        });
    }
    $scope.init();
}]);

// LISTS
app.controller('menuListsController', ['$scope','menuService','$location','pagesService', function($scope,menuService,$location,pagesService) {
    $scope.ready=false;
    $scope.successLienMenu=null;
    $scope.errorLienMenu=null;
    
    $scope.init=function(){
        var getMenus = menuService.getmenus();
        getMenus.then(function (response) {
            if (response.data.success) {
                $scope.listeMenus = response.data.donnees;
                $scope.ready=true;
            }
            else{
                $scope.errorLienMenu = response.data.message;
            }
        }, function () {
            $scope.errorLienMenu="Une erreur est survenue lors de la récupération  du menu";
        });
    };
    $scope.deleteMenu=function(e){
        if(!confirm('Êtes-vous sûr de vouloir supprimer ce menu ? ')) return false;
        var delmenu = menuService.delmenu(e);
        delmenu.then(function (response) {
            if (response.data.success) {
                $scope.ready=false;
                $scope.init();
            }
            else{
                $scope.errorLienMenu = response.data.message;
            }
        }, function () {
            $scope.errorLienMenu="Une erreur est survenue lors de la suppression du menu";
        });
    };
    $scope.init();
}]);

//Update
app.controller('menuUpdateController', ['$scope','menuService','$location','pagesService','$route', function($scope,menuService,$location,pagesService,$route) {
    $scope.ready=false;
    $scope.successUpdateMenu=null;
    $scope.errorUpdateMenu=null;
    $scope.errorPage=true;
    $scope.listePages=new Array();
    $scope.nouveauMenu={
        nom:"",
        idPage:{},
        position:""
    };
    $scope.isAllPage=false;
    $scope.checkIsAllPage=function(id){
        if(id==0){
            $scope.isAllPage=$scope.nouveauMenu.idPage[0];
            if($scope.nouveauMenu.idPage[0]){
                $scope.nouveauMenu.idPage={0:true};
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
        lienmenu: null,
        motsclefs: null,
        titre: "Toutes les pages du site",
        type: "0",
        url: null  
    };
    $scope.init=function(){
        if(!$route.current.params.idMenu || $route.current.params.idMenu===null || $route.current.params.idMenu===""){
            alert("Le menu n'a pas été trouvé");
            $location.path("/menus/lists");
        }
        else{
            var getPages = pagesService.getPages();
            getPages.then(function (response) {
                if (response.data.success) {
                    for(var i=0;i<response.data.donnees.length;i++){
                        $scope.listePages[i+1]=response.data.donnees[i];
                    }
                    var getmenuByID = menuService.getmenuByID($route.current.params.idMenu);
                    getmenuByID.then(function (response) {
                        if (response.data.success) {
                            $scope.errorUpdateMenu=null;
                            $scope.successUpdateMenu=null;
                            $scope.nouveauMenu = response.data.donnees;
                            if($scope.nouveauMenu.idPage===true){
                                $scope.isAllPage=true;
                                $scope.nouveauMenu.idPage={0:true};
                            }
                            
                            
                            $scope.ready=true;
                        }
                        else{
                            $scope.errorUpdateMenu = response.data.message;
                        }
                    }, function () {
                        $scope.errorUpdateMenu="Une erreur est survenue lors de la récupération des pages";
                    });    
                }
                else{
                    $scope.errorUpdateMenu = response.data.message;
                }
            }, function () {
                $scope.errorUpdateMenu="Une erreur est survenue lors de la récupération des pages";
            });
        }
    };
    $scope.valideUpdateMenu=function(e){
        var errPage = true;
        for(var e in $scope.nouveauMenu.idPage){
            if($scope.nouveauMenu.idPage[e]) errPage=false;
        }
        $scope.errorPage=errPage;
        if(errPage) return false;
        
        var updatemenu = menuService.updatemenu($scope.nouveauMenu);
        updatemenu.then(function (response) {
            if (response.data.success) {
                $scope.errorUpdateMenu=null;
                $scope.successUpdateMenu="Le menu a bien été modifié";
            }
            else{
                $scope.errorUpdateMenu = response.data.message;
            }
        }, function () {
            $scope.errorUpdateMenu="Une erreur est survenue lors de la récupération des pages";
        });    
                    
    };
    $scope.init();
}]);


app.factory('menuService', ['$http', function($http) {
    return {
        getmenus: function() {
            return $http.get('./vendor/index.php/menusController/getMenus');
        },
        addmenu: function(e) {
            return $http.post('./vendor/index.php/menusController/addMenu',{menu:e});
        },
        delmenu: function(e) {
            return $http.post('./vendor/index.php/menusController/delMenu',{menu:e});
        },
        updatemenu: function(e) {
            return $http.post('./vendor/index.php/menusController/updateMenu',{menu:e});
        },
        getmenuByID: function(e) {
            return $http.post('./vendor/index.php/menusController/getMenuByID',{menu:e});
        }
    };
}]);