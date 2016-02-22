<?php

namespace Models\Client;
use Tools\DateTools;

class Agenda extends \Slim\Middleware{

    private $_strTitre = null;
    private $_strContent = null;
    private $_strResume = null;
    private $_intIdCategorie = null;
    private $_intIdAgenda = null;
    private $_dDateEv = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getAgendas($trie,$ordreTrie){
        try {
            $sql="
                SELECT 
                    A.id, 
                    A.titre, 
                    A.contenu,
                    A.resume,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    DATE_FORMAT(A.dateEvenement,'%W') as jourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%d') as chjourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%M') as moisEvenement,
                    C.Nom as CatNom
                FROM
                    evenements A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                ORDER BY 
                    A.".$trie." ".$ordreTrie;
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                
                foreach($r as $k=>$v):
                    $r[$k]['moisEvenement']=DateTools::getFrenchMonth(strtolower($r[$k]['moisEvenement']));
                    $r[$k]['jourEvenement']=DateTools::getFrenchDay(strtolower($r[$k]['jourEvenement']));
                    $r[$k]['dateEvenementFR']=$r[$k]['jourEvenement'].' '.$r[$k]['chjourEvenement'].' '.$r[$k]['moisEvenement'];
                endforeach;
                
                return array (
                    'success' => true
                    ,'donnees' => $r
                    ,'message' => null
                );
            }else{
                print_r($sth->errorInfo());
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( PDOException $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    public function setTitre ( $str) {
        $this->_strTitre = trim ( $str);
    }
    public function setResume($str){
        $this->_strResume = $str;
    }
    public function setContent($str){
        $this->_strContent = $str;
    }
   
    public function setIdCategorie($i){
        $this->_intIdCategorie = $i;
    }
    public function setIdActu($i){
        $this->_intIdAgenda= $i;
    }
    public function setDateEvenement($d){
        $this->_dDateEv= $d;
    }
    public function call(){
        $this->next->call();
    }
}
?>