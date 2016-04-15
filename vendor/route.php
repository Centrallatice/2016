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
 
$app->get('/recherche.html',  function () use ($app,$db,$twig){
    global $baseParams;
    
    if(file_exists(BASE_PATH.'/vendor/controllers/rechercheController.php')):
        require_once(BASE_PATH.'/vendor/controllers/rechercheController.php');
        $recherche=new rechercheController($db);
        if(method_exists($recherche,'initAction')):
            $pageData=$recherche->initAction($_POST['rechercheall']);
            if($pageData['success'] && isset($pageData['donnees'])):
                $baseParams=array_merge($baseParams,$pageData['donnees']);
            endif;
            $baseParams['searchAsked']=$_POST['rechercheall'];
            echo $twig->render('recherche.twig', $baseParams);
        else:
            echo $twig->render('404.twig', $baseParams);
        endif;
    else:
        echo $twig->render('404.twig', $baseParams);
    endif;
})->via('GET','POST');   

$app->get('/phototheque/(:param)(/:album)',  function ($param=null,$album=null) use ($app,$db,$twig){
    global $baseParams;
    
    if(file_exists(BASE_PATH.'/vendor/controllers/photothequeController.php')):
        require_once(BASE_PATH.'/vendor/controllers/photothequeController.php');
        
        $phototheque=new photothequeController($db,$param,$album);
        if(method_exists($phototheque,'initAction')):
            $pageData=$phototheque->initAction($app);
			
            if($pageData['success'] && isset($pageData['donnees'])):
                $baseParams=array_merge($baseParams,$pageData['donnees']);
            endif;
            $baseParams["catPhotos"]=$param;
            $baseParams["album"]=(is_null($album)) ? $pageData['donnees']['Album'] : $album;
            
            echo $twig->render('phototheque.twig', $baseParams);
        else:
            echo $twig->render('404.twig', $baseParams);
        endif;
    else:
        echo $twig->render('404.twig', $baseParams);
    endif;
})->via('GET','POST');   

$app->get('/videotheque.html',  function ($param=null) use ($app,$db,$twig){
    global $baseParams;
    if(file_exists(BASE_PATH.'/vendor/controllers/videothequeController.php')):
        require_once(BASE_PATH.'/vendor/controllers/videothequeController.php');
        $videotheque=new videothequeController($db,$param);
        if(method_exists($videotheque,'initAction')):
            $pageData=$videotheque->initAction($app);
			
            if($pageData['success'] && isset($pageData['donnees'])):
                $baseParams=array_merge($baseParams,$pageData['donnees']);
            endif;
            echo $twig->render('videotheque.twig', $baseParams);
        else:
            echo $twig->render('404.twig', $baseParams);
        endif;
    else:
        echo $twig->render('404.twig', $baseParams);
    endif;
})->via('GET','POST');   

$app->get('/(:page)(/:param)',  function ($page='index',$param=null) use ($app,$db,$twig){
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
        $baseParams['dataPage']=$dataPage['donnees'];
		
        switch($dataPage['donnees']['type']):
            // Page d'affichage d'un ou plusieurs articles 
            case 2:
                require_once(BASE_PATH.'vendor/controllers/contentController.php');
                $contentController = new contentController($db,$dataPage['donnees']['idPage']);
                $pageData=$contentController->initAction($app);
                if($pageData['success'] && isset($pageData['donnees'])):
                    $baseParams=array_merge($baseParams,$pageData['donnees']);
                endif;
                $theme = ($baseParams['themesRep']=='default') ? '' : '@'.$baseParams['themesRep'].'/';
		echo $twig->render($theme.'contentPage.twig', $baseParams);
                // echo $twig->render('contentPage.twig', $baseParams);
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
                require_once(BASE_PATH.'vendor/controllers/contactController.php');
                $contactController = new contactController($db);
                $pageData=$contactController->initAction($app);
                if($pageData['success'] && isset($pageData['donnees'])):
                    $baseParams=array_merge($baseParams,$pageData['donnees']);
                endif;
                $theme = ($baseParams['themesRep']=='default') ? '' : '@'.$baseParams['themesRep'].'/';
		echo $twig->render($theme.'contact.twig', $baseParams);
		break;
            // Page de l'agenda
            case 5:
                
                require_once(BASE_PATH.'/vendor/controllers/agendaController.php'); 
                $controller=new agendaController($db);
                $pageData=$controller->initAction($app);
                if($pageData['success'] && isset($pageData['donnees'])):
                    $baseParams["moisAgendaEnCours"]=$app->request->post('choixMois');
                    $baseParams["typeAgendaEnCours"]=$app->request->post('choixTypeAgenda');
                    array_push($baseParams,array("typeAgendaEnCours"=>$app->request->post('choixTypeAgenda')));
                    
                    $baseParams=array_merge($baseParams,$pageData['donnees']);
                endif;
                
                echo $twig->render('agenda.twig', $baseParams);
               
                break;
			// Page d'affichage des catégories d'association
            case 6:
                
                require_once(BASE_PATH.'/vendor/controllers/catAssoController.php'); 
                $controller=new catAssoController($db,$dataPage['donnees']['IdCatAsso'],$dataPage['donnees']['idPage']);
                $pageData=$controller->initAction($app);
                if($pageData['success'] && isset($pageData['donnees'])):
                    $baseParams=array_merge($baseParams,$pageData['donnees']);
                endif;
					$theme = ($baseParams['themesRep']=='default') ? '' : '@'.$baseParams['themesRep'].'/';
					echo $twig->render($theme.'categorieAssociations.twig', $baseParams);               
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