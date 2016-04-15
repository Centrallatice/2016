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
    .when('/trombinoscope/lists', {
      controller:'trombinoscopeController',
      templateUrl:'./layout/trombinoscope/lists.html'
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
    })
    .when('/menus/update/:idMenu', {
      controller:'menuUpdateController',
      templateUrl:'./layout/menus/update.html'
    })
    .when('/menus/add/', {
      controller:'menuAddController',
      templateUrl:'./layout/menus/add.html'
    })
    .when('/menus/lists', {
      controller:'menuListsController',
      templateUrl:'./layout/menus/lists.html'
    })
    .when('/menus/linkLists/:idMenu', {
      controller:'menuLinksListsController',
      templateUrl:'./layout/menus/linkLists.html'
    })
    .when('/menus/updatelink/:idMenu/:idLinkMenu', {
      controller:'menuLinkUpdateController',
      templateUrl:'./layout/menus/updateLink.html'
    })
    .when('/menus/addLink/:idMenu', {
      controller:'menuLinkAddController',
      templateUrl:'./layout/menus/addLink.html'
    })
    .when('/param/sociaux', {
      controller:'sociauxController',
      templateUrl:'./layout/params/sociaux.html'
    })
    .when('/param/coordonnees', {
      controller:'coordonneesController',
      templateUrl:'./layout/params/coordonnees.html'
    })
    .when('/photovideotheque/photo', {
      controller:'photothequeController',
      templateUrl:'./layout/photovideotheque/photos.html'
    })
    .when('/photovideotheque/videos', {
      controller:'videosthequeController',
      templateUrl:'./layout/photovideotheque/videos.html'
    })
    .when('/medias/documents', {
      controller:'mediasController',
      templateUrl:'./layout/medias/documents.html'
    })
    .when('/flashinfos', {
      controller:'flashController',
      templateUrl:'./layout/flashinfos/flashinfos.html'
    })
    .when('/listenl', {
      controller:'listenlController',
      templateUrl:'./layout/NewsletterUser/lists.html'
    })
    .when('/modules/add/diaporama', {
      controller:'diaporamaController',
      templateUrl:'./layout/modules/add/diaporamas.html'
    })
    .when('/modules/add/caroussel', {
      controller:'carousselController',
      templateUrl:'./layout/modules/add/caroussel.html'
    })
    .when('/modules/add/blocdownload', {
      controller:'blocDownloadController',
      templateUrl:'./layout/modules/add/blocdownload.html'    
    })
    .when('/modules/add/HTMLcontent', {
      controller:'htmlContentAddController',
      templateUrl:'./layout/modules/add/HTMLcontent.html'
    })
    .when('/modules/update/HTMLcontent/:idModule', {
      controller:'htmlContentUpdateController',
      templateUrl:'./layout/modules/update/HTMLcontent.html'
    })
    .when('/modules/lists/HTMLcontent', {
      controller:'htmlContentListsController',
      templateUrl:'./layout/modules/lists/HTMLcontent.html'
    })
    .when('/formcontact/lists', {
      controller:'formcontactController',
      templateUrl:'./layout/formcontact/lists.html'
    })
//    .when('/contact/service/add', {
//      controller:'contactAddServiceController',
//      templateUrl:'./layout/contact/service/add.html'
//    })
//    .when('/contact/service/lists', {
//      controller:'contactListsServiceController',
//      templateUrl:'./layout/contact/service/lists.html'
//    })
//    .when('/contact/service/update/:idService', {
//      controller:'contactUpdateServiceController',
//      templateUrl:'./layout/contact/service/update.html'
//    })
    .when('/association/categories/update/:idCategorie', {
      controller:'catAssoUpdateCatAssoController',
      templateUrl:'./layout/association/categories/update.html'
    })
    .when('/association/categories/lists', {
      controller:'catAssoListsCatAssoController',
      templateUrl:'./layout/association/categories/lists.html'
    })
    .when('/association/categories/add', {
      controller:'catAssoAddController',
      templateUrl:'./layout/association/categories/add.html'
    })
    .when('/association/entites/update/:idAsso', {
      controller:'assoUpdateAssoController',
      templateUrl:'./layout/association/entites/update.html'
    })
    .when('/association/entites/lists', {
      controller:'assoListsAssoController',
      templateUrl:'./layout/association/entites/lists.html'
    })
    .when('/association/entites/add', {
      controller:'assoAddController',
      templateUrl:'./layout/association/entites/add.html'
    })
    .otherwise({
      redirectTo:'/404',
      templateUrl:'./layout/404.html'
    });
});