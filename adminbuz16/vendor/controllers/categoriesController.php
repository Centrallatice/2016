<?php
use \Models\Admin\Categorie;
use \Tools\ImgTools;

class categoriesController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getAllDisplay(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new Categorie($this->_db);
            $result = $c->getAllDisplay();
            $baseIconePath = BASE_PATH_UPLOAD_URL.'/actuIcone/40x40/';
            $retour = array(
                "categories"=>$result,
                "baseIconePath"=>$baseIconePath
            );
            echo json_encode($retour);
	}
	function addCategorie(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new Categorie($this->_db);
            $c->setTitre($body->cat->titre);
            $c->setDesc(isset($body->cat->description) ? $body->cat->description : null);
            $c->setColor($body->cat->color);
            
            $put = false;
            
            if(!isset($body->cat->updateIcone)) $body->cat->updateIcone=true;
            if(isset($body->cat->icone) && !is_null($body->cat->icone) && $body->cat->updateIcone):
                $fName = uniqid();
                $data = $body->cat->icone;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/actuIcone/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/actuIcone/'.$fName.$fExt,0755);
                if($put):
                    ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/actuIcone/'.$fName.$fExt,null,40,40,true,BASE_PATH_UPLOAD_DIR.'/actuIcone/40x40/'.$fName.$fExt,false,false,100);
                    chmod(BASE_PATH_UPLOAD_DIR.'/actuIcone/40x40/'.$fName.$fExt,0755);
                endif;
                
                $body->cat->icone=($put) ? $fName.$fExt : null;
            endif;
            
            $c->setIcone(isset($body->cat->icone) ? $body->cat->icone : null);
                
            if(isset($body->cat->parent)):
                $c->setIdParent ($body->cat->parent->id);
            endif;
            
            if(isset($body->cat->toChange) && isset($body->cat->toChange)):
                $c->setId($body->cat->id);
                $result = $c->updateCategorie();
            else:
                $result = $c->addCategorie();
            endif;
            
            
            
            echo json_encode($result);
	}
	function deleteCategorie(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new Categorie($this->_db);
            $c->setId($body->cat->id);
            $result = $c->deleteCategorie();
            echo json_encode($result);
	}
	function toggleEtat(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new Categorie($this->_db);
            $result = $c->toggleEtat($body->cat->id,(($body->cat->Statut==1) ? 0 : 1));
            
            echo json_encode($result);
	}
        
        
    
	public function call()
        {
            $this->next->call();
        }
}

?>