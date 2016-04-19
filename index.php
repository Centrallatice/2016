<?php
session_start();
date_default_timezone_set('Europe/Paris');
require_once './adminbuz16/vendor/autoload.php';
require_once './vendor/autoload.php';

require BASE_PATH.'/adminbuz16/vendor/Slim/Slim.php';

    
    
/***** TWIG LOADING ******/
$loader = new Twig_Loader_Filesystem(BASE_PATH.'/themes/default','default');
    
$twig = new Twig_Environment($loader, array(
    // 'cache' => BASE_PATH.'/cache',
    'debug' => true,
   'cache' => false
));
$twig->addExtension(new Twig_Extension_Debug());
$twig->addExtension(new Twig_Extensions_Extension_Text());
$twig->addExtension(new Twig_Extensions_Extension_Perso());


/***** SLIM LOADING ******/
\Slim\Slim::registerAutoloader();
use Slim\Slim as Slim;

$app = new Slim(array(
    'mode' => 'development'
));
$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'log.enable' => true,
        'debug' => true
    ));
});
$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enable' => true,
        'debug' => true
    ));
});

$baseParams = array(
    'BASECSS' => CSS_CLIENT_URL,
    'BASEJS' => JS_CLIENT_URL,
    'BASEIMG'=>IMG_THEME_URL,
    'BASEURL'=>BASE_URL,
    'BASEPATH'=>BASE_PATH,
    'BASE_PATH_UPLOAD_URL'=>BASE_PATH_UPLOAD_URL,
    'REDIRECT_SCRIPT_URI'=>$_SERVER['REDIRECT_SCRIPT_URI']
);

$app->hook('slim.before.dispatch', function() use ($app,$db,$loader) { 
   global $baseParams;
   $params = $app->router()->getCurrentRoute()->getParams();
   $page = (isset($params['page'])) ? $params['page'] : 'index';
   $page=  str_replace('.html', '', $page);
   
   /**** Recupération des balises méta ****/
   require_once(BASE_PATH.'/vendor/controllers/globalController.php');
   $globalController = new globalController($db);
   $gCMeta = $globalController->getMetaDatas( ($page=='index') ? 'accueil' : $page);
   
   if($gCMeta['success'] && !is_null($gCMeta['donnees'])):
	$baseParams['BASETHEME']= THEME_URL.$gCMeta['donnees']['themesRep'];
	$baseParams['BASETHEMEPATH']= THEME_PATH.$gCMeta['donnees']['themesRep'];
	
        if(count($gCMeta['donnees'])==0):
            $gCMeta['donnees']=array(
                "NomPage"=> "Ville de Buzançais : site officiel",
                "titrePage"=>"Ville de Buzançais : site officiel",
                "descriptionPage"=>"Accéder au site officiel de la ville de Buzançais et découvrez ses infrastructures, ses services, son patrimoine et son actualité",
                "motsclefsPage"=> "buzançais,ville de 
                buzançais,mairie,buzancais, buzancays,36,indre,région centre, 
                présentation,information,actualités,services,découverte,tourisme,patrimoine,culture,évènement,pêche,étang,visiter,camping,hôtels,restaurants,entreprises,associations,conseilmunicipal,services
                 communaux,action sociale,loisirs,vie associative,vie 
                pratique,randonnée,séjours,hébergement" 
            );
        endif;
        $baseParams=array_merge($baseParams,$gCMeta['donnees']);
   endif;
   
   /*** Récupération des thèmes ******/
   $dataThemes = $globalController->getThemes();
   foreach($dataThemes as $k=>$t){
		if($dataThemes[$k]['rep']!='default'):
			$loader->prependPath(BASE_PATH.'/themes/'.$dataThemes[$k]['rep'],$dataThemes[$k]['nom']);
		endif;
   }
   /*** Récupération des menus de la page en cours ******/
   $gMenu = $globalController->getMenus( ($page=='index') ? 'accueil' : $page);

   if($gMenu['success'] && !is_null($gMenu['donnees'])):
        $baseParams=array_merge($baseParams,array("menus"=>$gMenu['donnees']));
   endif;
   
   /*** Récupération des categories globales ******/
   $gCategories = $globalController->getCategories();
   if($gCategories['success'] && !is_null($gCategories['donnees'])):
        $baseParams=array_merge($baseParams,array("categories"=>$gCategories['donnees']));
   endif;
   
   /*** Récupération des réseax sociaux ******/
   $gRS = $globalController->getSociaux();
   if($gRS['success'] && !is_null($gRS['donnees'])):
        $baseParams=array_merge($baseParams,array("sociaux"=>$gRS['donnees']));
   endif;
   
   /*** Récupération des coordonnées******/
   $gCoord = $globalController->getCoordonnees();
   if($gCoord['success'] && !is_null($gCoord['donnees'])):
        $baseParams=array_merge($baseParams,array("coordonnees"=>$gCoord['donnees']));
   endif;
   
   /****** Recupération des diffèrents modules *******/
   require_once(BASE_PATH.'vendor/controllers/modulesController.php');
   $modulesController = new modulesController($db);
    
   $getModules = ($page=='index') ? $modulesController->getModulesFront($page,true) : $modulesController->getModulesFront($page,false);
   
   $getModulesMultiple = $modulesController->getModulesMultiple($page);
   
   if(isset($getModules['donnees']) && count($getModules)>0):
        if(isset($getModulesMultiple['donnees']) && count($getModulesMultiple)>0):
           foreach($getModulesMultiple['donnees'] as $k=>$v):
                if(!isset($getModules['donnees'][$getModulesMultiple['donnees'][$k]['position']])) $getModules['donnees'][$getModulesMultiple['donnees'][$k]['position']]=array();
                array_push($getModules['donnees'][$getModulesMultiple['donnees'][$k]['position']],$getModulesMultiple['donnees'][$k]);
           endforeach;
        endif;
       $baseParams=array_merge($baseParams,array("modules"=>$getModules['donnees']));
   else:
       if(isset($getModulesMultiple['donnees']) && count($getModulesMultiple)>0):
           foreach($getModulesMultiple['donnees'] as $k=>$v):
                if(!isset($baseParams['modules'][$getModulesMultiple['donnees'][$k]['position']])) $baseParams['modules'][$getModulesMultiple['donnees'][$k]['position']]=array();
                array_push($baseParams['modules'][$getModulesMultiple['donnees'][$k]['position']],$getModulesMultiple['donnees'][$k]);
           endforeach;
        endif;
   endif;
   
   
    /**** Recupération des flashs infos ****/
    $gCFlashs = $globalController->getFlashsInfo(true);
    if($gCFlashs['success'] && !is_null($gCFlashs['donnees'])):
        $baseParams=array_merge($baseParams,array("flashs"=>$gCFlashs['donnees']));
    endif; 
   
});

require_once('./vendor/route.php');


$app->hook('slim.after.dispatch', function() use ($app,$db) { 
    global $baseParams;
    $params = $app->router()->getCurrentRoute()->getParams();
    $page = (isset($params['page'])) ? $params['page'] : 'index';
    $page=  str_replace('.html', '', $page);
    
    require_once(BASE_PATH.'/vendor/controllers/globalController.php');
    $globalController = new globalController($db);
    $globalController->addStats(($page=='index') ? 'accueil' : $page,isset($baseParams['idPage']) ? $baseParams['idPage'] : 0);
    
});

$app->run();
