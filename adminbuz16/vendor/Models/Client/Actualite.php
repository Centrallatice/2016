<?php

namespace Models\Client;
use Tools\DateTools;
use Tools\StrTools;

class Actualite extends \Slim\Middleware{

    private $_strTitre = null;
    private $_strContent = null;
    private $_strResume = null;
    private $_strImage = null;
    private $_strUrl = null;
    private $_intIdCategorie = null;
    private $_intIdActu = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getActualites($trie,$ordreTrie){
        try {
            $sql="
                SELECT 
                    A.id,A.url, A.titre, A.contenu,A.image,A.resume,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    DATE_FORMAT(A.dateAjout,'%W') as jourEvenement,
                    DATE_FORMAT(A.dateAjout,'%d') as chjourEvenement,
                    DATE_FORMAT(A.dateAjout,'%M') as moisEvenement,
                    C.Nom as CatNom,C.id as idCat
                FROM
                    actualites A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                WHERE
                    DATEDIFF(
                        NOW(),
                        A.dateAjout
                    ) < 60
                AND
                    C.Statut=1
                ORDER BY 
                    A.".$trie." ".$ordreTrie;
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                foreach($r as $k=>$v):
                    $r[$k]['moisEvenement']=DateTools::getFrenchMonth(strtolower($r[$k]['moisEvenement']));
                    $r[$k]['jourEvenement']=DateTools::getFrenchDay(strtolower($r[$k]['jourEvenement']));
                    $r[$k]['dateEvenementFR']=$r[$k]['jourEvenement'].' '.$r[$k]['chjourEvenement'].' '.$r[$k]['moisEvenement'];
					$r[$k]['urlCatNom']=StrTools::toAscii($r[$k]['CatNom']);
                endforeach;
                return array (
                    'success' => true
                    ,'donnees' => $r
                    ,'message' => null
                );
            }else{
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
    public function getActualite(){
        try {
            $sql="
                SELECT 
                    A.id, A.titre, A.contenu,A.image,A.resume,A.idCategorie,A.url,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,C.Nom as CatNom
                FROM
                    actualites A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id
                WHERE
                    A.id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intIdActu))){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
				$r[0]['urlCatNom']=StrTools::toAscii($r['CatNom']);
                return array (
                    'success' => true
                    ,'donnees' => $r
                    ,'message' => null
                );
            }else{
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
    
	public function getActualiteBySlug(){
        try {
            $sql="
                SELECT 
                    A.id, A.titre, A.contenu,A.image,A.resume,A.idCategorie,A.url,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,C.Nom as CatNom
                FROM
                    actualites A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id
                WHERE
                    A.url=:url
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("url"=>  $this->_strUrl))){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => $r
                    ,'message' => null
                );
            }else{
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
	public function setUrl($str){
        $this->_strUrl = $str;
    }
    public function setImage($str){
        $this->_strImage = $str;
    }
    public function setIdCategorie($i){
        $this->_intIdCategorie = $i;
    }
    public function setIdActu($i){
        $this->_intIdActu= $i;
    }
    public function call(){
        $this->next->call();
    }
}
?>