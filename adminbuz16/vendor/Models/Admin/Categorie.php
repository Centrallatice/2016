<?php

namespace Models\Admin;

class Categorie extends \Slim\Middleware{
    private $_db = null;
    private $_titre = null;
    private $_description = null;
    private $_icone= null;
    private $_color = null;
    private $_idParent = null;
    private $_id = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getAll () {
        try {
            $sql="
                SELECT 
                    C1.id,
                    C1.Statut,
                    C1.idParent,
                    C1.Description,
                    C1.Nom,
                    C1.Ordre,
                    C1.Depth,
                    C1.color,
                    C1.icone,
                    C2.Nom as NomParent,
                    DATE_FORMAT(C1.DateAjout,'%d/%m/%Y %H:%i') as DateAjout
                FROM 
                    categories C1
                    LEFT JOIN
                    categories C2
                    ON C1.idParent = C2.id 
                order by 
                    C1.Ordre ASC";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
            if($sth){
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => (count($r) > 0) ? $r : array()
                    ,'message' => null
                );

            }else{
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function getAllDisplay() {
        try {
            $sql="
                SELECT 
                    C1.id,
                    C1.Statut,
                    C1.idParent,
                    C1.Description,
                    C1.Nom,
                    C1.Ordre,
                    C1.Depth,
                    C1.color,
                    C1.icone,
                    C2.Nom as NomParent,
                    DATE_FORMAT(C1.DateAjout,'%d/%m/%Y') as DateAjout
                FROM 
                    categories C1
                    LEFT JOIN
                    categories C2
                    ON C1.idParent = C2.id 
                order by 
                    C1.Ordre ASC";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
            if($sth){
                $resFinal = array();
                while($r=$sth->fetch(\PDO::FETCH_ASSOC)):
                    $tiret='';
                    if($r['Depth']>0):
                        for($i=0;$i<$r['Depth'];$i++):
                            $tiret.='--';
                        endfor;
                    endif;
                    $r['prefixe']=$tiret;
                    $r['Nom']=$tiret.' '.$r['Nom'];
                    $resFinal[]=$r;
                endwhile;
                return array (
                    'success' => true
                    ,'donnees' => (count($resFinal) > 0) ? $resFinal : array()
                    ,'message' => null
                );

            }else{
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function getByID($id) {
        try {
            $sql="
                SELECT 
                    C1.id,
                    C1.Statut,
                    C1.idParent,
                    C1.Description,
                    C1.Nom,
                    C1.Ordre,
                    C2.Nom,
                    C1.color,
                    C1.icone,
                    DATE_FORMAT(C1.DateAjout,'%d/%m/%Y') as DateAjout
                FROM 
                    categories C1
                    LEFT JOIN
                    categories C2
                    ON C1.idParent = C2.id
                WHERE 
                    id=:i";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':i',$id, \PDO::PARAM_INT);
            if( $sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => (count($r) > 0) ? $r : array()
                    ,'message' => null
                );
            }else{
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function countByIdParent($idParent) {
        try {
            $sql=(!is_null($idParent)) ? "SELECT (SELECT Ordre FROM categories WHERE id=:i) as Ordre,(SELECT COUNT(*) FROM categories WHERE idParent=:i) as TOTAL" : "SELECT COUNT(*) as TOTAL FROM categories WHERE idParent IS NULL";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            if(!is_null($idParent)):
                $sth->bindParam(':i',$idParent, \PDO::PARAM_INT);
            endif;
            
            if( $sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                
                if(!is_null($idParent)):
                return array (
                        'success' => true
                        ,'donnees' => $r['Ordre'].'.'.($r['TOTAL']+1)
                        ,'message' => null
                    );
                else:
                    return array (
                        'success' => true
                        ,'donnees' => (count($r) >= 0) ? (is_null($r['TOTAL']) ? 0 : $r['TOTAL']) : 0
                        ,'message' => null
                    );
                endif;
            }else{
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function getDepthByIDParent($idParent){
        try {
            $sql="SELECT Depth FROM categories WHERE id=:i";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':i',$idParent, \PDO::PARAM_INT);
            
            if( $sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => $r['Depth']
                    ,'message' => null
                );
            }else{
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function addCategorie () {
        try {
            $sql="
                INSERT INTO 
                    categories(idParent,Nom,Description,DateAjout,Statut,Ordre,Depth,color,icone) 
                VALUES 
                    (:idP,:N,:Desc,NOW(),1,:Ordre,:Depth,:color,:icone)";
                    
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':idP', $this->_idParent, \PDO::PARAM_INT);
            $sth->bindParam(':N', $this->_titre, \PDO::PARAM_STR,255);
            $sth->bindParam(':Desc', $this->_description, \PDO::PARAM_STR);
            $sth->bindParam(':color', $this->_color, \PDO::PARAM_STR,10);
            $sth->bindParam(':icone', $this->_icone, \PDO::PARAM_STR);
            
            // GESTION DE L'ORDRE
            $getParent=$this->countByIdParent($this->_idParent);
            if($getParent['success']):
                $ordre=$getParent['donnees'];
            else:
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'Une erreur est survenue lors de la création de la catégorie'
                );
            endif;
            $sth->bindParam(':Ordre', $ordre, \PDO::PARAM_INT);
            
            //Gestion de la Profondeur
            $depth=0;
            if(!is_null($this->_idParent)):
                $depthParent = $this->getDepthByIDParent($this->_idParent);
                if($depthParent['success']):
                    $depth = $depthParent['donnees']+1;
                else:
                    return array (
                        'success' => false
                        ,'donnees' => null
                        ,'message' => 'Une erreur est survenue lors de la création de la catégorie'
                    );
                endif;
            endif;
            $sth->bindParam(':Depth', $depth, \PDO::PARAM_INT);
            if($sth->execute()){
                $lastId = $this->_db->lastInsertId();
                return array (
                    'success' => true
                    ,'donnees' => $lastId
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
                ,'message' => $exception->getMessage()
            );
        }
    }
    public function updateCategorie () {
        try {
            $sql="
                UPDATE 
                    categories
                SET
                    idParent=:idP,
                    Nom=:N,
                    Description=:Desc,
                    Depth=:Depth,
                    color=:Color,
                    icone=:Icone
                WHERE
                    id=:id";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':idP', $this->_idParent, \PDO::PARAM_INT);
            $sth->bindParam(':N', $this->_titre, \PDO::PARAM_STR,255);
            $sth->bindParam(':Desc', $this->_description, \PDO::PARAM_STR);
            $sth->bindParam(':Color', $this->_color, \PDO::PARAM_STR,10);
            $sth->bindParam(':Icone', $this->_icone, \PDO::PARAM_STR);
            $sth->bindParam(':id', $this->_id, \PDO::PARAM_INT);
           
            //Gestion de la Profondeur
            $depth=0;
            if(!is_null($this->_idParent)):
                $depthParent = $this->getDepthByIDParent($this->_idParent);
                if($depthParent['success']):
                    $depth = $depthParent['donnees']+1;
                else:
                    return array (
                        'success' => false
                        ,'donnees' => null
                        ,'message' => 'Une erreur est survenue lors de la création de la catégorie'
                    );
                endif;
            endif;
            $sth->bindParam(':Depth', $depth, \PDO::PARAM_INT);
            
            
            if($sth->execute()){
                
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
                ,'message' => $exception->getMessage()
            );
        }
    }
    public function toggleEtat ($id,$etat) {
        try {
            $sql="
                UPDATE 
                    categories
                SET
                    Statut=:s
                WHERE
                    id=:i ";
            

            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':s', $etat, \PDO::PARAM_INT);
            $sth->bindParam(':i', $id, \PDO::PARAM_INT);
           
            
            
            if($sth->execute()){
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
                ,'message' => $exception->getMessage()
            );
        }
    }
	
	public function deleteCategorie () {
        try {
            if(is_null($this->_id)):
                    return array (
                            'success' => false
                            ,'donnees' => null
                            ,'message' => "La catégorie à supprimer n'a pas été reconnue"
                    );
            endif;
            $sql="
                DELETE FROM
                    categories
                WHERE
                    id=:i
                OR
                    idParent=:i";
            

            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':i', $this->_id, \PDO::PARAM_INT);
            
            if($sth->execute()){
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
                ,'message' => $exception->getMessage()
            );
        }
    }
    
    public function setTitre( $strTitre) {
        $this->_titre = trim ( $strTitre);
    }
    public function setDesc ( $strDesc) {
        $this->_description = trim ($strDesc);
    }
    public function setColor ( $strColor) {
        $this->_color= trim ($strColor);
    }
    public function setIcone ( $strIcone) {
        $this->_icone = trim ($strIcone);
    }
    public function setIdParent( $intP) {
        $this->_idParent = $intP;
    }
    public function setId($intID) {
        $this->_id = $intID;
    }
    public function call(){
        $this->next->call();
    }
}
?>