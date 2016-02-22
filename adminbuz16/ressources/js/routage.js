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
    })
    .when('/param/coordonnees', {
      controller:'coordonneesController',
      templateUrl:'./layout/params/coordonnees.html'
    })  
    .when('/param/sociaux', {
      controller:'sociauxController',
      templateUrl:'./layout/params/sociaux.html'
    })  
    .when('/photovideotheque/photo', {
      controller:'photothequeController',
      templateUrl:'./layout/photovideotheque/photos.html'
    })  
    .when('/flashinfos', {
      controller:'flashController',
      templateUrl:'./layout/flashinfos/flashinfos.html'
    })  // Gestion des modules
    .when('/modules/add/diaporama', {
      controller:'diaporamaController',
      templateUrl:'./layout/modules/add/diaporamas.html'
    })  
    .when('/modules/add/blocdownload', {
      controller:'blocDownloadController',
      templateUrl:'./layout/modules/add/blocdownload.html'
    })  
    .otherwise({
      redirectTo:'/404',
      templateUrl:'./layout/404.html'
    });
});