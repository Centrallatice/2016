<?php

namespace Models\Client;
use Models\Client\Diaporama;
use Models\Client\BlocDownload;


class Article extends \Slim\Middleware{

    private $_strTitre = null;
    private $_strContent = null;
    private $_strResume = null;
    private $_strDescription = null;
    private $_strMotsClefs = null;
    private $_strImage = null;
    private $_intIdCategorie = null;
    private $_intIdArticle = null;
    private $_intIdPage = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getArticlesByPage($idPage,$trie,$ordreTrie){
        try {
            $sql="
                SELECT 
                    A.id, 
                    A.titre, 
                    A.contenu,
                    A.resume,
                    A.url,
                    A.description,
                    A.motsclefs,
                    A.image,
                    A.legende,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    C.Nom as CatNom,
                    P.Nom as PageNom,
                    0 as FromEnfant,
                    A.disposition,
                    A.showtitre as showTitle,
                    A.showpointilles as showPointille,
                    A.idCaroussel 
                FROM
                    articles A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                LEFT JOIN
                    pages P
                ON 
                    A.idPage=P.id 
                WHERE
                    P.id=".$idPage." 
                ORDER BY 
                    A.".$trie." ".$ordreTrie;
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
          
                foreach($r as $k=>$v):
                    
                    if(!is_null($r[$k]['idCaroussel'])):
                       $D = new Diaporama($this->_db);
                       $ContentCarou = $D->getByIDModule($r[$k]['idCaroussel']);
                       
                       $BD = new BlocDownload($this->_db);
                       $ContentBD = $BD->getByIDRefModule($r[$k]['idCaroussel']);
                       
                       if($ContentCarou['success'] && count($ContentCarou['donnees'])>0):
                           $r[$k]['contentCarou']=$ContentCarou['donnees'];
                           $r[$k]['urlCarou']=BASE_PATH_UPLOAD_URL.'/modules/diaporamas/';
                           $r[$k]['typeCaroussel']='images';
                       elseif($ContentBD['success'] && count($ContentBD['donnees'])>0):
                           $r[$k]['contentCarou']=$ContentBD['donnees'];
                           $r[$k]['urlCarou']=BASE_PATH_UPLOAD_DIR.'/modules/blocDownload/';
                           $r[$k]['typeCaroussel']='documents';
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
    public function getArticlesEnfantPage($idPage,$idMenu,$trie,$ordreTrie){
        try {
            $sql="
                SELECT 
                    A.id, 
                    A.titre, 
                    A.contenu,
                    A.resume,
                    A.url,
                    A.description,
                    A.motsclefs,
                    A.image,
                    A.legende,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    C.Nom as CatNom,
                    P.Nom as PageNom,
                    1 as FromEnfant,
                    A.disposition,
                     A.showtitre as showTitle,
                    A.showpointilles as showPointille,
                    A.idCaroussel 
                FROM
                    articles A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                LEFT JOIN
                    pages P
                ON 
                    A.idPage=P.id 
                WHERE
                    P.id IN (SELECT idPage FROM menulinks WHERE idParent IN (SELECT id FROM menulinks where idPage=".$idPage." and idMenu=".$idMenu.") )
                ORDER BY 
                    A.".$trie." ".$ordreTrie;
//            die($sql);
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                foreach($r as $k=>$v):
                    
                    if(!is_null($r[$k]['idCaroussel'])):
                       $D = new Diaporama($this->_db);
                       $ContentCarou = $D->getByIDModule($r[$k]['idCaroussel']);
                      
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
    public function getArticle(){
        try {
            $sql="
                SELECT 
                    A.id, 
                    A.titre, 
                    A.contenu,
                    A.resume,
                    A.url,
                    A.description,
                    A.motsclefs,
                    A.image,
                    A.legende,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    C.Nom as CatNom,
                    C.id as idCategorie,
                    P.id as idPage,
                    P.Nom as PageNom,
                    A.disposition,
                     A.showtitre as showTitle,
                    A.showpointilles as showPointille,
                    A.idCaroussel 
                FROM
                    articles A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                LEFT JOIN
                    pages P
                ON 
                    A.idPage=P.id 
                WHERE
                    A.id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intIdArticle))){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                foreach($r as $k=>$v):
                    
                    if(!is_null($r[$k]['idCaroussel'])):
                       $D = new Diaporama($this->_db);
                       $ContentCarou = $D->getByIDModule($r[$k]['idCaroussel']);
                      
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
   
    public function search($search){
        try {
            $sql="
                SELECT 
                    A.id, 
                    A.titre, 
                    A.contenu,
                    A.resume,
                    A.url,
                    A.description,
                    A.motsclefs,
                    A.image,
                    A.legende,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    C.Nom as CatNom,
                    P.Nom as PageNom,
                    0 as FromEnfant,
                    A.disposition,
                    A.showtitre as showTitle,
                    A.showpointilles as showPointille,
                    A.idCaroussel,
                    M.url as lien
                FROM
                    articles A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                LEFT JOIN
                    pages P
                ON 
                    A.idPage=P.id 
                LEFT JOIN
                    menulinks M
                ON 
                    P.id=M.idPage 
                WHERE
                    A.titre like '%".$search."%' OR
                    A.resume like '%".$search."%' OR
                    A.contenu like '%".$search."%'
                GROUP BY lien
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
    public function setDescription($str){
        $this->_strDescription= $str;
    }
    public function setMotsCles($str){
        $this->_strMotsClefs = $str;
    }
    public function setImage($str){
        $this->_strImage = $str;
    }
    public function setIdCategorie($i){
        $this->_intIdCategorie = $i;
    }
    public function setIdPage($i){
        $this->_intIdPage = $i;
    }
    public function setIdArticle($i){
        $this->_intIdArticle= $i;
    }
    public function call(){
        $this->next->call();
    }
}
?>