<?php
use Models\Client\Agenda;

class contactController extends \Slim\Middleware{
    
    private $_db;
	
    function __construct($db){
        $this->_db=$db;
    }
    
    public function initAction($app){
        $name = $app->request->post('contact-name');
        $mail = $app->request->post('contact-mail');
        $sujet = $app->request->post('contact-sujet');
        $message = $app->request->post('contact-message');
        
    }
   
    public function call(){
        $this->next->call();
    }
}
