var app = angular.module('buzancais');
app.controller('blocDownloadController', ['$rootScope','$scope','$location','blocDownloadService','pagesService','modulesService','$sce', function($rootScope,$scope,$location,blocDownloadService,pagesService,modulesService,$sce) {
    $scope.collapseAddblocDownload=true;
    $scope.collapseAddBlocs=true;
    $scope.errorAddBlocDownload=null;
    $scope.blocError=null;
    $scope.pageError=null;
    $scope.blocAddError=null;
    $scope.envoiDocEnCours=false;
    
    $scope.annuleModification=function(){
        $scope.controleChamp={
            Nom:false,
            Page:false,
            Position:false,
            toChange:false
        };
        $scope.newblocDownload={};
    }
    $scope.documentsBlocDownload=function(D){
	$scope.annuleModification();
        $scope.collapseAddBlocs=false;
        $scope.collapseAddblocDownload=true;
        $scope.documentBloc = D;
    };
    $scope.getHTMLContent=function(content){
        return $sce.trustAsHtml(content);
    };
    
    $scope.deleteDocumentFromBloc=function(doc){
        if(!confirm("Êtes-vous sur de vouloir supprimer ce document ?")) return false;
        else{
            var delDoc = blocDownloadService.delDoc(doc);
            delDoc.then(function (response) {
                if (response.data.success) {
                    var index=0;
                    for(var e in $scope.documentBloc.documents){
                        if($scope.documentBloc.documents[e].id==doc.id){
                            $scope.documentBloc.documents.splice(index,1);
                        }
                        index++;
                    }
                }
                else{
                    $scope.blocError = response.data.message;
                }
            }, function () {
                $scope.Error = true;
                $scope.Message="Une erreur est survenue lors de la suppression";
            });
        }
    }
    $scope.myProgress=function(total,loaded)    {
        var mo = 1*1024*1024;
        if(total>mo){
            $scope.blocAddError = "L'image sélectionnée est trop important (maximum 1mo)";
//            $scope.document.fichier=null;
            return false;
        }
        else $scope.blocAddError =null;
    }    
    $scope.myProgressDoc=function(total,loaded)    {
        var mo = 4*1024*1024;
        if(total>mo){
            $scope.blocAddError ="Le document sélectionné est trop important (maximum 4mo)";
            return false;
        }
        else $scope.blocAddError =null;
    }    
    $scope.ValideAddDocument=function(doc){
        $scope.blocAddError = null;
        
        $scope.envoiDocEnCours=true;
        
        var addDocBloc = blocDownloadService.addDocBloc($scope.documentBloc,doc);
        addDocBloc.then(function (response) {
            if (response.data.success) {
                $scope.envoiDocEnCours=false;
                doc.id=response.data.donnees;
                doc.Contenu=doc.contenu;
                doc.image=response.data.filename;
                doc.pdf=response.data.pdf;
                doc.titre=response.data.titre;
                doc.sstitre=response.data.sstitre;
                doc.intitule=response.data.intitule;
                if(!$scope.documentBloc.documents){
                    $scope.documentBloc.documents=new Array();
                }
                $scope.documentBloc.documents.push(doc);
                document.getElementById('iconeimage').value="";
                document.getElementById('iconepdf').value="";
                document.getElementById('docmentTitre').value="";
                document.getElementById('docmentssTitre').value="";
                document.getElementById('intitule').value="";
            }
            else{
                $scope.blocAddError = response.data.message;
                $scope.envoiDocEnCours=false;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des blocs existants";
        });
    }
    $scope.init = function(){
        var getPages = pagesService.getPages();
        getPages.then(function (response) {
            if (response.data.success) {
                $scope.listePages = response.data.donnees;
            }
            else{
                $scope.blocError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des pages";
        });
        var getBlocs = modulesService.getAllByType('blocdownload');
        getBlocs.then(function (response) {
            if (response.data.success) {
                $scope.listeModulesBloc = response.data.donnees;
            }
            else{
                $scope.blocError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des blocs de téléchargements existants";
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
    $scope.deleteBlocDownload = function(m){
        if(!confirm("Êtes vous sûr de vouloir supprimer ce module ?")) return false;
        var dModule = modulesService.deleteModule(m);
        dModule.then(function (response) {
            if (response.data.success) {
                var index=0;
                for(var e in $scope.listeModulesBloc){
                    if($scope.listeModulesBloc[e].id==m.id){
                        $scope.listeModulesBloc.splice(index,1);
                    }
                    index++;
                }
            }
            else{
                $scope.blocError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des pages";
        });
        var getBlocs = modulesService.getAllByType('blocdownload');
        getBlocs.then(function (response) {
            if (response.data.success) {
                $scope.listeModulesBloc = response.data.donnees;
            }
            else{
                $scope.blocError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des blocs de téléchargements existants";
        });
    };
    $scope.addblocDownload = function(module){
        
        if(typeof module == "undefined"){
            for(var e in $scope.controleChamp){
                $scope.controleChamp[e]=true;
            }	
            return false;
        }
        
        if(!module.nom) $scope.controleChamp.Nom=true;
        else $scope.controleChamp.Nom=false;

        if(!module.idPage && !module.idCarroussel) $scope.controleChamp.Page=true;
        else $scope.controleChamp.Page=false;
        
        if(!module.position) $scope.controleChamp.Position=true; 
        else $scope.controleChamp.Position=false;
        
        for(var e in $scope.controleChamp){
            if($scope.controleChamp[e]) return false;
        }
       
        
        var mService = modulesService.addModule(module,'blocdownload');
        mService.then(function (response) {
            if (response.data.success) {
                module.type='blocdownload';
                module.id=response.data.donnees;
                module.NomPage = (module.idPage!=null) ? module.idPage.Nom : module.idCarroussel.nom;
                module.blocDownload = {id:null,Nom:null,files:{},titre:null,intitule:null,sstitre:null,idCarroussel:null};
                
                $scope.listeModulesBloc.push(module);
                $scope.annuleModification();
            }
            else{
                $scope.blocError = response.data.message;
            }
        }, function () {
            $scope.Error = true;
            $scope.Message="Une erreur est survenue lors de la récupération des pages";
        });
    };
    $scope.annuleModification();
    $scope.init();
}]);


app.factory('blocDownloadService', ['$http', function($http) {
    return {
        addDocBloc: function(d,i) {
            return $http.post('./vendor/index.php/blocdownloadController/addDocBloc',{doc:i,bloc:d});
        },
        delDoc: function(i) {
            return $http.post('./vendor/index.php/blocdownloadController/delDoc',{doc:i});
        }
    };
}]);