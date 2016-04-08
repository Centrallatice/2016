<?php
use \Models\Admin\CategorieAsso;
use \Tools\ImgTools;

class catAssoController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getAll(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new CategorieAsso($this->_db);
            $result = $c->getAll();
            $result['path']=BASE_PATH_UPLOAD_URL.'/catAssoIcone/';
            echo json_encode($result);
	}
	function addCatAsso(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new CategorieAsso($this->_db);
            $c->setNom($body->categorie->nom);
            
            if(!isset($body->categorie->updateIcone)) $body->categorie->updateIcone=true;
            if(isset($body->categorie->image) && !is_null($body->categorie->image) && $body->categorie->updateIcone):
                $fName = uniqid();
                $data = $body->categorie->image;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/catAssoIcone/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/catAssoIcone/'.$fName.$fExt,0755);
                if($put):
                    ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/catAssoIcone/'.$fName.$fExt,null,40,40,true,BASE_PATH_UPLOAD_DIR.'/catAssoIcone/120x120/'.$fName.$fExt,false,false,100);
                    chmod(BASE_PATH_UPLOAD_DIR.'/catAssoIcone/120x120/'.$fName.$fExt,0755);
                endif;
                
                $body->categorie->image=($put) ? $fName.$fExt : null;
            endif;
            
            $c->setImage(isset($body->categorie->image) ? $body->categorie->image : null);
                       
            $result=$c->addCategorie();
            echo json_encode($result);
	}
	function updateCatAsso(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new CategorieAsso($this->_db);
            $c->setNom($body->categorie->nom);
            if(!isset($body->categorie->updateIcone)) $body->categorie->updateIcone=true;
            if(isset($body->categorie->image) && !is_null($body->categorie->image) && $body->categorie->updateIcone):
                $fName = uniqid();
                $data = $body->categorie->image;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/catAssoIcone/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/catAssoIcone/'.$fName.$fExt,0755);
                if($put):
                    ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/catAssoIcone/'.$fName.$fExt,null,40,40,true,BASE_PATH_UPLOAD_DIR.'/catAssoIcone/120x120/'.$fName.$fExt,false,false,100);
                    chmod(BASE_PATH_UPLOAD_DIR.'/catAssoIcone/120x120/'.$fName.$fExt,0755);
                endif;
                
                $body->categorie->image=($put) ? $fName.$fExt : null;
            endif;
            
            $c->setImage(isset($body->categorie->image) ? $body->categorie->image : null);
            $c->setId($body->categorie->id);
            $result=$c->updateCategorie($body->categorie->updateIcone);
            echo json_encode($result);
	}
	function deleteCatAsso(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new CategorieAsso($this->_db);
            $c->setId($body->categorie->id);
            $result = $c->deleteCategorie();
            if($result['success']) @unlink(BASE_PATH_UPLOAD_DIR.'/catAssoIcone/'.$body->categorie->image);
            echo json_encode($result);
	}
	function getCatAsso(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new CategorieAsso($this->_db);
            $result = $c->getByID($body->id);
            $result['path']=BASE_PATH_UPLOAD_URL.'/catAssoIcone/';
            echo json_encode($result);
	}
	     
        
    
	public function call()
        {
            $this->next->call();
        }
}

?>