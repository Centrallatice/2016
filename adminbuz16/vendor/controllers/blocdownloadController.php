<?php
use \Models\Admin\BlocDownload;
use \Models\Admin\Modules;
use \Tools\ImgTools;

class blocdownloadController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
        $this->_request=$slimReq;
        $this->_db=$db;
	}
	function addDocBloc(){
		
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $D = new BlocDownload($this->_db);
            $D->setIdModule($body->bloc->id);
            $D->setTitre($body->doc->titre);
            $D->setSousTitre($body->doc->sstitre);
            $D->setIntitule($body->doc->intitule);
            
            if(isset($body->doc->fichier) && !is_null($body->doc->fichier)):
                $fName = uniqid();
                $data = $body->doc->fichier;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                if($fExt!='.jpeg' && $fExt!='.gif' && $fExt!='.png' && $fExt!='.jpg'):
                        echo json_encode(array("success"=>false,"message"=>"Le format de l'image est incorrect (jpeg, gif ou png uniquement)"));
                        return false;
                endif;
                $put = file_put_contents(BASE_PATH_UPLOAD_DIR.'/modules/blocDownload/picture/'.$fName.$fExt, $data);
                chmod(BASE_PATH_UPLOAD_DIR.'/modules/blocDownload/picture/'.$fName.$fExt,0755);
                $body->doc->fichier=($put) ? $fName.$fExt : null;
            endif;
            $D->setImage(isset($body->doc->fichier) ? $body->doc->fichier : null);
                
            if(isset($body->doc->pdf) && !is_null($body->doc->pdf)):
                $fName = uniqid();
                $data = $body->doc->pdf;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $pdf_base64=$data;
                $data = base64_decode($data);
                $f = finfo_open();
                $mime_type = finfo_buffer($f, $data, FILEINFO_MIME_TYPE);
                $fExt = ImgTools::getFileExtFromContent($mime_type);
                
                if($fExt!='.pdf'):
                    echo json_encode(array("success"=>false,"message"=>"Le format du document est incorrect (pdf uniquement)"));
                    return false;
                endif;
                
               
                $pdf_decoded = base64_decode ($pdf_base64);
                //Write data back to pdf file
                $pdf = fopen (BASE_PATH_UPLOAD_DIR.'/modules/blocDownload/pdf/'.$fName.$fExt,'w');
                $done = fwrite ($pdf,$pdf_decoded);
                //close output file
                fclose ($pdf);
                chmod(BASE_PATH_UPLOAD_DIR.'/modules/blocDownload/pdf/'.$fName.$fExt,0755);
                $body->doc->pdf=($done) ? $fName.$fExt : null;
            endif;
            
            $D->setPDF(isset($body->doc->pdf) ? $body->doc->pdf : null);
                
            
            $result = $D->addBloc();
            $result['filename']=$body->doc->fichier;
            $result['pdf']=$body->doc->pdf;
            $result['titre']=$body->doc->titre;
            $result['sstitre']=$body->doc->sstitre;
            $result['intitule']=$body->doc->intitule;
            echo json_encode($result);
	}
	function delDoc(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $D = new BlocDownload($this->_db);
            $D->setId($body->doc->id);
            $dump=$D->delBloc();
            
            
            if($dump['success']):
                @unlink(BASE_PATH_UPLOAD_DIR.'/modules/blocDownload/pdf/'.$body->doc->pdf);
                @unlink(BASE_PATH_UPLOAD_DIR.'/modules/blocDownload/picture/'.$body->doc->fichier);
            endif;
            echo json_encode($dump);
	}
        
	public function call()
        {
            $this->next->call();
        }
}

?>