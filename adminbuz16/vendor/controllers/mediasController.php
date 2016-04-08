<?php
use Tools\ImgTools;
use Models\Admin\Medias;

class mediasController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	
	function addMedia(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
			
            if(isset($body->media->file) && !is_null($body->media->file)):
                $fName = uniqid();
                $data = $body->media->file;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/medias/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/medias/'.$fName.$fExt,0755);
                if($put){
                    $M = new Medias($this->_db);
                    $M->setFilename($fName.$fExt);
                    $M->setRep(BASE_PATH_UPLOAD_DIR.'/medias/');
                    $M->setNom($body->media->nom);
                    $M->setType($body->media->type);
                    $M->setNomAlbum("Aucun");
                    $M->setUrlRelatif("./public/upload/medias/".$fName.$fExt);
                    $addedBDD = $M->addMedia();
                    echo json_encode(array("success"=>$addedBDD['success'],"message"=>null,"file"=>array(
                        "type"=>$body->media->type,
                        "nom"=>$body->media->nom,
                        "rep"=>BASE_PATH_UPLOAD_DIR.'/medias/',
                        "filename"=>$fName
                    )));
                }
                else{
                    echo json_encode(array("success"=>false,"message"=>"Une erreur est survenue lors de l'envoi du document"));
                }
            else:
                echo json_encode(array("success"=>false,"message"=>"Le document PDF est manquant"));
            endif;
	}
        
	function getMedias(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new Medias($this->_db);
            $result = $M->getByType("document");
            echo json_encode($result);
	}
	function getAllMedias(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new Medias($this->_db);
            $result = $M->getAll();
            echo json_encode($result);
	}
	function deleteMedia(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $A = new Medias($this->_db);
            $A->setIdMedia($body->media->id);
            
            $result = $A->delMedia();
            if($result['success']) @unlink($body->media->rep.$body->media->filename);
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>