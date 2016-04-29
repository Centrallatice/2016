<?php
use Models\Client\Contact;

class contactController extends \Slim\Middleware{
    
    private $_db;
	
    function __construct($db){
        $this->_db=$db;
    }
    
    public function initAction($app){
        if(isset($_POST['nouvelleDemande'])):
            $name = $_POST['contact-nom'];
            $mail = $_POST['contact-email'];
            $sujet = $_POST['contact-sujet'];
            $message = $_POST['contact-message'];
            
            $C = new Contact($this->_db);
            $C->setNom($name);
            $C->setMail($mail);
            $C->setSujet($sujet);
            $C->setMessage($message);
            $ret = $C->add();
            $numSent=0;
			if($ret['success']):
				require_once BASE_PATH.'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
				$transport = Swift_SmtpTransport::newInstance("smtp-out.obh.oleane.net")->setUsername('site-internet@buzancais.fr')->setPassword('Site-internet36500');
				$mailer = Swift_Mailer::newInstance($transport);
				$message = Swift_Message::newInstance()
				  ->setSubject('Formulaire de contact du site Ville de buzancais')
				  ->setFrom(array('site-internet@buzancais.fr' => 'Ville de buzancais'))
				  ->setTo(array("mairie.buzancais@buzancais.fr"))
				  ->setBody("
					  <p><strong> Nom : </strong> ".$name." </p>
					  <p><strong> Email : </strong> ".$mail."</p> 
					  <p><strong> Sujet : </strong> ".$sujet." </p><br />
					  <p><strong> Message : </strong> ".$message." </p>
				  ");
				  
				$message->setReturnPath('site-internet@buzancais.fr');


				$type = $message->getHeaders()->get('Content-Type');
				$type->setValue('text/html');
				$type->setParameter('charset', 'utf-8');
				
				$numSent = $mailer->send($message);				
				
			
			endif;
           return array(
                "success"=>($ret['success'] && $numSent==1),"donnees"=>array(
                    "demandeExiste"=>true,
                    "successDemande"=>$ret['success']
                )
            );
            );
            
            
        else:
            return array(
                "success"=>true,"donnees"=>array(
                    "demandeExiste"=>false
                )
            );
        endif;
    }
   
    public function call(){
        $this->next->call();
    }
}
