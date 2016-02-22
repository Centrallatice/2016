<?php
use \Models\Admin\Utilisateur as Utilisateur;

class loginController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function Connexion(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $Connexion = new Utilisateur($this->_db);
            $Connexion->setLogin($body->user->email);
            $Connexion->setMdp($body->user->password);
            $result = $Connexion->verifieLogin();
            
            if($result['success']):
                $_SESSION [ 'DataUser' ] ['uid']=uniqid('MBuzancais');
                $_SESSION [ 'DataUser' ] ['username']=$body->user->email;
                $_SESSION [ 'DataUser' ] ['email']=$body->user->email;
                $_SESSION [ 'DataUser' ] ['id']=$result['donnees']['id'];
                
                echo json_encode(array("success"=>true,"donnees"=>array(
                    "uid"=>$_SESSION [ 'DataUser' ] ['uid'],
                    "username"=>$_SESSION [ 'DataUser' ] ['username'],
                    "email"=>$_SESSION [ 'DataUser' ] ['email'],
                    "id"=>$_SESSION [ 'DataUser' ] ['id']
                ),"message"=>null));
            else:
                echo json_encode($result);
            endif; 
                    
	}
	public function call()
        {
            $this->next->call();
        }
}

?>