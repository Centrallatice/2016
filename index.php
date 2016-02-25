<?php
session_start();
date_default_timezone_set('Europe/Paris');
require_once './adminbuz16/vendor/autoload.php';
require_once './vendor/autoload.php';

require BASE_PATH.'/adminbuz16/vendor/Slim/Slim.php';

    
    
/***** TWIG LOADING ******/
$loader = new Twig_Loader_Filesystem(BASE_PATH.'/themes/default');
$twig = new Twig_Environment($loader, array(
//    'cache' => BASE_PATH.'/cache',
    'debug' => true,
    'cache' => false
));
$twig->addExtension(new Twig_Extension_Debug());
$twig->addExtension(new Twig_Extensions_Extension_Text());

/***** SLIM LOADING ******/
\Slim\Slim::registerAutoloader();
use Slim\Slim as Slim;

$app = new Slim(array(
    'mode' => 'development'
));
$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'log.enable' => true,
        'debug' => false
    ));
});
$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true
    ));
});

$baseParams = array(
    'BASECSS' => CSS_CLIENT_URL,
    'BASETHEME' => THEME_URL,
    'BASETHEMEPATH' => THEME_PATH,
    'BASEJS' => JS_CLIENT_URL,
    'BASEIMG'=>IMG_THEME_URL,
    'BASEURL'=>BASE_URL
);

$app->hook('slim.before.dispatch', function() use ($app,$db) { 
   global $baseParams;
   $params = $app->router()->getCurrentRoute()->getParams();
   $page = (isset($params['page'])) ? $params['page'] : 'index';
   $page=  str_replace('.html', '', $page);
   
   /**** Recupération des balises méta ****/
   require_once(BASE_PATH.'/vendor/controllers/globalController.php');
   $globalController = new globalController($db);
   $gCMeta = $globalController->getMetaDatas( ($page=='index') ? 'accueil' : $page);
   if($gCMeta['success'] && !is_null($gCMeta['donnees'])):
        $baseParams=array_merge($baseParams,$gCMeta['donnees']);
   endif;
   
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
   if(isset($getModules['donnees']) && count($getModules)>0):
       $baseParams=array_merge($baseParams,array("modules"=>$getModules['donnees']));
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
