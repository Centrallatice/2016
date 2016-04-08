var app = angular.module('buzancais');

app.controller('menuLinkAddController', ['$scope','menuLinksService','$location','menuService','$route','pagesService','$q','notifications', function($scope,menuLinksService,$location,menuService,$route,pagesService,$q,notifications) {
    $scope.ready=false;
    $scope.newMenuLink=null;
    $scope.idMenu=$route.current.params.idMenu;
    
    $scope.init=function(){
        if(!$route.current.params.idMenu || $route.current.params.idMenu===null || $route.current.params.idMenu===""){
            notifications.showError({message:"Le menu n'a pas été trouvé"});
            $location.path("/menus/lists");
        }
        else{
            $q.all([
                menuService.getmenuByID($route.current.params.idMenu),
                pagesService.getPages(),
                menuLinksService.getmenuLinks($route.current.params.idMenu)])
            .then(function (res) {
                if(res[0].data.success && res[1].data.success && res[2].data.success){
                    $scope.nomMenu=res[0].data.donnees.nom;
                    $scope.listePages=res[1].data.donnees;
                    $scope.listeMenuLinks=res[2].data.donnees;
                    if($scope.listeMenuLinks) $scope.listeMenuLinks.unshift({id:'-1',nom:'Aucun'});
                    $scope.ready=true;
                }
                else{
                    notifications.showError({message:"Une erreur est survenue lors de la récupération des données"});
                    $scope.ready=true;
                }
            });
            
        }
    };
    $scope.addMenuLink=function(e){
        var addLink = menuLinksService.addmenuLinks(e,$route.current.params.idMenu);
        addLink.then(function (response) {
            if (response.data.success) {
                $location.path('/menus/linkLists/'+$route.current.params.idMenu);
				notifications.showSuccess({
                    message:'Le lien a bien été créé !',
                    hideDelay: 3000,
                    hide: true,
                    acceptHTML:true
                });
            }
            else{
                notifications.showError({message:"Une erreur est survenue lors de la création du lien"});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la création du lien"});
        });
    };
    $scope.init();
}]);
app.controller('menuLinksListsController', ['$scope','menuLinksService','$location','menuService','$route','notifications', function($scope,menuLinksService,$location,menuService,$route,notifications) {
    $scope.ready=false;
    $scope.successLienMenu=null;
    $scope.errorLienMenu=null;
    $scope.idMenu=$route.current.params.idMenu;
    
    $scope.range = function(min, max, step){
        step = step || 1;
        var input = [];
        for (var i = min; i <= max; i += step) input.push(i);
        return input;
      };
    
    $scope.init=function(){
        if(!$route.current.params.idMenu || $route.current.params.idMenu===null || $route.current.params.idMenu===""){
            notifications.showError({message:"Le menu n'a pas été trouvé"});
            $location.path("/menus/lists");
        }
        else{
            var getmenuByID = menuService.getmenuByID($route.current.params.idMenu);
            getmenuByID.then(function (response) {
                if (response.data.success) {
                    $scope.nomMenu=response.data.donnees.nom;
                }
                else{
                    notifications.showError({message:"Une erreur est survenue lors de la récupération  du menu"});
                }
            }, function () {
                notifications.showError({message:"Une erreur est survenue lors de la récupération  du menu"});
            });    
        
            var getMenuLinks = menuLinksService.getmenuLinks($route.current.params.idMenu);
            getMenuLinks.then(function (response) {
                if (response.data.success) {
                    $scope.listeMenus = response.data.donnees;
                    $scope.ready=true;
                    
                }
                else{
                    notifications.showError({message:response.data.message});
                }
            }, function () {
                notifications.showError({message:"Une erreur est survenue lors de la récupération  du menu"});
            });
        }
    }
    $scope.deleteMenu=function(id){
        if(!confirm("Êtes-vous sûr de vouloir supprimer ce lien ?")) return false;
        var delMenuLink = menuLinksService.delmenuLinks(id,$route.current.params.idMenu);
        delMenuLink.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:'Le lien a bien été supprimé !',
                    hideDelay: 3000,
                    hide: true,
                    acceptHTML:true
                });
                var index=0;
                for(var e in $scope.listeMenus){
                    if($scope.listeMenus[e].id==id){
                        $scope.listeMenus.splice(index,1);
                    }
                    index++;
                }
            }
            else{
                notifications.showError({message:"Une erreur est survenue lors de la suppression du lien de menu"});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la suppression du lien de menu"});
        });
    }
    $scope.init();
}]);
app.controller('menuLinkUpdateController', ['$scope','menuLinksService','$location','$q','menuService','$route','pagesService','notifications', function($scope,menuLinksService,$location,$q,menuService,$route,pagesService,notifications) {
    $scope.errorAjoutLienMenu=null;
    $scope.successAjoutLienMenu=null;
    $scope.ready=false;
    $scope.init=function(){
        if(!$route.current.params.idMenu || $route.current.params.idMenu===null || $route.current.params.idMenu===""){
            notifications.showError({message:"Le Menu n'a pas été trouvé"});
            $location.path("/menus/linkLists/"+$route.current.params.idMenu);
        }
        else if(!$route.current.params.idLinkMenu || $route.current.params.idLinkMenu===null || $route.current.params.idLinkMenu===""){
            notifications.showError({message:"Le lien de menu n'a pas été trouvé"});
            $location.path("/menus/linkLists/"+$route.current.params.idMenu);
        }
        else{
            $scope.idMenu = $route.current.params.idMenu;
            $scope.idLinkMenu = $route.current.params.idLinkMenu;
            $q.all([
                menuLinksService.getmenuLinks($route.current.params.idMenu),
                menuLinksService.getmenuLink($route.current.params.idLinkMenu),
                pagesService.getPages()])
            .then(function (res) {
                if(res[0].data.success && res[1].data.success){
                    $scope.newMenu=res[1].data.donnees;
                    $scope.listeMenuLinks = res[0].data.donnees;
                    $scope.listePages=res[2].data.donnees;
                    $scope.listeMenuLinks.unshift({id:'-1',nom:'Aucun'});
                    
                    for(var e in $scope.listePages){
                        if($scope.listePages[e].id==$scope.newMenu.idPage){
                            $scope.newMenu.page=$scope.listePages[e];
                        }
                    }
                    
                    $scope.ready=true;
                }
                else{
                    notifications.showError({message:"Une erreur est survenue lors de la récupération des données"});
                    $scope.ready=true;
                }
            });
            
        }
    };
    $scope.updateMenu=function(lien){
        $scope.successAjoutLienMenu=null;
        $scope.errorAjoutLienMenu=null;
        var updateLink = menuLinksService.updatemenuLink(lien);
        updateLink.then(function (response) {
            if (response.data.success) {
                notifications.showSuccess({
                    message:'Le lien a bien été modifié !',
                    hideDelay: 3000,
                    hide: true,
                    acceptHTML:true
                });
                $location.path("/menus/linkLists/"+$route.current.params.idMenu);
            }
            else{
                notifications.showError({message:response.data.message});
            }
        }, function () {
            notifications.showError({message:"Une erreur est survenue lors de la suppression du lien de menu"});
        });
    };
    $scope.init();
}]);
app.factory('menuLinksService', ['$http', function($http) {
    return {
        getmenuLinks: function(e) {
            return $http.post('./vendor/index.php/menuLinksController/getMenuLinks',{menu:e,displayAdmin:true});
        },
        getmenuLink: function(e) {
            return $http.post('./vendor/index.php/menuLinksController/getMenuLink',{lien:e});
        },
        addmenuLinks: function(e,iParent) {
            return $http.post('./vendor/index.php/menuLinksController/addMenuLinks',{menuLinks:e,idMenuParent:iParent});
        },
        delmenuLinks: function(e,idMenu) {
            return $http.post('./vendor/index.php/menuLinksController/delMenuLinks',{menuLinks:e,idMenu:idMenu});
        },
        updatemenuLink: function(e) {
            return $http.post('./vendor/index.php/menuLinksController/updateMenuLink',{lien:e});
        },
        getmenuLinksByID: function(e) {
            return $http.post('./vendor/index.php/menuLinksController/getMenuLinksByID',{menuLinks:e});
        }
    };
}]);