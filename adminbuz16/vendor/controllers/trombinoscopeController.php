<?php
use Tools\ImgTools;
use Models\Admin\Adjoints;

class trombinoscopeController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	
	function addPersonne(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
			
            if(isset($body->personne->img) && !is_null($body->personne->img)):
                $fName = uniqid();
                $data = $body->personne->img;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/adjoints/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/adjoints/'.$fName.$fExt,0755);
                if($put){
                    $M = new Adjoints($this->_db);
                    $M->setImage($fName.$fExt);
                    $M->setRep(BASE_PATH_UPLOAD_DIR.'/adjoints/');
                    $M->setNom($body->personne->nom);
                    $M->setEmail($body->personne->email);
                    $M->setFonction($body->personne->fonction);
                    $M->setFonctionDetail($body->personne->detailfonction);
                    $addedBDD = $M->addAdjoint();
                    echo json_encode(array("success"=>$addedBDD['success'],"message"=>null,"file"=>array(
                        "img"=>$fName.$fExt,
                        "nom"=>$body->personne->nom,
                        "email"=>$body->personne->email,
                        "fonction"=>$body->personne->fonction,
                        "detailfonction"=>$body->personne->detailfonction,
                        "rep"=>BASE_PATH_UPLOAD_DIR.'/adjoints/'
                    )));
                }
                else{
                    echo json_encode(array("success"=>false,"message"=>"Une erreur est survenue lors de l'envoi du document"));
                }
            else:
                echo json_encode(array("success"=>false,"message"=>"L'image est obligatoire"));
            endif;
	}
        
	function getPersonnes(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new Adjoints($this->_db);
            $result = $M->getAll();
            $result['url']=BASE_PATH_UPLOAD_URL.'/adjoints/';
            $result['base']=BASE_URL;
            echo json_encode($result);
	}
	function getAllPersonne(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new Adjoints($this->_db);
            $result = $M->getAll();
            echo json_encode($result);
	}
	function deletePersonne(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $A = new Adjoints($this->_db);
            $A->setIdAdjoint($body->personne->id);
            
            $result = $A->delAdjoint();
            if($result['success']) @unlink($body->personne->rep.$body->personne->img);
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>