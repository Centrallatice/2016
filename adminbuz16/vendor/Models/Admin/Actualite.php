<?php

namespace Models\Admin;
use Tools\StrTools;

class Actualite extends \Slim\Middleware{

    private $_strTitre = null;
    private $_strContent = null;
    private $_strResume = null;
    private $_strImage = null;
    private $_intIdCategorie = null;
    private $_intIdActu = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getPictureFromIDActu(){
        try {
             if ( is_null ( $this->_intIdActu) )
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'actualité n\'a pas été reconnnu'
                );

            $sql="
                SELECT 
                    image
                FROM
                    actualites
                WHERE
                    id=:i";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>$this->_intIdActu))){
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
    public function getActualites($trie,$ordreTrie){
        try {
            $sql="
                SELECT 
                    A.id, A.titre, A.contenu,A.image,A.resume,A.url,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,C.Nom as CatNom
                FROM
                    actualites A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id 
                ORDER BY 
                    A.".$trie." ".$ordreTrie;
            
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
    public function delActualites(){
        try {
            if ( is_null ( $this->_intIdActu) )
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'actualité n\'a pas été reconnnu'
                );
            $sql="
                DELETE FROM
                    actualites
                WHERE
                    id=:i";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>$this->_intIdActu))){
                return array (
                    'success' => true
                    ,'donnees' => null
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
    
    public function addActualite () {
		
        if ( is_null ( $this->_strTitre ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le titre est obligatoire'
            );
        
        if ( is_null ( $this->_strContent ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le contenu est obligatoire'
            );
        if ( is_null ( $this->_strResume ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le contenu est obligatoire'
            );
        if ( is_null ( $this->_intIdCategorie ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La catégorie est obligatoire'
            );
		
        try {
            $sql="
                INSERT INTO 
                    actualites
                    (titre, contenu, dateAjout,resume, idCategorie, idAuteur,image,url) 
                VALUES 
                    (:t,:c,NOW(),:r,:idc,:Auteur,:image,:url)
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':t', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':c', $this->_strContent, \PDO::PARAM_STR);
            $sth->bindParam(':r', $this->_strResume, \PDO::PARAM_STR);
            $sth->bindParam(':image', $this->_strImage, \PDO::PARAM_STR);
            $sth->bindParam(':idc', $this->_intIdCategorie, \PDO::PARAM_INT);
            $sth->bindParam(':Auteur', $_SESSION['DataUser']['id'], \PDO::PARAM_INT);
			$url = StrTools::toAscii($this->_strTitre);
            $existe = $this->urlExiste($url);
            if($existe['success']):
                if($existe['donnees']['TOTAL']!=0) $url.='-'.$existe['donnees']['TOTAL'];
            endif;
			$sth->bindParam(':url', $url, \PDO::PARAM_STR);
            
			if($sth->execute()){
                $lastId = $this->_db->lastInsertId();
                return array (
                    'success' => true
                    ,'donnees' => $lastId
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
    
    public function updateActualite () {
	 if ( is_null ( $this->_intIdActu) )
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'actualité n\'a pas été reconnnu'
                );
        if ( is_null ( $this->_strTitre ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le titre est obligatoire'
            );
        
        if ( is_null ( $this->_strContent ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le contenu est obligatoire'
            );
        if ( is_null ( $this->_strResume ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le contenu est obligatoire'
            );
        if ( is_null ( $this->_intIdCategorie ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'La catégorie est obligatoire'
            );
		
        try {
            $sql="
                update
                    actualites
                SET
                    titre=:t, 
                    contenu=:c,
                    resume=:r,
                    idCategorie=:idc,
                    image=:image,
					url=:url
                WHERE
                    id=:idActu
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
			
			$url = StrTools::toAscii($this->_strTitre);
            $existe = $this->urlExiste($url,$this->_intIdActu);
            if($existe['success']):
                if($existe['donnees']['TOTAL']!=0) $url.='-'.$existe['donnees']['TOTAL'];
            endif;
			
            $sth->bindParam(':t', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':c', $this->_strContent, \PDO::PARAM_STR);
            $sth->bindParam(':r', $this->_strResume, \PDO::PARAM_STR);
            $sth->bindParam(':image', $this->_strImage, \PDO::PARAM_STR);
            $sth->bindParam(':idc', $this->_intIdCategorie, \PDO::PARAM_INT);
            $sth->bindParam(':idActu', $this->_intIdActu, \PDO::PARAM_INT);
            $sth->bindParam(':url', $url, \PDO::PARAM_STR);
            
            if($sth->execute()){
                return array (
                    'success' => true
                    ,'donnees' => null
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
     public function urlExiste($u,$id=null){
        try {
            $sql="
                SELECT 
                    COUNT(*) as TOTAL
                FROM
                    actualites
                WHERE
                    url LIKE '".$u."%'";
            if(!is_null($id)) $sql.=' AND id!='.$id;
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute()){
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