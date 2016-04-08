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
    
    public function getAgendas($trie,$ordreTrie,$mois=null,$annee=null,$cat=null){
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
                    DATE_FORMAT(A.dateEvenement,'%Y') as anneeEvenement,
                    DATE_FORMAT(A.dateEvenement,'%M') as moisEvenement,
                    DATE_FORMAT(A.dateEvenementFin,'%W') as jourEvenementFin,
                    DATE_FORMAT(A.dateEvenementFin,'%d') as chjourEvenementFin,
                    DATE_FORMAT(A.dateEvenementFin,'%Y') as anneeEvenementFin,
                    DATE_FORMAT(A.dateEvenementFin,'%M') as moisEvenementFin,
                    C.Nom as CatNom,
                    DATEDIFF(A.dateEvenement,A.dateEvenementFin) as MemeJour
                FROM
                    evenements A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
            ";
            $and = false;
            if(!is_null($mois) || !is_null($annee) || !is_null($cat)):
                $sql.=' WHERE ';
                if(!is_null($mois)):
                    $sql.=" DATE_FORMAT(A.dateEvenement,'%m')='".$mois."' ";
                    $and=true;
                endif;
                if(!is_null($annee)):
                    if($and) $sql.=" AND ";
                    $sql.=" DATE_FORMAT(A.dateEvenement,'%Y')='".$annee."' ";
                    $and=true;
                endif;
                if(!is_null($cat)):
                    if($and) $sql.=" AND ";
                    $sql.=" C.id='".$cat."' ";
                    $and=true;
                endif;
            endif;
                if($and){
                        $sql.=" AND A.dateEvenement >= NOW() ";
                }
                else{
                        $sql.=" WHERE A.dateEvenement >= NOW()";
                }
			
            $sql.=" 
                ORDER BY 
                    A.".$trie." ".$ordreTrie;
            
			$sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                
                foreach($r as $k=>$v):
                    $r[$k]['moisEvenement']=DateTools::getFrenchMonth(strtolower($r[$k]['moisEvenement']));
                    $r[$k]['jourEvenement']=DateTools::getFrenchDay(strtolower($r[$k]['jourEvenement']));
                    $r[$k]['dateEvenementFR']=$r[$k]['jourEvenement'].' '.$r[$k]['chjourEvenement'].' '.$r[$k]['moisEvenement'];
                    
                    $r[$k]['moisEvenementFin']=DateTools::getFrenchMonth(strtolower($r[$k]['moisEvenementFin']));
                    $r[$k]['jourEvenementFin']=DateTools::getFrenchDay(strtolower($r[$k]['jourEvenementFin']));
                    $r[$k]['dateEvenementFinFR']=$r[$k]['jourEvenementFin'].' '.$r[$k]['chjourEvenementFin'].' '.$r[$k]['moisEvenementFin'];
                endforeach;
                
                return array (
                    'success' => true
                    ,'donnees' => (count($r)>0) ? $r : array()
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
    public function getDistinctCategoriesAgendas(){
        try {
            $sql="
                SELECT 
                    DISTINCT C.Nom,
                    C.id
                FROM
                    evenements A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                ORDER BY C.Nom ASC
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
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
    public function getDistinctMoisAgendas(){
        try {
            $sql="
                SELECT 
                    DISTINCT DATE_FORMAT(A.dateEvenement,'%m') as moisEvenement,
                    DATE_FORMAT(A.dateEvenement,'%M') as moisFREvenement,
                    DATE_FORMAT(A.dateEvenement,'%Y') as anneeEvenement
                FROM
                    evenements A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                WHERE
                    DATE_FORMAT(A.dateEvenement,'%m')>=DATE_FORMAT(NOW(),'%m')
                ORDER BY anneeEvenement DESC,moisEvenement DESC
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                foreach($r as $k=>$v):
                    $r[$k]['moisFREvenement']=DateTools::getFrenchMonth(strtolower($r[$k]['moisFREvenement']));
//                    $r[$k]['moisFREvenementFin']=DateTools::getFrenchMonth(strtolower($r[$k]['moisFREvenementFin']));
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