<?php

namespace Models\Admin;

class Agenda extends \Slim\Middleware{

    private $_strTitre = null;
    private $_strContent = null;
    private $_strResume = null;
    private $_intIdCategorie = null;
    private $_intIdAgenda = null;
    private $_dDateEv = null;
    private $_dDateEvFin = null;
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
                    DATE_FORMAT(A.dateEvenement,'%d/%m/%Y') as dateEvenement,
                    DATE_FORMAT(A.dateEvenementFin,'%d/%m/%Y') as dateEvenementFin,
                    C.Nom as CatNom,
                    DATEDIFF(A.dateEvenement,A.dateEvenementFin) as MemeJour
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
    public function getAgenda(){
        try {
            $sql="
                SELECT 
                    A.id, 
                    A.titre, 
                    A.contenu,
                    A.resume,
                    DATE_FORMAT(A.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    DATE_FORMAT(A.dateEvenement,'%d/%m/%Y %H:%i') as dateEvenement,
                    DATE_FORMAT(A.dateEvenementFin,'%d/%m/%Y %H:%i') as dateEvenementFin,
                    A.dateEvenement as dEvenementN,
                    A.dateEvenementFin as dEvenementF,
                    C.Nom as CatNom,
                    A.idCategorie
                FROM
                    evenements A
                LEFT JOIN
                    categories C
                ON 
                    A.idCategorie = C.id
                WHERE
                    A.id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intIdAgenda))){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                $date = new \DateTime($r['dEvenementN']);
                $finalDate=$date->format("d/m/Y");
                $r['explodedDate']=  explode("/",$finalDate);
                
                $datef = new \DateTime($r['dEvenementF']);
                $finalDatef=$datef->format("d/m/Y");
                $r['explodedDateFin']=  explode("/",$finalDatef);
                
                
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
    public function delAgendas(){
        try {
            if ( is_null ( $this->_intIdAgenda) )
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'L\'actualité n\'a pas été reconnnu'
                );
            $sql="
                DELETE FROM
                    evenements
                WHERE
                    id=:i";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>$this->_intIdAgenda))){
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
    
    public function addAgenda () {
		
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
                    evenements
                    (titre, contenu, dateAjout,resume, idCategorie,dateEvenement,dateEvenementFin) 
                VALUES 
                    (:t,:c,NOW(),:r,:idc,:dateEvenement,:dateEvenementFin)
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $date = new \DateTime($this->_dDateEv);
            $date->add(new \DateInterval('PT13H'));
            $finalDate=$date->format("Y-m-d H:i:s");
            
            $datef = new \DateTime($this->_dDateEvFin);
            $datef->add(new \DateInterval('PT13H'));
            $finalDatef=$datef->format("Y-m-d H:i:s");
            
            $sth->bindParam(':t', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':c', $this->_strContent, \PDO::PARAM_STR);
            $sth->bindParam(':r', $this->_strResume, \PDO::PARAM_STR);
            $sth->bindParam(':idc', $this->_intIdCategorie, \PDO::PARAM_INT);
            $sth->bindParam(':dateEvenement', $finalDate, \PDO::PARAM_STR);
            $sth->bindParam(':dateEvenementFin', $finalDatef, \PDO::PARAM_STR);
            
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
    
    public function updateAgenda() {
	 if ( is_null ( $this->_intIdAgenda) )
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
                    evenements
                SET
                    titre=:t, 
                    contenu=:c,
                    resume=:r,
                    idCategorie=:idc,
                    dateEvenement=:dateEvenement,
                    dateEvenementFin=:dateEvenementFin
                WHERE
                    id=:idActu
            ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
           
            $date = new \DateTime($this->_dDateEv);
            $date->add(new \DateInterval('PT13H'));
            $finalDate=$date->format("Y-m-d H:i:s");
            
            $datef = new \DateTime($this->_dDateEvFin);
            $datef->add(new \DateInterval('PT13H'));
            $finalDatef=$datef->format("Y-m-d H:i:s");
            
            $sth->bindParam(':t', $this->_strTitre, \PDO::PARAM_STR,255);
            $sth->bindParam(':c', $this->_strContent, \PDO::PARAM_STR);
            $sth->bindParam(':r', $this->_strResume, \PDO::PARAM_STR);
            $sth->bindParam(':idc', $this->_intIdCategorie, \PDO::PARAM_INT);
            $sth->bindParam(':dateEvenement', $finalDate, \PDO::PARAM_STR);
            $sth->bindParam(':dateEvenementFin', $finalDatef, \PDO::PARAM_STR);
            $sth->bindParam(':idActu', $this->_intIdAgenda, \PDO::PARAM_INT);
            
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
    public function setDateEvenementFin($d){
        $this->_dDateEvFin= $d;
    }
    public function call(){
        $this->next->call();
    }
}
?>