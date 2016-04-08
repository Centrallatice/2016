<?php
use \Models\Admin\Actualite;
use \Tools\ImgTools;

class actualitesController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function addActualite(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Actualite($this->_db);
            $A->setTitre($body->actualite->titre);
            $A->setContent($body->actualite->contenu);
            $A->setResume($body->actualite->resume);
            $A->setIdCategorie($body->actualite->idCategorie->id);
            $A->setIdCarou($body->actualite->idCarroussel->id);
            
            
            if(isset($body->actualite->image) && !is_null($body->actualite->image)):
                $fName = uniqid();
                $data = $body->actualite->image;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/actuPicture/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/actuPicture/'.$fName.$fExt,0755);
                if($put):
                    ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/actuPicture/'.$fName.$fExt,null,300,300,false,BASE_PATH_UPLOAD_DIR.'/actuPicture/300x300/'.$fName.$fExt,false,false,100);
                    chmod(BASE_PATH_UPLOAD_DIR.'/actuPicture/300x300/'.$fName.$fExt,0755);
                endif;
                
                $body->actualite->image=($put) ? $fName.$fExt : null;
            endif;
            $A->setImage(isset($body->actualite->image) ? $body->actualite->image : null);
            
            $result = $A->addActualite();
            echo json_encode($result);
	}
	function updateActualite(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Actualite($this->_db);
            $A->setTitre($body->actualite->titre);
            $A->setContent($body->actualite->contenu);
            $A->setResume($body->actualite->resume);
            $A->setIdCategorie($body->actualite->idCategorie->id);
            $A->setIdCarou($body->actualite->idCarroussel->id);
            $A->setIdActu($body->actualite->id);
            
            
            
            if(isset($body->actualite->newImage) && !is_null($body->actualite->newImage) && $body->actualite->updateImage):
                $oldpicture = $A->getPictureFromIDActu();
                if($oldpicture['success']):
                    if($oldpicture['donnees']['image']!=null && $oldpicture['donnees']['image']!=''):
                        @unlink(BASE_PATH_UPLOAD_DIR.'/actuPicture/'.$oldpicture['donnees']['image']);
                        @unlink(BASE_PATH_UPLOAD_DIR.'/actuPicture/300x300/'.$oldpicture['donnees']['image']);
                    endif;
                endif;
                
                $fName = uniqid();
                $data = $body->actualite->newImage;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/actuPicture/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/actuPicture/'.$fName.$fExt,0755);
                if($put):
                    ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/actuPicture/'.$fName.$fExt,null,300,300,false,BASE_PATH_UPLOAD_DIR.'/actuPicture/300x300/'.$fName.$fExt,false,false,100);
                    chmod(BASE_PATH_UPLOAD_DIR.'/actuPicture/300x300/'.$fName.$fExt,0755);
                endif;
                
                $body->actualite->newImage=($put) ? $fName.$fExt : null; 
                $A->setImage(isset($body->actualite->newImage) ? $body->actualite->newImage : null);
            else:
                $oldpicture = $A->getPictureFromIDActu();
                if($oldpicture['success']):
                    $A->setImage($oldpicture['donnees']['image']);
                endif;
            endif;
            
           
            
            $result = $A->updateActualite();
            echo json_encode($result);
	}
	function getActualites(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Actualite($this->_db);
            $result = $A->getActualites('dateAjout','DESC');
            echo json_encode($result);
	}
	function getActuByID(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Actualite($this->_db);
            $A->setIdActu($body->actualite);
            
            $result = $A->getActualite();
            
            $result['pathImage']=BASE_PATH_UPLOAD_URL.'/actuPicture/';
            echo json_encode($result);
	}
	function delActualite(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $A = new Actualite($this->_db);
            $A->setIdActu($body->actualite->id);
            
            if(!is_null($body->actualite->image) && $body->actualite->image!=''):
                @unlink(BASE_PATH_UPLOAD_DIR.'/actuPicture/'.$body->actualite->image);
                @unlink(BASE_PATH_UPLOAD_DIR.'/actuPicture/300x300/'.$body->actualite->image);
            endif;
            
            $result = $A->delActualites();
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>