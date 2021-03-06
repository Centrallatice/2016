<?php

namespace Models\Client;
use Tools\DateTools;
use Tools\StrTools;
use Models\Client\Diaporama;

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
                    DATE_FORMAT(A.dateEvenement,'%d/%m/%Y %H:%i') as dateEvenement,
                    DATE_FORMAT(A.dateEvenement,'%W') as jourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%d') as chjourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%M') as moisEvenement,
                    C.Nom as CatNom,C.id as idCat,A.idCarroussel
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
                    ) < 90
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
                    
                    if(!is_null($r[$k]['idCarroussel'])):
                       $D = new Diaporama($this->_db);
                       $ContentCarou = $D->getByIDModule($r[$k]['idCarroussel']);
                       if($ContentCarou['success'] && count($ContentCarou['donnees'])>0):
                           $r[$k]['contentCarou']=$ContentCarou['donnees'];
                           $r[$k]['urlCarou']=BASE_PATH_UPLOAD_URL.'/modules/diaporamas/';
                       else:
                           $r[$k]['contentCarou']=null;
                       endif;
                    else:
                        $r[$k]['contentCarou']=null;
                    endif;
                    
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
                    DATE_FORMAT(A.dateEvenement,'%W') as jourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%d') as chjourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%M') as moisEvenement,
                    DATE_FORMAT(A.dateEvenement,'%d/%m/%Y %H:%i') as dateEvenement,C.Nom as CatNom,A.idCarroussel
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
                $r[0]['moisEvenement']=DateTools::getFrenchMonth(strtolower($r[0]['moisEvenement']));
                $r[0]['jourEvenement']=DateTools::getFrenchDay(strtolower($r[0]['jourEvenement']));
                $r[0]['dateEvenementFR']=$r[0]['jourEvenement'].' '.$r[0]['chjourEvenement'].' '.$r[0]['moisEvenement'];
                if(!is_null($r[0]['idCarroussel'])):
                    $D = new Diaporama($this->_db);
                    $ContentCarou = $D->getByIDModule($r[0]['idCarroussel']);
                    if($ContentCarou['success'] && count($ContentCarou['donnees'])>0):
                        $r[0]['contentCarou']=$ContentCarou['donnees'];
                        $r[0]['urlCarou']=BASE_PATH_UPLOAD_URL.'/modules/diaporamas/';
                    else:
                        $r[0]['contentCarou']=null;
                    endif;
                 else:
                     $r[0]['contentCarou']=null;
                 endif;
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
                    A.id, A.titre, A.contenu,A.image,A.resume,A.idCategorie,A.url,DATE_FORMAT(A.dateEvenement,'%W') as jourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%d') as chjourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%M') as moisEvenement,
                    DATE_FORMAT(A.dateEvenement,'%d/%m/%Y %H:%i') as dateAjout,C.Nom as CatNom,A.idCarroussel
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
//                var_dump($r);
                $r['moisEvenement']=DateTools::getFrenchMonth(strtolower($r['moisEvenement']));
                    $r['jourEvenement']=DateTools::getFrenchDay(strtolower($r['jourEvenement']));
                    $r['dateEvenementFR']=$r['jourEvenement'].' '.$r['chjourEvenement'].' '.$r['moisEvenement'];
                if(!is_null($r['idCarroussel'])):
                    $D = new Diaporama($this->_db);
                    $ContentCarou = $D->getByIDModule($r['idCarroussel']);
                    
                    if($ContentCarou['success'] && count($ContentCarou['donnees'])>0):
                        $r['contentCarou']=$ContentCarou['donnees'];
                        $r['urlCarou']=BASE_PATH_UPLOAD_URL.'/modules/diaporamas/';
                    else:
                        $r['contentCarou']=null;
                    endif;
                 else:
                     $r['contentCarou']=null;
                 endif;
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
    public function search($search){
        try {
            $sql="
                SELECT 
                    A.id, A.titre, A.contenu,A.image,A.resume,A.idCategorie,A.url,
                    DATE_FORMAT(A.dateEvenement,'%W') as jourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%d') as chjourEvenement,
                    DATE_FORMAT(A.dateEvenement,'%M') as moisEvenement,
                    DATE_FORMAT(A.dateEvenement,'%d/%m/%Y %H:%i') as dateAjout,C.Nom as CatNom,A.idCarroussel
                FROM
                    actualites A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id
                WHERE
                    A.titre like '%".$search."%' OR
                    A.resume like '%".$search."%' OR
                    A.contenu like '%".$search."%'
                ";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intIdActu))){
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