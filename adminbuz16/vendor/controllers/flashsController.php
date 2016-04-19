<?php
use \Models\Admin\Flashs;

class flashsController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getAll(){
            $Flashs = new Flashs($this->_db);
            $result = $Flashs->getAll();
            echo json_encode($result);
	}
	function getUsers(){
            $Flashs = new Flashs($this->_db);
            $result = $Flashs->getSubscribers();
            echo json_encode($result);
	}
        function addFlash(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $p = new Flashs($this->_db);
            
            $p->setTitre($body->flash->titre);
            $p->setResume($body->flash->resume);
            $p->setContenu($body->flash->contenu);
            
            
            if(isset($body->flash->toChange) && $body->flash->toChange===true):
                $p->setId($body->flash->id);
                $result = $p->updateFlash();
            else:
                $result = $p->addFlash();
//                $this->sendMails($p);
            endif;
            
            echo json_encode($result);
	}
        
        function sendMails($p){
            require_once BASE_PATH.'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
            $subs=$p->getSubscribers();
            if($subs['success'] && count($subs['donnees'])>0):
                $transport = Swift_SmtpTransport::newInstance('smtp.orange.fr', 995,'tls')->setUsername('communication@buzancais.fr')->setPassword('Mairie36500!');
                $mailer = Swift_Mailer::newInstance($transport);
                $message = Swift_Message::newInstance()
                  ->setSubject('Information du site Ville de buzancais : '.$p->getTitre())
                  ->setFrom(array('buzancaisevenement@gmail.com' => 'Ville de buzancais'))
                  ->setTo($subs['donnees'])
                  ->setBody($p->getContenu());
                $numSent = $mailer->send($message);
                printf("Sent %d messages\n", $numSent);
            endif;
        }
        function deleteFlash(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $p = new Flashs($this->_db);
            $p->setId($body->flash->id);
            $result = $p->deleteFlash();
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>