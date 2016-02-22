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
   
   /****** Recupération des diffèrents modules *******/
    require_once(BASE_PATH.'vendor/controllers/modulesController.php');
    $modulesController = new modulesController($db);
    $getModules = $modulesController->getModulesFront(($page=='index')?'accueil':$page);
    
    if(isset($getModules['donnees']) && count($getModules)>0):
        $baseParams=array_merge($baseParams,array("modules"=>$getModules['donnees']));
    endif;
});
$app->hook('slim.after.dispatch', function() use ($app,$db) { 
    global $baseParams;
    $params = $app->router()->getCurrentRoute()->getParams();
    $page = (isset($params['page'])) ? $params['page'] : 'index';
    $page=  str_replace('.html', '', $page);
    
    require_once(BASE_PATH.'/vendor/controllers/globalController.php');
    $globalController = new globalController($db);
    $globalController->addStats(($page=='index') ? 'accueil' : $page,isset($baseParams['idPage']) ? $baseParams['idPage'] : 0);
    
});

$app->get('/ajax/:action',  function ($action) use ($app,$db){
    require_once(BASE_PATH.'/vendor/controllers/ajaxController.php');
    $controller=new ajaxController($app,$db);
    if(method_exists('ajaxController',$action)):
        $controller->{$action}($app);
    else:
        echo json_encode(array("success"=>false,"message"=>"Une erreur interne est survenue veuillez nous en excuser"));
    endif;
})->via('GET','POST');

$app->get('/telecharger/:pdf',  function ($pdf) use ($app,$db){
    require_once(BASE_PATH.'/vendor/controllers/downloadController.php');
    $controller=new downloadController($app,$db);
    $res = $controller->getPdf($pdf);
})->via('GET','POST');

$app->get('/(:page)(/:id)',  function ($page='index',$id=null) use ($app,$db,$twig){
    global $baseParams;
    $page=str_replace('.html', '', $page);
    
    /**** Recupération des contenus communs aux diffèrentes pages ****/
    require_once(BASE_PATH.'vendor/controllers/globalController.php');
    $globalController = new globalController($db);
    $gCFlashs = $globalController->getFlashsInfo(true);
    if($gCFlashs['success'] && !is_null($gCFlashs['donnees'])):
        $baseParams=array_merge($baseParams,array("flashs"=>$gCFlashs['donnees']));
    endif;
   
    
    if(file_exists(BASE_PATH.'/vendor/controllers/'.str_replace('.','/',$page).'Controller.php')):
        require_once(BASE_PATH.'/vendor/controllers/'.str_replace('.','/',$page).'Controller.php');
        $class=$page.'Controller';
        $controller=new $class($app,$db);
        if(method_exists($controller,'initAction')):
            $pageData=(!is_null($id)) ? $controller->initAction($app,$id) : $controller->initAction($app);
            if($pageData['success'] && isset($pageData['donnees'])):
                $baseParams=array_merge($baseParams,$pageData['donnees']);
            endif;
            echo $twig->render($page.'.twig', $baseParams);
        else:
            echo $twig->render('404.twig', $baseParams);
        endif;
    else:
        echo $twig->render('404.twig', $baseParams);
    endif;
    
})->via('GET','POST');   


$app->run();
?>