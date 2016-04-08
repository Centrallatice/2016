<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of toolsController
 *
 * @author sylvain.dupont
 */
class toolsController {
    private $_request;
    private $_db;

    function __construct($slimReq,$db){
        $this->_request=$slimReq;
        $this->_db=$db;
    }
    function getIcones(){
        $res= array();
        $icones = $this->ScanDirectory(BASE_PATH.'themes/default/img/icones/',$res);
        echo json_encode($icones);
    }
    function ScanDirectory($Directory,$res){
        $MyDirectory = opendir($Directory) or die('Erreur');
        while($Entry = @readdir($MyDirectory)) {
            if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {
                return ScanDirectory($Directory.'/'.$Entry);
            }
            else {
                if($Entry!='' && $Entry!='.' && $Entry!='..') array_push($res,BASE_PATH.'themes/default/img/icones/'.$Entry);
            }
        }
        closedir($MyDirectory);
        return $res;
    }  
}
