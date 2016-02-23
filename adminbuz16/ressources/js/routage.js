var app = angular.module('buzancais');
app.config(function($routeProvider) {
  $routeProvider
    .when('/', {
      controller:'homeController',
      templateUrl:'./layout/home.html'
    })
    .when('/login', {
      controller:'loginController',
      templateUrl:'./layout/login.html'
    })
    .when('/articles/lists', {
      controller:'articlesListsController',
      templateUrl:'./layout/articles/lists.html'
    })
    .when('/articles/add', {
      controller:'articlesAddController',
      templateUrl:'./layout/articles/add.html'
    })
    .when('/articles/edit/:idArticle', {
      controller:'articlesEditController',
      templateUrl:'./layout/articles/update.html'
    })
    .when('/pages/lists', {
      controller:'pagesController',
      templateUrl:'./layout/pages/lists.html'
    })
    .when('/categories', {
      controller:'categoriesController',
      templateUrl:'./layout/categories/categories.html'
    })
    .when('/actualites/lists', {
      controller:'actualitesListsController',
      templateUrl:'./layout/actualites/lists.html'
    })
    .when('/actualites/add', {
      controller:'actualitesAddController',
      templateUrl:'./layout/actualites/add.html'
    })
    .when('/actualites/update/:idActu', {
      controller:'actualitesUpdateController',
      templateUrl:'./layout/actualites/update.html'
    })
    .when('/agenda/lists', {
      controller:'agendaListsController',
      templateUrl:'./layout/agenda/lists.html'
    })
    .when('/agenda/add', {
      controller:'agendaAddController',
      templateUrl:'./layout/agenda/add.html'
    })
    .when('/agenda/update/:idEvenement', {
      controller:'agendaUpdateController',
      templateUrl:'./layout/agenda/update.html'
    }).when('/menus/update/:idMenu', {
      controller:'menuUpdateController',
      templateUrl:'./layout/menus/update.html'
    }).when('/menus/add/', {
      controller:'menuAddController',
      templateUrl:'./layout/menus/add.html'
    }).when('/menus/lists', {
      controller:'menuListsController',
      templateUrl:'./layout/menus/lists.html'
    }).when('/menus/linkLists/:idMenu', {
      controller:'menuLinksListsController',
      templateUrl:'./layout/menus/linkLists.html'
    }).when('/menus/updatelink/:idMenu/:idLinkMenu', {
      controller:'menuLinkUpdateController',
      templateUrl:'./layout/menus/updateLink.html'
    }).when('/menus/addLink/:idMenu', {
      controller:'menuLinkAddController',
      templateUrl:'./layout/menus/addLink.html'
    }).when('/param/sociaux', {
      controller:'sociauxController',
      templateUrl:'./layout/params/sociaux.html'
    }).when('/photovideotheque/photo', {
      controller:'photothequeController',
      templateUrl:'./layout/photovideotheque/photos.html'
    }).when('/flashinfos', {
      controller:'flashController',
      templateUrl:'./layout/flashinfos/flashinfos.html'
    }).when('/modules/add/diaporama', {
      controller:'diaporamaController',
      templateUrl:'./layout/modules/add/diaporamas.html'
    }).when('/modules/add/blocdownload', {
      controller:'blocDownloadController',
      templateUrl:'./layout/modules/add/blocdownload.html'
    }).otherwise({
      redirectTo:'/404',
      templateUrl:'./layout/404.html'
    });
});