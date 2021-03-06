<?php
use \Models\Admin\Modules;
use Models\Admin\Diaporama;
use Models\Admin\BlocDownload;

class modulesController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
            $this->_request=$slimReq;
            $this->_db=$db;
	}
	function addModule(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $mod =new Modules($this->_db);
            $mod->setIdPage($body->module->idPage->id);
            $mod->setIdCarou($body->module->idCarroussel->id);
            $mod->setNom($body->module->nom);
            $mod->setType($body->type);
            $mod->setShowTitle($body->module->showTitle);
            $mod->setContenu(null);
            $mod->setPosition($body->module->position);
            $resAdd = $mod->addModule();
            echo json_encode($resAdd);
	}
	function addModuleMultiple(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            
            $mod =new Modules($this->_db);
            $mod->setIdPage($body->module->idPage);
            $mod->setNom($body->module->nom);
            $mod->setType($body->type);
            $mod->setContenu($body->module->contenu);
            $mod->setPosition($body->module->position);
            $resAdd = $mod->addModuleMultiple();
            echo json_encode($resAdd);
	}
	function updateModuleMultiple(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
          
            $mod =new Modules($this->_db);
            $mod->setIdPage($body->module->idPage);
            $mod->setNom($body->module->nom);
            $mod->setType($body->type);
            $mod->setContenu($body->module->contenu);
            $mod->setPosition($body->module->position);
            $mod->setId($body->module->id);
            $resAdd = $mod->updateModuleMultiple();
            echo json_encode($resAdd);
	}
	function deleteModule(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $mod =new Modules($this->_db);
            $mod->setId($body->module->id);
            $resDel = $mod->delModule();
            echo json_encode($resDel);
	}
	function getModuleByID(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $mod =new Modules($this->_db);
            $mod->setId($body->module);
            $resDel = $mod->getModuleByID();
            echo json_encode($resDel);
	}
	function getAllByType(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $mod = new Modules($this->_db);
            $resListe = $mod->getAllByType($body->type);
            
            if($body->type=="diaporama" || $body->type=="caroussel"):
                $M = new Diaporama($this->_db);
                if($resListe['success']):
                    foreach($resListe['donnees'] as $k=>$v):
                        $pictures = $M->getByIDModule($resListe['donnees'][$k]['id']);
                        $resListe['donnees'][$k]['rep']=BASE_PATH_UPLOAD_URL.'/modules/diaporamas/';
                        $resListe['donnees'][$k]['pictures']=$pictures['success'] ? $pictures['donnees'] : array();
                    endforeach;
                endif;
            elseif($body->type=="blocdownload"):
                $M = new BlocDownload($this->_db);
                if($resListe['success']):
                    foreach($resListe['donnees'] as $k=>$v):
                        $docs = $M->getByIDModule($resListe['donnees'][$k]['id']);
                        $resListe['donnees'][$k]['rep']=BASE_PATH_UPLOAD_URL.'/modules/blocDownload/';
                        $resListe['donnees'][$k]['documents']=$docs['success'] ? $docs['donnees'] : array();
                    endforeach;
                endif;
            endif;
            echo json_encode($resListe);
	}
	public function call()
        {
            $this->next->call();
        }
}

?>