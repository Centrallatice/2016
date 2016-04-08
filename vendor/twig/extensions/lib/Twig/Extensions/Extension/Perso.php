<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Twig_Extensions_Extension_Perso
 *
 * @author sylvain.dupont
 */
class Twig_Extensions_Extension_Perso extends Twig_Extension
{
    /**
     * Returns a list of filters.
     *
     * @return array
     */
    public function getFilters()
    {
        $filters = array(
             new Twig_SimpleFilter('childactif', 'twig_child_is_actif'),
             new Twig_SimpleFilter('menuchildactif', 'twig_menu_child_is_actif'),
             new Twig_SimpleFilter('ondisk', 'twig_ondisk'),
             new Twig_SimpleFilter('ondiskpath', 'twig_ondiskpath')
        );

        return $filters;
    }
    /**
     * Name of this extension.
     *
     * @return string
     */
    public function getName()
    {
        return 'perso';
    }
}

/**
 * Shuffles an array.
 *
 * @param array
 *
 * @return boolean
 */
function twig_child_is_actif($array,$idsearch)
{
    if(count($array['liens'])>0):
        foreach($array['liens'] as $k=>$v):
            if($array['liens'][$k]['idPage']==$idsearch) $found=true;
        endforeach;
    else:
        return false;
    endif;
    return $found;
}
function twig_menu_child_is_actif($arrayMenu,$menuLinks)
{
    if(is_null($menuLinks)) return false;
    $found=false;
    foreach($arrayMenu as $k1 => $v1):
        
        if($arrayMenu['idPage']==$menuLinks) $found=true;
        foreach($arrayMenu['liens'] as $k2 => $v2):
            
            if($arrayMenu['liens'][$k2]['idPage']==$menuLinks) $found=true;
            foreach($arrayMenu['liens'][$k2]['liens'] as $k3 => $v3):
                if($arrayMenu['liens'][$k2]['liens'][$k3]['idPage']==$menuLinks) $found=true;
            endforeach;
        endforeach;
    endforeach;
    return $found;
}

function twig_ondisk($file,$path,$url,$themeName)
{
    if(file_exists($path.$file)){
            return $url.$file;
    }
    else return str_replace($themeName,"default",$url).$file;
}
function twig_ondiskpath($file,$path,$url,$themeName)
{
    if(file_exists($path.$file)){
        return $path.$file;
    }
    else return str_replace($themeName,"default",$path).$file;
}
