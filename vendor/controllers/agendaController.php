<?php
use Models\Client\Agenda;

class agendaController extends \Slim\Middleware{
    
    private $_db;
	
    function __construct($db){
        $this->_db=$db;
    }
    
    public function initAction($app){
        $periode = $app->request->post('choixMois');
        $categorie = $app->request->post('choixTypeAgenda');
        $cat=$mois=$annee=null;
        
        if($periode!='-1' && !is_null($periode)):
            $p = explode('|',$periode);
           
            $mois=$p[0];
            $annee=$p[1];
        endif;
        
        if($categorie!='-1' && !is_null($categorie)):
            $cat = $categorie;
        endif;
        
        $Agenda = new Agenda($this->_db);
        $agendas = $Agenda->getAgendas('dateEvenement', 'ASC',$mois,$annee,$cat);
        $agendasCat = $Agenda->getDistinctCategoriesAgendas();
        $agendasMois = $Agenda->getDistinctMoisAgendas();
       
        return array(
            "success"=>true,"donnees"=>array(
                "agendas"=>$agendas['success'] ? $agendas['donnees']  : array(),
                "agendasCat"=>$agendasCat['success'] ? $agendasCat['donnees']  : array(),
                "agendasMois"=>$agendasMois['success'] ? $agendasMois['donnees']  : array()
            )
        );
    }
   
    public function call(){
        $this->next->call();
    }
}
