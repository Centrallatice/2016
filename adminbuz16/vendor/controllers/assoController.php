<?php
use \Models\Admin\Association;
use \Tools\ImgTools;

class assoController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getAll(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new Association($this->_db);
            $result = $c->getAll();
            $result['path']=BASE_PATH_UPLOAD_URL.'/AssociationImg/';
            echo json_encode($result);
	}
	function addAsso(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new Association($this->_db);
            $c->setNom($body->association->nom);
            $c->setIdCategorie($body->association->idCategorie->id);
            $c->setContenu($body->association->Contenu);
            
            if(!isset($body->association->updateIcone)) $body->association->updateIcone=true;
            if(isset($body->association->image) && !is_null($body->association->image) && $body->association->updateIcone):
                $fName = uniqid();
                $data = $body->association->image;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/AssociationImg/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/AssociationImg/'.$fName.$fExt,0755);
                if($put):
                    ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/AssociationImg/'.$fName.$fExt,null,40,40,true,BASE_PATH_UPLOAD_DIR.'/AssociationImg/120x120/'.$fName.$fExt,false,false,100);
                    chmod(BASE_PATH_UPLOAD_DIR.'/AssociationImg/120x120/'.$fName.$fExt,0755);
                endif;
                
                $body->association->image=($put) ? $fName.$fExt : null;
            endif;
            
            $c->setImage(isset($body->association->image) ? $body->association->image : null);
                       
            $result=$c->addCategorie();
            echo json_encode($result);
	}
	function updateAsso(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new Association($this->_db);
            $c->setNom($body->association->nom);
            $c->setIdCategorie($body->association->idCategorie->id);
            $c->setContenu($body->association->contenu);
            if(!isset($body->association->updateIcone)) $body->association->updateIcone=true;
            if(isset($body->association->image) && !is_null($body->association->image) && $body->association->updateIcone):
                $fName = uniqid();
                $data = $body->association->image;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/AssociationImg/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/AssociationImg/'.$fName.$fExt,0755);
                if($put):
                    ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/AssociationImg/'.$fName.$fExt,null,40,40,true,BASE_PATH_UPLOAD_DIR.'/AssociationImg/120x120/'.$fName.$fExt,false,false,100);
                    chmod(BASE_PATH_UPLOAD_DIR.'/AssociationImg/120x120/'.$fName.$fExt,0755);
                endif;
                
                $body->association->image=($put) ? $fName.$fExt : null;
            endif;
            
            $c->setImage(isset($body->association->image) ? $body->association->image : null);
            $c->setId($body->association->id);
            $result=$c->updateCategorie($body->association->updateIcone);
            echo json_encode($result);
	}
	function deleteAsso(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new Association($this->_db);
            $c->setId($body->association->id);
            $result = $c->deleteCategorie();
            if($result['success']) @unlink(BASE_PATH_UPLOAD_DIR.'/AssociationImg/'.$body->association->image);
            echo json_encode($result);
	}
	function getAsso(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $c = new Association($this->_db);
            $result = $c->getByID($body->id);
            $result['path']=BASE_PATH_UPLOAD_URL.'/AssociationImg/';
            echo json_encode($result);
	}
    
	public function call()
        {
            $this->next->call();
        }
}

?>