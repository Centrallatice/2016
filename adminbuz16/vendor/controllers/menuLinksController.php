<?php
use \Models\Admin\Menus;
use \Models\Admin\MenuLinks;

class menuLinksController extends \Slim\Middleware{

	private $_request;
	private $_db;
	
	function __construct($slimReq,$db){
        $this->_request=$slimReq;
        $this->_db=$db;
	}
	function addMenuLinks(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setNom($body->menuLinks->nom);

            $M->setIdPage( isset($body->menuLinks->page->id) ? $body->menuLinks->page->id:null);
            $M->setIdMenu($body->idMenuParent);
            $lienParent=null;
            if(isset($body->menuLinks->lienParent->id)):
                $lienParent=$body->menuLinks->lienParent->id;
            elseif(isset($body->menuLinks->lienParent)):
                $lienParent=($body->menuLinks->lienParent==-1) ? null : $body->menuLinks->lienParent;
            endif;
            $M->setIdParent($lienParent);
            $result = $M->addMenu();
            echo json_encode($result);
	}
	function updatemenuLink(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setId($body->lien->id);
            $M->setIdMenu($body->lien->idMenu);
            $M->setIdPage(isset($body->lien->page->id) ? $body->lien->page->id : null);
            $M->setNom($body->lien->nom);
            $M->setIdParent(isset($body->lien->idParent) ? (($body->lien->idParent!=-1) ? $body->lien->idParent : null) : null);
            $result = $M->updateMenuLink();
            echo json_encode($result);
	}
	function getMenuLinks(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setIdMenu($body->menu);
            $result = $M->getMenuLinksByDepth();
            if($result['success']):
                $reordered=array();
                $reordered=menuLinksController::OrderMenuLinks($result['donnees'],$reordered,0);
                $result['donnees']=$reordered;
            endif;
            if(isset($body->displayAdmin) && $body->displayAdmin && !is_null($result['donnees'])):
				
                foreach($result['donnees'] as $k=>$v):
                    $beforeNom="";
                    for($i=0;$i<$result['donnees'][$k]['depth'];$i++) $beforeNom.=" &nbsp &nbsp";
                    if($result['donnees'][$k]['depth']>0) $beforeNom.="<strong>|--</strong>";
                    $result['donnees'][$k]['nom']=$beforeNom.$result['donnees'][$k]['nom'];
                endforeach;
            endif;
            
            
            echo json_encode($result);
	}
        
	function getMenuLink(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setId($body->lien);
            $result = $M->getMenuLink();
            echo json_encode($result);
	}
	function getMenuLinksByID(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setId($body->menu);
            $result = $M->getMenu();
            echo json_encode($result);
	}
	function delMenuLinks(){
            $request = $this->_request->request();
            $body = json_decode($request->getBody());
            $M = new MenuLinks($this->_db);
            $M->setId($body->menuLinks);
            $M->setIdMenu($body->idMenu);
            $result = $M->delMenu();
            if($result['success']):
                $ML = new MenuLinks($this->_db);
                $ML->setIdParent($body->idMenu);
                $result2 = $ML->delByIdParent();
            endif;
            echo json_encode($result);
	}
        public static function OrderMenuLinks($initial,$final,$depth){
            
            // Si tableau vide on le retourne -> inutile de continuer
           
            if(count($initial)==0):
                return $initial;
            else:
				if($depth==0){
                                    foreach($initial[$depth] as $k=>$v):
                                            array_push($final,$initial[$depth][$k]);
                                    endforeach;
				}
				else{
					// echo $depth;
					foreach($initial[$depth] as $k=>$v):
						$i=1;
						$jOK=false;
						foreach($final as $cleFinal=>$valueFinal):
							if($final[$cleFinal]['id']==$k):
								$jOK=$i;
							endif;
							$i++;
						endforeach;
						
						if($jOK!==false):
							$d1=array_slice($final,$jOK,count($final)-$jOK);
							$d2=array_slice($final,0,$jOK);
							$d3=$initial[$depth][$k];
							$final=array_merge($d2,$d3,$d1);
						endif;
					endforeach;					
				}
				unset($initial[$depth]);
			endif;

			// var_dump($final);
			// var_dump($initial);
			if(isset($initial[$depth+1])) return menuLinksController::OrderMenuLinks($initial,$final,$depth+1);
			else return $final;
        }
        
	public function call()
        {
                $this->next->call();
        }
}

?>