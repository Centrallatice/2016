<?php
$app->get('/ajax/:action',  function ($action) use ($app,$db){
    require_once(BASE_PATH.'/vendor/controllers/ajaxController.php');
    $controller=new ajaxController($app,$db);
    if(method_exists('ajaxController',$action)):
        $controller->{$action}($app);
    else:
        echo json_encode(array("success"=>false,"message"=>"Une erreur interne est survenue veuillez nous en excuser"));
    endif;
})->via('GET','POST');

$app->get('/actualite/(:categorie)(/:slug)',  function ($cat=null,$slug=null) use ($app,$db,$twig){
    global $baseParams;
    $page='actualite';
	
    /**** Recupération des contenus communs aux diffèrentes pages ****/
    require_once(BASE_PATH.'vendor/controllers/globalController.php');
    $globalController = new globalController($db);
    $gCFlashs = $globalController->getFlashsInfo(true);
    if($gCFlashs['success'] && !is_null($gCFlashs['donnees'])):
        $baseParams=array_merge($baseParams,array("flashs"=>$gCFlashs['donnees']));
    endif;
   
    if(file_exists(BASE_PATH.'/vendor/controllers/actualiteController.php')):
        require_once(BASE_PATH.'/vendor/controllers/actualiteController.php');
        $actualite=new actualiteController($app,$db);
        if(method_exists($actualite,'initAction')):
            $pageData=$actualite->initAction($app,$slug);
			
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

$app->any('/',  function () use ($app,$db,$twig){
    
    global $baseParams;
    
    /**** Recupération des contenus communs aux diffèrentes pages ****/
    require_once(BASE_PATH.'vendor/controllers/globalController.php');
    $globalController = new globalController($db);
    $gCFlashs = $globalController->getFlashsInfo(true);
    if($gCFlashs['success'] && !is_null($gCFlashs['donnees'])):
        $baseParams=array_merge($baseParams,array("flashs"=>$gCFlashs['donnees']));
    endif;
    
    if(file_exists(BASE_PATH.'/vendor/controllers/indexController.php')):
        require_once(BASE_PATH.'/vendor/controllers/indexController.php');        
        
        $controller=new indexController($app,$db);
        if(method_exists($controller,'initAction')):
            $pageData=$controller->initAction($app);
            if($pageData['success'] && isset($pageData['donnees'])):
                $baseParams=array_merge($baseParams,$pageData['donnees']);
            endif;
            echo $twig->render('index.twig', $baseParams);
        else:
            require_once(BASE_PATH.'/vendor/controllers/notFoundController.php');
            $notFoundController=new notFoundController($app,$db);
            $pageData=$notFoundController->initAction($app);
            if($pageData['success'] && isset($pageData['donnees'])):
                $baseParams=array_merge($baseParams,$pageData['donnees']);
            endif;
            echo $twig->render('404.twig', $baseParams);
        endif;
    else:
        
        require_once(BASE_PATH.'/vendor/controllers/notFoundController.php');
        $notFoundController=new notFoundController($app,$db);
        $pageData=$notFoundController->initAction($app);
        if($pageData['success'] && isset($pageData['donnees'])):
            $baseParams=array_merge($baseParams,$pageData['donnees']);
        endif;
        echo $twig->render('404.twig', $baseParams);
    endif;
    
})->via('GET','POST');   

$app->any('/index.html',  function () use ($app,$db,$twig){
    
    global $baseParams;
    
    /**** Recupération des contenus communs aux diffèrentes pages ****/
    require_once(BASE_PATH.'vendor/controllers/globalController.php');
    $globalController = new globalController($db);
    $gCFlashs = $globalController->getFlashsInfo(true);
    if($gCFlashs['success'] && !is_null($gCFlashs['donnees'])):
        $baseParams=array_merge($baseParams,array("flashs"=>$gCFlashs['donnees']));
    endif;
    
    if(file_exists(BASE_PATH.'/vendor/controllers/indexController.php')):
        require_once(BASE_PATH.'/vendor/controllers/indexController.php');        
        
        $controller=new indexController($app,$db);
        if(method_exists($controller,'initAction')):
            $pageData=$controller->initAction($app);
            if($pageData['success'] && isset($pageData['donnees'])):
                $baseParams=array_merge($baseParams,$pageData['donnees']);
            endif;
            echo $twig->render('index.twig', $baseParams);
        else:
            require_once(BASE_PATH.'/vendor/controllers/notFoundController.php');
            $notFoundController=new notFoundController($app,$db);
            $pageData=$notFoundController->initAction($app);
            if($pageData['success'] && isset($pageData['donnees'])):
                $baseParams=array_merge($baseParams,$pageData['donnees']);
            endif;
            echo $twig->render('404.twig', $baseParams);
        endif;
    else:
        
        require_once(BASE_PATH.'/vendor/controllers/notFoundController.php');
        $notFoundController=new notFoundController($app,$db);
        $pageData=$notFoundController->initAction($app);
        if($pageData['success'] && isset($pageData['donnees'])):
            $baseParams=array_merge($baseParams,$pageData['donnees']);
        endif;
        echo $twig->render('404.twig', $baseParams);
    endif;
    
})->via('GET','POST');   

$app->get('/(:page)(/:id)',  function ($page='index',$id=null) use ($app,$db,$twig){
    global $baseParams;
    $page=str_replace('.html', '', $page);
    
    /**** Recupération des contenus communs aux diffèrentes pages ****/
    require_once(BASE_PATH.'vendor/controllers/globalController.php');
    $globalController = new globalController($db);
    $dataPage=$globalController->getDataPage($page);
    if(!$dataPage['success'] || !isset($dataPage['donnees']['idPage'])):
        require_once(BASE_PATH.'/vendor/controllers/notFoundController.php');
        $notFoundController=new notFoundController($app,$db);
        $pageData=$notFoundController->initAction($app);
        if($pageData['success'] && isset($pageData['donnees'])):
            $baseParams=array_merge($baseParams,$pageData['donnees']);
        endif;
        echo $twig->render('404.twig', $baseParams);
    else:
        switch($dataPage['donnees']['type']):
            // Page d'affichage d'un ou plusieurs articles 
            case 2:
                require_once(BASE_PATH.'vendor/controllers/contentController.php');
                $contentController = new contentController($db,$dataPage['donnees']['idPage']);
                $pageData=$contentController->initAction($app);
                if($pageData['success'] && isset($pageData['donnees'])):
                    $baseParams=array_merge($baseParams,$pageData['donnees']);
                endif;
                echo $twig->render('contentPage.twig', $baseParams);
                break;
            // Page d'affichage des actualités 
            case 3:
                require_once(BASE_PATH.'vendor/controllers/actualitesController.php');
                $actualitesController = new actualitesController($db,$dataPage['donnees']['idPage']);
                $pageData=$actualitesController->initAction($app);
                if($pageData['success'] && isset($pageData['donnees'])):
                    $baseParams=array_merge($baseParams,$pageData['donnees']);
                endif;
                echo $twig->render('actualites.twig', $baseParams);
                break;
            // Page de formulaire de contact
            case 4:
                
                break;
            default:
                require_once(BASE_PATH.'/vendor/controllers/notFoundController.php');
                $notFoundController=new notFoundController($app,$db);
                $pageData=$notFoundController->initAction($app);
                if($pageData['success'] && isset($pageData['donnees'])):
                    $baseParams=array_merge($baseParams,$pageData['donnees']);
                endif;
                echo $twig->render('404.twig', $baseParams);
                break;
        endswitch;
    endif;
    
})->via('GET','POST');   
?>