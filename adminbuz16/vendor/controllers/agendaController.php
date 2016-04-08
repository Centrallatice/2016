<?php
use \Models\Admin\Agenda;
use \Tools\ImgTools;

class agendaController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function addEvenement(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Agenda($this->_db);
            $A->setTitre($body->evenement->titre);
            $A->setContent($body->evenement->contenu);
            $A->setResume($body->evenement->resume);
            $A->setIdCategorie($body->evenement->idCategorie->id);
            $A->setDateEvenement($body->evenement->dateEvenement);
            $A->setDateEvenementFin($body->evenement->dateEvenementFin);
            $result = $A->addAgenda();
            echo json_encode($result);
	}
	function addPDF(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
			
            if(isset($body->pdf) && !is_null($body->pdf)):
                $fName = 'agenda-du-mois.pdf';
                $data = $body->pdf;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
				if($fExt!='.pdf'){
					echo json_encode(array("success"=>false,"message"=>"Le document n'est pas au format PDF"));
					return false;
				}
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/agendadumois/'.$fName, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/agendadumois/'.$fName.$fExt,0755);
				if($put){
					echo json_encode(array("success"=>true,"message"=>null));
				}
				else{
					echo json_encode(array("success"=>false,"message"=>"Une erreur est survenue lors de l'envoi du document"));
				}
			else:
				echo json_encode(array("success"=>false,"message"=>"Le document PDF est manquant"));
            endif;
            // echo json_encode($result);
	}
	function updateEvenement(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Agenda($this->_db);
            $A->setTitre($body->evenement->titre);
            $A->setContent($body->evenement->contenu);
            $A->setResume($body->evenement->resume);
            $A->setIdCategorie($body->evenement->idCategorie->id);
            $A->setIdActu($body->evenement->id);
            $A->setDateEvenement($body->evenement->dateEvenement);
            $A->setDateEvenementFin($body->evenement->dateEvenementFin);
            
            $result = $A->updateAgenda();
            echo json_encode($result);
	}
	function getEvenements(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Agenda($this->_db);
            $result = $A->getAgendas('dateAjout','DESC');
			$result['pdfEncours']=(file_exists(BASE_PATH_UPLOAD_DIR.'/agendadumois/agenda-du-mois.pdf') ? BASE_PATH_UPLOAD_URL.'/agendadumois/agenda-du-mois.pdf' : false);
            echo json_encode($result);
	}
	function getEvenementByID(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Agenda($this->_db);
            $A->setIdActu($body->evenement);
            
            $result = $A->getAgenda();
            
            $result['pathImage']=BASE_PATH_UPLOAD_URL.'/actuPicture/';
            echo json_encode($result);
	}
	function delEvenement(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $A = new Agenda($this->_db);
            $A->setIdActu($body->evenement->id);
                        
            $result = $A->delAgendas();
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>