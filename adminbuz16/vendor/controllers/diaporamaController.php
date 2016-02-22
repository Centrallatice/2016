<?php
use \Models\Admin\Diaporama;
use \Models\Admin\Modules;
use \Tools\ImgTools;

class diaporamaController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function addImageDiapo(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $D = new Diaporama($this->_db);
            $D->setIdModule($body->diapo->id);
            $D->setContenu($body->img->contenu);
            
            if(isset($body->img->fichier) && !is_null($body->img->fichier)):
                $fName = uniqid();
                $data = $body->img->fichier;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/modules/diaporamas/'.$fName.$fExt, $data);
                $body->img->fichier=($put) ? $fName.$fExt : null;
            endif;
            
            $D->setFile(isset($body->img->fichier) ? $body->img->fichier : null);
                
            $result = $D->addPicture();
            $result['filename']=$body->img->fichier;
            echo json_encode($result);
	}
	function delDiapo(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $D = new Diaporama($this->_db);
            $D->setId($body->img->id);
            $dump=$D->deleteImage();
            
            
            if($dump['success']) @unlink(BASE_PATH_UPLOAD_DIR.'/modules/diaporamas/'.$body->img->imageFile);
            echo json_encode($dump);
	}
        
	public function call()
        {
            $this->next->call();
        }
}

?>