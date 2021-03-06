<?php
namespace Models\Admin;
use Tools\StrTools;
use Models\Admin\Pages;

class MenuLinks extends \Slim\Middleware{

    private $_strNom = null;
    private $_intIdMenu = null;
    private $_intId = null;
    private $_intIdPage = null;
    private $_strUrl = null;
    private $_intDepth = null;
    private $_intOrdre = null;
    private $_intIdParent = null;
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    
    public function getMenuLinksByDepth(){
        try {
            $sql="
                SELECT 
                    M.id,
                    M.idMenu,
                    M.nom,
                    M.url,
                    M.depth,
                    M.ordre,
                    menu.nom as NomMenu,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    P.nom as nomPage,
                    P.id as idPage,
                    M.idParent,
                    M2.nom as NomParent
                FROM
                    menulinks M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                LEFT JOIN
                    menulinks M2
                ON 
                    M.idParent = M2.id 
                LEFT JOIN
                    menus menu
                ON 
                    M.idMenu = menu.id 
                WHERE
                    menu.id=:idMenu
				ORDER BY
                    ordre ASC
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            if($sth->execute(array(
				"idMenu"=>$this->_intIdMenu
			))){
                
                $r=$sth->fetchAll(\PDO::FETCH_ASSOC);	
				$rFinal=array();
				
				foreach($r as $k=>$v):
					if($r[$k]['depth']==0):
						if(!isset($rFinal[$r[$k]['depth']])) $rFinal[$r[$k]['depth']]=array();
						array_push($rFinal[$r[$k]['depth']],$r[$k]);
					else:
						if(!isset($rFinal[$r[$k]['depth']][$r[$k]['idParent']])) $rFinal[$r[$k]['depth']][$r[$k]['idParent']]=array();
						array_push($rFinal[$r[$k]['depth']][$r[$k]['idParent']],$r[$k]);					
					endif;
				endforeach;
				
                return array (
                    'success' => true
                    ,'donnees' => (count($rFinal)>0) ? $rFinal : null
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
	public function getMenuLinks(){
        try {
            $sql="
                SELECT 
                    M.id,
                    M.idMenu,
                    M.nom,
                    M.url,
                    M.depth,
                    M.ordre,
                    menu.nom as NomMenu,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    P.nom as nomPage,
                    P.id as idPage,
                    M.idParent,
                    M2.nom as NomParent
                FROM
                    menulinks M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                LEFT JOIN
                    menulinks M2
                ON 
                    M.idParent = M2.id 
                LEFT JOIN
                    menus menu
                ON 
                    M.idMenu = menu.id 
                WHERE
                    menu.id=:idMenu
                ORDER BY
                    depth ASC,ordre ASC
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            if($sth->execute(array("idMenu"=>$this->_intIdMenu))){
                
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
    public function getMenuLinksDisplayByIdMenu(){
        try {
            $sql="
               SELECT 
                    M.id,
                    M.idMenu,
                    M.nom,
                    M.url,
                    M.depth,
                    M.ordre,
                    menu.nom as NomMenu,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    P.nom as nomPage,
                    P.id as idPage,
                    M.idParent,
                    M2.nom as NomParent
                FROM
                    menulinks M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                LEFT JOIN
                    menulinks M2
                ON 
                    M.idParent = M2.id 
                LEFT JOIN
                    menus menu
                ON 
                    M.idMenu = menu.id 
                WHERE
                    M.idMenu=:i
                Order By 
                    Depth
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intIdMenu))){
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
    public function getMenuLink(){
        try {
            $sql="
               SELECT 
                    M.id,
                    M.idMenu,
                    M.nom,
                    M.url,
                    M.depth,
                    M.ordre,
                    menu.nom as NomMenu,
                    DATE_FORMAT(M.dateAjout,'%d/%m/%Y %H:%i') as dateAjout,
                    P.nom as nomPage,
                    P.id as idPage,
                    M.idParent,
                    M2.nom as NomParent
                FROM
                    menulinks M
                LEFT JOIN
                    pages P
                ON 
                    M.idPage = P.id 
                LEFT JOIN
                    menulinks M2
                ON 
                    M.idParent = M2.id 
                LEFT JOIN
                    menus menu
                ON 
                    M.idMenu = menu.id 
                WHERE
                    M.id=:i
                ";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if($sth->execute(array("i"=>  $this->_intId))){
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
    
    public function addMenu () {
		
        if ( is_null ( $this->_strNom ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le nom est obligatoire'
            );
        
       
        if ( is_null ( $this->_intIdMenu ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le menu associé est obligatoire'
            );
        
        try {
            $sql="
                INSERT INTO 
                    menulinks
                (
                    idMenu,
                    idPage,
                    depth,
                    ordre,
                    url,
                    nom,
                    dateAjout,
                    idParent
                ) 
                VALUES 
                    (
                    :idMenu,
                    :idPage,
                    :depth,
                    :ordre,
                    :url,
                    :nom,
                    NOW(),
                    :idParent
                )
            ";
            $P = new Pages($this->_db);
			$urlP = $P->getPageById($this->_intIdPage);
			if($urlP['success'] && count($urlP['donnees'])>0):
				$url = StrTools::toAscii($urlP['donnees']["Nom"]);
				// die($url);
			else:
				$url = StrTools::toAscii($this->_strNom);
            endif;
			
            $countUrl = $this->countByUrl($url,$this->_intIdPage,null);
            if($countUrl['success']):
                if($countUrl['donnees']!=0):
                    $url=$url.'-'.$countUrl['donnees'];
                endif;
            endif;
            
            if($this->_intIdPage==1) $url="index";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            $sth->bindParam(':nom', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':url', $url, \PDO::PARAM_STR,255);
            $sth->bindParam(':idMenu', $this->_intIdMenu, \PDO::PARAM_INT);
            $sth->bindParam(':idPage', $this->_intIdPage, \PDO::PARAM_INT);
            $sth->bindParam(':idParent', $this->_intIdParent, \PDO::PARAM_INT);
            
            // GESTION DE L'ORDRE
            $getParent=$this->countByIdParent($this->_intIdParent,$this->_intIdMenu);
            if($getParent['success']):
                $ordre=$getParent['donnees'];
            else:
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'Une erreur est survenue lors de la création du lien'
                );
            endif;
            $sth->bindParam(':ordre', $ordre, \PDO::PARAM_INT);
            
            //Gestion de la Profondeur
            $depth=0;
            if(!is_null($this->_intIdParent)):
                $depthParent = $this->getDepthByIDParent($this->_intIdParent);
               
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
            $sth->bindParam(':depth', $depth, \PDO::PARAM_INT);
            
            
            
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
    
    public function countByIdParent($idParent,$idMenu,$idEnCours=null) {
        try {
            
            $sql=(!is_null($idParent)) ? 
                "SELECT (
                        SELECT ordre FROM menulinks 
                        WHERE id=:i AND idMenu=:idm ".(!is_null($idEnCours) ? ' AND id!='.$idEnCours : '').") as Ordre,
                        (SELECT COUNT(*) FROM menulinks WHERE idParent=:i AND idMenu=:idm ".(!is_null($idEnCours) ? ' AND id!='.$idEnCours : '').") as TOTAL
                " 
                : 
                        "SELECT COUNT(*) as TOTAL FROM menulinks WHERE idParent IS NULL  AND idMenu=:idm".(!is_null($idEnCours) ? ' AND id!='.$idEnCours : '');
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            
            if(!is_null($idParent)):
                $sth->bindParam(':i',$idParent, \PDO::PARAM_INT);
                
            endif;
            $sth->bindParam(':idm',$idMenu, \PDO::PARAM_INT);
            
            if( $sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                
                if(!is_null($idParent)):
                return array (
                        'success' => true
                        ,'donnees' => $r['TOTAL']+1
                        ,'message' => null
                    );
                else:
                    return array (
                        'success' => true
                        ,'donnees' => (count($r) >= 0) ? (is_null($r['TOTAL']+1) ? 1 : $r['TOTAL']+1) : 1
                        ,'message' => null
                    );
                endif;
            }else{
		print_r($sth->errorInfo());
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
    public function countByUrl($url,$idPage,$id=null) {
        try {
            
            $sql="SELECT COUNT(*) as TOTAL FROM menulinks WHERE url LIKE '".$url."__' AND idPage!=".$idPage;
            if(!is_null($id)) $sql.=' and id!='.$id;
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            if( $sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                
                
                return array (
                        'success' => true
                        ,'donnees' => $r['TOTAL']
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
    public function getDepthByIDParent($idParent){
        try {
            $sql="SELECT depth FROM menulinks WHERE id=:i";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':i',$idParent, \PDO::PARAM_INT);
            
            if( $sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => $r['depth']
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
    
    public function getUrlByIDPage($idPage){
        try {
            $sql="SELECT Nom FROM pages WHERE id=:i";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':i',$idPage, \PDO::PARAM_INT);
            
            if( $sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                return array (
                    'success' => true
                    ,'donnees' => $r['Nom']
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
    
    public function updateMenuLink () {
	
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
                ,'message' => 'L\'identifiant est obligatoire'
            );
		
        try {
            $sql="
                update
                    menulinks
                SET
                    nom=:n,
                    idPage=:idp,
                    url=:url,
                    idParent=:idParent,
                    ordre=:ordre,
                    depth=:depth
                WHERE
                    id=:id
            ";
            
            $generateLink = $this->getUrlByIDPage($this->_intIdPage);
            if($generateLink['success']):
                $url = StrTools::toAscii($generateLink['donnees']);
            else:
                $url = StrTools::toAscii($this->_strNom);
            endif;
            $countUrl = $this->countByUrl($url,$this->_intIdPage,$this->_intId);
            if($countUrl['success']):
                if($countUrl['donnees']!=0):
                   
                    $url=$url.'-'.$countUrl['donnees'];
                endif;
            endif;
            if($this->_intIdPage==1) $url="index";
            // GESTION DE L'ORDRE
            $getParent=$this->countByIdParent($this->_intIdParent,$this->_intIdMenu,$this->_intId);
           
            if($getParent['success']):
                $ordre=$getParent['donnees'];
            else:
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => 'Une erreur est survenue lors de la création du lien'
                );
            endif;
            
            //Gestion de la Profondeur
            $depth=0;
            if(!is_null($this->_intIdParent)):
                $depthParent = $this->getDepthByIDParent($this->_intIdParent);
               
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
            
            
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':depth', $depth, \PDO::PARAM_INT);
            $sth->bindParam(':ordre', $ordre, \PDO::PARAM_INT);
            $sth->bindParam(':n', $this->_strNom, \PDO::PARAM_STR,255);
            $sth->bindParam(':url', $url, \PDO::PARAM_STR,255);
            $sth->bindParam(':idp', $this->_intIdPage, \PDO::PARAM_INT);
            $sth->bindParam(':idParent', $this->_intIdParent, \PDO::PARAM_INT);
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
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function delByIdParent() {
	
        if ( is_null ( $this->_intIdParent ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le menu parent est obligatoire'
            );
		
        try {
            $sql="
                delete FROM
                    menulinks
                WHERE
                    idParent=:idMenu
            ";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':idMenu', $this->_intIdParent, \PDO::PARAM_INT);
            
            if($sth->execute()){
                return array (
                    'success' => true
                    ,'donnees' => null
                    ,'message' => null
                );
            }else{
//                print_r($sth->errorInfo());
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
    public function delByIdMenu() {
	
        if ( is_null ( $this->_intIdParent ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le menu parent est obligatoire'
            );
		
        try {
            $sql="
                delete
                    menulinks
                WHERE
                    idMenu=:idMenu
            ";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':idMenu', $this->_intIdParent, \PDO::PARAM_INT);
            
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
    public function delMenu () {
	
        if ( is_null ( $this->_intId ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le lien \'a pas été reconnu'
            );
        if ( is_null ( $this->_intIdMenu ) )
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Le menu n\'a pas été reconnu'
            );
		
        try {
            $sqlInit="SELECT ordre,idParent FROM `menulinks` where id=:id AND idMenu=:idMenu LIMIT 0,1";
            $sth=$this->_db->prepare($sqlInit,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->bindParam(':id', $this->_intId, \PDO::PARAM_INT);
            $sth->bindParam(':idMenu', $this->_intIdMenu, \PDO::PARAM_INT);
            if($sth->execute()){
                $r=$sth->fetch(\PDO::FETCH_ASSOC);
                if(is_null($r['idParent'])):
                    $update = "UPDATE `menulinks` SET ordre=ordre-1 WHERE depth=0 AND idMenu=".$this->_intIdMenu." and ordre>".$r['ordre'];
                else:
                    $update = "UPDATE `menulinks` SET ordre=ordre-1 WHERE ordre>".$r['ordre']." AND idMenu=".$this->_intIdMenu." AND idParent=".$r['idParent'];
                endif;
                
                $sth2=$this->_db->prepare($update,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
                if($sth2->execute()){
                    $delete = "DELETE FROM `menulinks` WHERE id=:id";
                    $sth3=$this->_db->prepare($delete,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
                    $sth3->bindParam(':id', $this->_intId, \PDO::PARAM_INT);
                    if($sth3->execute()){
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
                }else{
                    print_r($sth->errorInfo());
                    return array (
                        'success' => false
                        ,'donnees' => null
                        ,'message' => null
                    );
                }
            
            }else{
                print_r($sth->errorInfo());
                return array (
                    'success' => false
                    ,'donnees' => null
                    ,'message' => null
                );
            }
            $sql="DELETE FROM menulinks WHERE id=:id";
            $sql="DELETE FROM menulinks WHERE id=:id";
            
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
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
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    public function setNom ( $str) {
        $this->_strNom = trim ( $str);
    }
    public function setUrl( $str) {
        $this->_strUrl = trim ( $str);
    }
    public function setDepth($i){
        $this->_intDepth = $i;
    }
    public function setOrdre($i){
        $this->_intOrdre = $i;
    }
    public function setId($i){
        $this->_intId = $i;
    }
    public function setIdMenu($i){
        $this->_intIdMenu = $i;
    }
    public function setIdPage($i){
        $this->_intIdPage = $i;
    }
    public function setIdParent($i){
        $this->_intIdParent = $i;
    }
    
    public function call(){
        $this->next->call();
    }
}
?>