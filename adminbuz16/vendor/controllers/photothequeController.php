<?php
use Models\Admin\Phototheque;
use Models\Admin\Medias;
use Tools\ImgTools;
use Tools\StrTools;

class photothequeController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function getCategories(){
            $C = new Phototheque($this->_db);
            $result = $C->getCategories();
            $M = new Medias($this->_db);
            
            if($result['success']):
                $result['base_upload']=BASE_PATH_UPLOAD_URL;
                foreach($result['donnees'] as $k=>$v):
                    $pictures = $M->getByTypeAndID("photos", $result['donnees'][$k]['id']);
                    if($pictures['success']):
                        foreach($pictures['donnees'] as $clepicture=>$valpicture):
                            $pictures['donnees'][$clepicture]['url']=BASE_PATH_UPLOAD_URL.'/'.$pictures['donnees'][$clepicture]['rep'].'/'.$pictures['donnees'][$clepicture]['filename'];
//                            $pictures['donnees'][$clepicture]['caption']=$pictures['donnees'][$clepicture]['filename'];
                            $pictures['donnees'][$clepicture]['thumbUrl']=BASE_PATH_UPLOAD_URL.'/'.$pictures['donnees'][$clepicture]['rep'].'/minis/'.$pictures['donnees'][$clepicture]['filename'];
                        endforeach;
                        $result['donnees'][$k]['pictures']=$pictures['donnees'];
                    endif;
                endforeach;
            endif;
            echo json_encode($result);
	}
       
	function addCategorie(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $C = new Phototheque($this->_db);
            $RName = StrTools::toAscii($body->categorie->nom);
            $C->setNom($body->categorie->nom);
            $C->setRep($RName);
            
            $TestExiste = $C->repExists($RName);
            
            
            if(!$TestExiste):
                echo json_encode(array("success"=>false));
            else:
                if($TestExiste['donnees']==0):
                    $result = $C->addCategorie();
                    if($result['success']):
                        if(!mkdir(BASE_PATH_UPLOAD_DIR.'/phototheque/'.$RName) || !mkdir(BASE_PATH_UPLOAD_DIR.'/phototheque/'.$RName.'/minis/')):
                            $C->setId($result['donnees']);
                            $C->deleteCategorie();
                            echo json_encode(array("success"=>false,"message"=>"Une erreur est survenue lors de la création des dossiers :".$RName));
                        else:
                            echo json_encode($result);
                        endif;
                    else:
                        echo json_encode($result);
                    endif;
                else:
                    echo json_encode(array("success"=>false,"message"=>"Un répertoire porte déja ce nom, merci de modifier le nom de la catégorie"));
                endif;
            endif;
	}
	function deleteCategorie(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $C = new Phototheque($this->_db);
            $C->setId($body->categorie->id);
            $this->deletePictureDirectory(BASE_PATH_UPLOAD_DIR.'/phototheque/'.$body->categorie->Repertoire.'/minis/');
//            $this->deletePictureDirectory(BASE_PATH_UPLOAD_DIR.'/phototheque/'.$body->categorie->Repertoire.'/');
//            $result = $C->deleteCategorie();
//            echo json_encode($result);   
	}
        public  function deletePictureDirectory($Directory){
        $MyDirectory = opendir($Directory) or die('Erreur');
            while($Entry = @readdir($MyDirectory)) {
             if(is_dir($Directory.'/'.$Entry) && $Entry != '.' && $Entry != '..') {
                echo '<ul>'.$Directory;
                    deletePictureDirectory($Directory.'/'.$Entry);
                echo '</ul>';
             }
             else if($Entry != '.' && $Entry != '..') {
              echo '<li>'.$Entry.'</li>';
             }
            }
             closedir($MyDirectory);
        }
        function deletePicture(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            if(is_null($body->deletePicture) || is_null($body->deletePicture->id)):
                echo json_encode(array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'identifiant du média est obligatoire'
                ));
                return false;
            endif;
            
            $M = new Medias($this->_db);
            $M->setidMedia($body->deletePicture->id);
            $resDelete = $M->delMedia();
            if($resDelete['success']):
                @unlink(BASE_PATH_UPLOAD_DIR.'/'.$body->deletePicture->rep.'/'.$body->deletePicture->filename);
                @unlink(BASE_PATH_UPLOAD_DIR.'/'.$body->deletePicture->rep.'/minis/'.$body->deletePicture->filename);
            endif;
            
            echo json_encode($resDelete);
        }
        
	function updateCategorie(){
		$request = $this->_request->request();
		$body = json_decode($request->getBody());
		
		$C = new Phototheque($this->_db);
		$C->setId($body->categorie->id);
		$C->setNom($body->categorie->nom);
		
		
		$RName = StrTools::toAscii($body->categorie->nom);
		$C->setRep($RName);
		$TestExiste = $C->repExists($RName,$body->categorie->id);
		
		
		if(!$TestExiste):
                    echo json_encode(array("success"=>false));
		else:
                    if($TestExiste['donnees']==0):
                            $result = $C->updateCategorie();
                            if($result['success']):
                                if(!is_dir(BASE_PATH_UPLOAD_DIR.'/phototheque/'.$RName)):
                                    if(!mkdir(BASE_PATH_UPLOAD_DIR.'/phototheque/'.$RName) || !mkdir(BASE_PATH_UPLOAD_DIR.'/phototheque/'.$RName.'/minis/')):
                                            echo json_encode(array("success"=>false,"message"=>"Une erreur est survenue lors de la création des dossiers :".$RName));
                                    else:
                                            echo json_encode($result);
                                    endif;
                                else:
                                    echo json_encode($result);
                                endif;
                            endif;

                    else:
                            echo json_encode(array("success"=>false,"message"=>"Un répertoire porte déja ce nom, merci de modifier le nom de la catégorie"));
                    endif;
		endif;
            
            
	}
    public function addPicture($datas,$files){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());

            $finalName=uniqid();
            $extension = ImgTools::getFileExtFromContent($_FILES['file']['type']);
            $destination = BASE_PATH_UPLOAD_DIR.'/phototheque/'.$datas['p']['Repertoire'].'/'.$finalName.$extension;

            $error=false;
            
            
            
            if(move_uploaded_file( $_FILES['file']['tmp_name'] , $destination )):
                $Medias=new Medias($this->_db);
                $Medias->setFilename($finalName.$extension);
                $Medias->setRep('phototheque/'.$datas['p']['Repertoire']);
                $Medias->setidLiaison($datas['p']['id']);
                $Medias->setType("photos");
                $resAdded = $Medias->addMedia();
                
                ImgTools::smart_resize_image(BASE_PATH_UPLOAD_DIR.'/phototheque/'.$datas['p']['Repertoire'].'/'.$finalName.$extension,null,300,300,true,BASE_PATH_UPLOAD_DIR.'/phototheque/'.$datas['p']['Repertoire'].'/minis/'.$finalName.$extension,false,false,100);
                
                
                if(!$resAdded['success']):
                    unlink(BASE_PATH_UPLOAD_DIR.'/phototheque/'.$datas['p']['Repertoire'].'/'.$finalName.$extension);
                endif;
                echo json_encode($resAdded);
            else:
                $error=true;
            endif;
	}

	public function call()
        {
            $this->next->call();
        }
}

?>