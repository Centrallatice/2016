<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tools;

/**
 * Description of strTools
 *
 * @author Sylvain
 */
class StrTools {
    
    public static function toAscii($str, $replace=array(), $delimiter='-') {
        setlocale(LC_CTYPE, 'fr_FR');
        if( !empty($replace) ) {
            $str = str_replace((array)$replace, ' ', $str);
	}
        $clean = StrTools::convert_utf8($str);
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $clean);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

        return $clean;
    }
    
    public static function convert_utf8( $string ) { 
        if ( strlen(utf8_decode($string)) == strlen($string) ) {   
            return iconv("ISO-8859-1", "UTF-8", $string);
        } else {
            return $string;
        }
    }

}
