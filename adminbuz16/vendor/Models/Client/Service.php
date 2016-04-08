<?php

namespace Models\Admin;


class Service extends \Slim\Middleware{

    private $_intId = null;
    private $_strNom = null;
    private $_strMail = null;
    private $_strAdresseRue = null;
    private $_strAdresseVille = null;
    private $_strAdresseCP = null;
    private $_strTelephone = null;
    private $_strTelephone2 = null;
    private $_strLienGGMap = null;
    private $_strIframeGGMap = null;
    private $_strHoraires = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getServices($trie,$ordreTrie){
        try {
            $sql="
                SELECT 
                    *
                FROM
                    services
                ORDER BY 
                    ".$trie." ".$ordreTrie;
            
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
    public function getService(){
        try {
            $sql="
                SELECT 
                    *
                FROM
                    services
                WHERE
                    id=:i LIMIT 0,1";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>$this->_intId))){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
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
    public function addService () {
		
        if ( is_null ( $this->_strNom ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le nom est obligatoire'
            );
        try {
            $sql="
                INSERT INTO `services`
                (`nom`, `email`, `adresserue`, `adresseville`, `adressecp`, `telephone`, `telephone2`, `lienggmap`, `iframeggmap`,`horaires`)
                VALUES 
                    (
                    :nom,
                    :email,
                    :adresserue,
                    :adresseville,
                    :adressecp,
                    :telephone,
                    :telephone2,
                    :lienggmap,
                    :iframeggmap,
                    :horaires
                    )
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':nom', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':email', $this->_strMail, \PDO::PARAM_STR);
            $sth->bindParam(':adresserue', $this->_strAdresseRue, \PDO::PARAM_STR);
            $sth->bindParam(':adresseville', $this->_strAdresseVille, \PDO::PARAM_STR);
            $sth->bindParam(':adressecp', $this->_strAdresseCP, \PDO::PARAM_STR);
            $sth->bindParam(':telephone', $this->_strTelephone, \PDO::PARAM_STR);
            $sth->bindParam(':telephone2', $this->_strTelephone2, \PDO::PARAM_STR);
            $sth->bindParam(':lienggmap', $this->_strLienGGMap, \PDO::PARAM_STR);
            $sth->bindParam(':iframeggmap', $this->_strIframeGGMap, \PDO::PARAM_STR);
            $sth->bindParam(':horaires', $this->_strHoraires, \PDO::PARAM_STR);
            
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
                ,'message' => 'Une erreur est survenue lors de la création du service'
            );
        }
    }
	
	public function updateService () {
		
        if ( is_null ( $this->_strNom ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le nom est obligatoire'
            );
		if ( is_null ( $this->_intId ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'L\'identfiant est obligatoire'
            );
        try {
            $sql="
                UPDATE `services`
					SET `nom`=:nom, 
						`email`=:email, 
						`adresserue`=:adresserue, 
						`adresseville`=:adresseville, 
						`adressecp`=:adressecp, 
						`telephone`=:telephone, 
						`telephone2`=:telephone2, 
						`lienggmap`=:lienggmap, 
						`iframeggmap`=:iframeggmap,
						`horaires`=:horaires
					WHERE 
						id=:id
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':nom', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':email', $this->_strMail, \PDO::PARAM_STR);
            $sth->bindParam(':adresserue', $this->_strAdresseRue, \PDO::PARAM_STR);
            $sth->bindParam(':adresseville', $this->_strAdresseVille, \PDO::PARAM_STR);
            $sth->bindParam(':adressecp', $this->_strAdresseCP, \PDO::PARAM_STR);
            $sth->bindParam(':telephone', $this->_strTelephone, \PDO::PARAM_STR);
            $sth->bindParam(':telephone2', $this->_strTelephone2, \PDO::PARAM_STR);
            $sth->bindParam(':lienggmap', $this->_strLienGGMap, \PDO::PARAM_STR);
            $sth->bindParam(':iframeggmap', $this->_strIframeGGMap, \PDO::PARAM_STR);
            $sth->bindParam(':horaires', $this->_strHoraires, \PDO::PARAM_STR);
            $sth->bindParam(':id', $this->_intId, \PDO::PARAM_INT);
            
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
                ,'message' => 'Une erreur est survenue lors de la création du service'
            );
        }
    }
    public function deleteService () {
		
        
        try {
            $sql="
                DELETE FROM `services` WHERE id=:i
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $sth->bindParam(':i', $this->_intId, \PDO::PARAM_INT);
            
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
                ,'message' => 'Une erreur est survenue lors de la création du service'
            );
        }
    }
    public function get_intId(){
            return $this->_intId;
    }

    public function set_intId($_intId){
            $this->_intId = $_intId;
    }

    public function get_strNom(){
            return $this->_strNom;
    }

    public function set_strNom($_strNom){
            $this->_strNom = $_strNom;
    }

    public function get_strMail(){
            return $this->_strMail;
    }

    public function set_strMail($_strMail){
            $this->_strMail = $_strMail;
    }

    public function get_strAdresseRue(){
            return $this->_strAdresseRue;
    }

    public function set_strAdresseRue($_strAdresseRue){
            $this->_strAdresseRue = $_strAdresseRue;
    }

    public function get_strAdresseVille(){
            return $this->_strAdresseVille;
    }

    public function set_strAdresseVille($_strAdresseVille){
            $this->_strAdresseVille = $_strAdresseVille;
    }

    public function get_strAdresseCP(){
            return $this->_strAdresseCP;
    }

    public function set_strAdresseCP($_strAdresseCP){
            $this->_strAdresseCP = $_strAdresseCP;
    }

    public function get_strTelephone(){
            return $this->_strTelephone;
    }

    public function set_strTelephone($_strTelephone){
            $this->_strTelephone = $_strTelephone;
    }

    public function get_strTelephone2(){
            return $this->_strTelephone2;
    }

    public function set_strTelephone2($_strTelephone2){
            $this->_strTelephone2 = $_strTelephone2;
    }

    public function get_strLienGGMap(){
            return $this->_strLienGGMap;
    }

    public function set_strLienGGMap($_strLienGGMap){
            $this->_strLienGGMap = $_strLienGGMap;
    }

    public function get_strIframeGGMap(){
            return $this->_strIframeGGMap;
    }

    public function set_strIframeGGMap($_strIframeGGMap){
            $this->_strIframeGGMap = $_strIframeGGMap;
    }
    public function get_strHoraires(){
            return $this->_strHoraires;
    }

    public function set_strHoraires($_strHoraires){
            $this->_strHoraires = $_strHoraires;
    }
    
    public function call(){
        $this->next->call();
    }
}
?>