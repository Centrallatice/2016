<?php
session_start();
date_default_timezone_set('Europe/Paris');
require_once('autoload.php');
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
use Slim\Slim as Slim;

$app = new Slim(array(
    'mode' => 'production'
));

$app->post('/photothequeController/addPicture',  function () use ($app,$db){
    
    if(!file_exists('controllers/photothequeController.php')) die("Action non reconnu");
    require_once('controllers/photothequeController.php');
    $photoTheque=new photothequeController($app,$db);
    $photoTheque->addPicture($_POST,$_FILES);
	
})->via('POST');


$app->post('/:class/:function', function ($class,$function) use ($app,$db){
    if(!file_exists('controllers/'.str_replace('.','/',$class).'.php')) die("Action non reconnu");
    require_once('controllers/'.str_replace('.','/',$class).'.php');
    $controller=new $class($app,$db);
    if(method_exists($controller,$function)) $controller->{$function}($app);
    
})->via('GET','POST','PUT','DELETE','OPTIONS');


/****** Gestion des sessions ********/
$app->get('/checkSession', function () {
   
   if( isset($_SESSION [ 'DataUser' ] ['uid']) && !is_null($_SESSION [ 'DataUser' ] ['username'])):
        echo json_encode(array("success"=>true,"donnees"=>array(
            "uid"=>$_SESSION [ 'DataUser' ] ['uid'],
            "username"=>$_SESSION [ 'DataUser' ] ['username'],
            "email"=>$_SESSION [ 'DataUser' ] ['email'],
            "id"=>$_SESSION [ 'DataUser' ] ['id']
        ),"message"=>null));
   else:
       echo json_encode(array("success"=>false,"donnees"=>null,"message"=>null));
   endif; 
})->via('GET');

/***** destruction de la session *******/
$app->post('/destroySession', function () {
   unset($_SESSION);
   $_SESSION = array();
   echo json_encode(array("success"=>session_destroy(),"donnees"=>null,"message"=>null));
})->via('POST');    

/*
 * FIN DU ROUTAGE
 */
$app->run();
?>