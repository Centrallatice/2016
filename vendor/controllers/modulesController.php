<?php
use Models\Client\Modules;
use Models\Client\Diaporama;
use Models\Client\BlocDownload;

class modulesController extends \Slim\Middleware{
    private $_db;
    function __construct($db){
        $this->_db=$db;
    }

    function getModulesFront($page){

        $mod = new Modules($this->_db);
        $resListe = $mod->getAllByPage($page);
        if($resListe['success'] && count($resListe['donnees'])>0):
            
            foreach($resListe['donnees'] as $k=>$v):
                foreach($resListe['donnees'][$k] as $clePosition=>$valeurPosition):

                    if($resListe['donnees'][$k][$clePosition]['type']=="diaporama"):
                        $M = new Diaporama($this->_db);
                        $pictures = $M->getByIDModule($resListe['donnees'][$k][$clePosition]['id']);
                        if($pictures['success'] && count($pictures['donnees'])):
                            $resListe['donnees'][$k][$clePosition]['rep']=BASE_PATH_UPLOAD_URL.'/modules/diaporamas/';
                            $resListe['donnees'][$k][$clePosition]['pictures']=$pictures['success'] ? $pictures['donnees'] : array();
                        endif;
                    elseif($resListe['donnees'][$k][$clePosition]['type']=="blocdownload"):
                        $B = new BlocDownload($this->_db);
                        $docs = $B->getByIDModule($resListe['donnees'][$k][$clePosition]['id']);
                        if($docs['success'] && count($docs['donnees'])):
                            $resListe['donnees'][$k][$clePosition]['rep']=BASE_PATH_UPLOAD_URL.'/modules/blocDownload/';
                            $resListe['donnees'][$k][$clePosition]['documents']=$docs['success'] ? $docs['donnees'] : array();
                        endif;
                    endif;

                endforeach;
            endforeach;
        else:
            return array();
        endif;
        return $resListe;
    }
    public function call()
    {
        $this->next->call();
    }
}

?>