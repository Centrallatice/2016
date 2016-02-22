<?php
use \Models\Admin\Article;
use \Tools\ImgTools;

class articlesController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function addArticle(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Article($this->_db);
            $A->setTitre($body->article->titre);
            $A->setContent($body->article->contenu);
            $A->setResume($body->article->resume);
            $A->setIdCategorie($body->article->idCategorie->id);
            $A->setIdPage($body->article->page->id);
            $A->setDescription($body->article->description);
            $A->setMotsCles($body->article->motsclefs);
            
            $put = false;
            
           
            if(isset($body->article->image) && !is_null($body->article->image) ):
                $fName = uniqid();
                $data = $body->article->image;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/article/'.$fName.$fExt, $data);
                if($put):
                    ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/article/'.$fName.$fExt,null,300,300,true,BASE_PATH_UPLOAD_DIR.'/article/300x300/'.$fName.$fExt,false,false,100);
                endif;
                
                $body->article->image=($put) ? $fName.$fExt : null;
            endif;
            
            $A->setImage(isset($body->article->image) ? $body->article->image : null);
            
            
            $result = $A->addArticle();
            echo json_encode($result);
	}
	function updateArticle(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Article($this->_db);
            
            
            $A->setTitre($body->article->titre);
            $A->setContent($body->article->contenu);
            $A->setResume($body->article->resume);
            $A->setIdCategorie($body->article->idCategorie->id);
            $A->setIdPage($body->article->idPage->id);
            $A->setDescription($body->article->description);
            $A->setMotsCles($body->article->motsclefs);
            $A->setIdArticle($body->article->id);
            
            $oldImage=null;
            $oldP = $A->getPictureFromIDArti();
           
            if($oldP['success']):
                $oldImage = $oldP['donnees'];
            endif;
            
            $put = false;
            if(isset($body->article->image) && !is_null($body->article->image) ):
                $fName = uniqid();
                $data = $body->article->image;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/article/'.$fName.$fExt, $data);
                if($put):
                    ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/article/'.$fName.$fExt,null,300,300,true,BASE_PATH_UPLOAD_DIR.'/article/300x300/'.$fName.$fExt,false,false,100);
                endif;
                
                $body->article->image=($put) ? $fName.$fExt : null;
                $A->setImage(($put) ? $fName.$fExt : null);
            else:
                $A->setImage(null);
            endif;
            
            
            
            $result = $A->updateArticle();
            if($result['success'] && !is_null($oldImage['image'])):
                @unlink(BASE_PATH_UPLOAD_DIR.'/article/'.$oldImage['image']);
                @unlink(BASE_PATH_UPLOAD_DIR.'/article/300x300/'.$oldImage['image']);
            endif;
            $result['donnees']['nameimage']=($put) ? $fName.$fExt : null;
            echo json_encode($result);
	}
	function getArticles(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Article($this->_db);
            $result = $A->getArticles('dateAjout','DESC');
            echo json_encode($result);
	}
	function getArticleByID(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $A = new Article($this->_db);
            $A->setIdArticle($body->article);
            
            $result = $A->getArticle();
            
            $result['pathImage']=BASE_PATH_UPLOAD_URL.'/article/';
            echo json_encode($result);
	}
	function delArticle(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $A = new Article($this->_db);
            $A->setIdArticle($body->article->id);
            
            if(!is_null($body->article->image) && $body->article->image!=''):
                @unlink(BASE_PATH_UPLOAD_DIR.'/article/'.$body->article->image);
                @unlink(BASE_PATH_UPLOAD_DIR.'/article/300x300/'.$body->article->image);
            endif;
            
            $result = $A->delArticles();
            echo json_encode($result);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>