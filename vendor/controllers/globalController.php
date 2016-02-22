<?php
use Models\Client\Pages;
use Models\Client\Flashs;
use Models\Client\Statistique;
use Models\Client\Browser;

class globalController extends \Slim\Middleware{
    
    private $_db;
	
    function __construct($db){
        $this->_db=$db;
    }
    
    public function getMetaDatas($pageName){
        $P = new Pages($this->_db);
        $dataPage = $P->getDataPage($pageName);
        
        if(isset($dataPage['donnees']) && count($dataPage['donnees'])>0 && $dataPage['donnees']!==false):
            foreach($dataPage['donnees'] as $k=>$v):
                $dataPage['donnees'][$k]=utf8_decode($dataPage['donnees'][$k]);
            endforeach;
        else:
            $dataPage['donnees']=array();
        endif;
        return $dataPage;
    }
    public function addStats($pageName,$idPage){
        $S = new Statistique($this->_db);
        $browser = new Browser();
        $browser->Browser();
        $bro=$browser->getBrowser();
        $pla=$browser->getPlatform();
        $S->addStat($idPage,$pageName,$bro,$pla);        
    }
    public function getFlashsInfo($onlyResume){
        $F = new Flashs($this->_db);
        $Fdatas = $F->getAll($onlyResume); 
        return $Fdatas;
    }
    public function call(){
        $this->next->call();
    }
}
