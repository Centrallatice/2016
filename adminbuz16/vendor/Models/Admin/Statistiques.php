<?php

namespace Models\Admin;

class Statistiques extends \Slim\Middleware{
    private $_db = null;

    public function  __construct ($db) {
        $this->_db=$db;
    }
    public function getStatsHome () {
        try {
            $sql="
				SELECT 
            (SELECT COUNT(*) FROM pages) as NbPages,
            (SELECT COUNT(*) FROM articles) as NbArticles,
            (SELECT COUNT(*) FROM evenements WHERE dateEvenement >= NOW()) as NbEvent,
            (SELECT DISTINCT COUNT(*) FROM newsletteremail) as NbInscrits,
            (SELECT Count(DISTINCT(ipuser))  FROM statistiques)  as TotalVisiteurUnique,
            (SELECT Count(DISTINCT(ipuser))  FROM statistiques WHERE DATE_FORMAT(datevisite,'%m')=DATE_FORMAT(NOW(),'%m')
AND DATE_FORMAT(datevisite,'%Y')=DATE_FORMAT(NOW(),'%Y'))  as UserUniqueMois
			";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
            $r=$sth->fetch(\PDO::FETCH_ASSOC);
            return array (
				'success' => true
                ,'donnees' => $r
                ,'message' => null
            );
        } catch ( Exception $exception ) {
            return array (
                'success' => false
                ,'donnees' => null
                ,'message' => 'Une erreur est survenue lors de la récupération des données'
            );
        }
    }
    
    public function getDetailsVisite($month=null,$year=null) {
        try {
            $month=(is_null($month)) ? date('m') : $month;
            $year=(is_null($year)) ? date('Y') : $year;
            $sql="
            SELECT 
                Count(DISTINCT(ipuser)) as quantite,
                DATE_FORMAT(datevisite,'%d') as dayVisite
            FROM 
                statistiques 
            WHERE 
                DATE_FORMAT(datevisite,'%m')=".$month." 
            AND 
                DATE_FORMAT(datevisite,'%Y')=".$year." 
            GROUP BY 
                DATE_FORMAT(datevisite,'%d'),DATE_FORMAT(datevisite,'%m'),DATE_FORMAT(datevisite,'%Y')
			";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
            $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
            $nb_jour = date('t',mktime(0, 0, 0, $month, 1, $year)); 
            $resFinal=array();
            for($i=1;$i<$nb_jour+1;$i++):
                $resFinal[$i]=0;
            endfor;
            foreach($r as $k=>$v):
                $resFinal[intval($r[$k]['dayVisite'])]=intval($v['quantite']);
            endforeach;
            return $resFinal;
            
        } catch ( Exception $exception ) {
            return null;
        }
    }
    public function getDetailsVisitePage($month=null,$year=null) {
        try {
            $month=(is_null($month)) ? date('m') : $month;
            $year=(is_null($year)) ? date('Y') : $year;
            $sql="
            SELECT 
                Count(DISTINCT(idPage)) as quantite,
                DATE_FORMAT(datevisite,'%d') as dayVisite
            FROM 
                statistiques 
            WHERE 
                DATE_FORMAT(datevisite,'%m')=".$month." 
            AND 
                DATE_FORMAT(datevisite,'%Y')=".$year." 
            GROUP BY 
                DATE_FORMAT(datevisite,'%d'),DATE_FORMAT(datevisite,'%m'),DATE_FORMAT(datevisite,'%Y')
			";
            $sth=$this->_db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $sth->execute(array());
            $r=$sth->fetchAll(\PDO::FETCH_ASSOC);
            $nb_jour = date('t',mktime(0, 0, 0, $month, 1, $year)); 
            $resFinal=array();
            for($i=1;$i<$nb_jour+1;$i++):
                $resFinal[$i]=0;
            endfor;
            foreach($r as $k=>$v):
                $resFinal[intval($r[$k]['dayVisite'])]=intval($v['quantite']);
            endforeach;
            return $resFinal;
            
        } catch ( Exception $exception ) {
            return null;
        }
    }
    
    public function setLogin ( $strLogin) {
            $this->_strLogin = trim ( $strLogin);
    }
    public function setMdp ( $setMdp) {
            $this->_strMdp = trim ( $setMdp);
    }
    public function call(){
        $this->next->call();
    }
}
?>