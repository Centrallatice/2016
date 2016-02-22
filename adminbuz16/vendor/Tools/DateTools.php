<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tools;

/**
 * Description of DateTools
 *
 * @author Sylvain
 */
class DateTools {
    public static function getFrenchMonth($Entry){
        switch($Entry):
            case 'january':
                return 'janvier';
                break;
            case 'february':
                return 'février';
                break;
            case 'march':
                return 'mars';
                break;
            case 'april':
                return 'avril';
                break;
            case 'may':
                return 'mai';
                break;
            case 'juny':
                return 'juin';
                break;
            case 'july':
                return 'juillet';
                break;
            case 'august':
                return 'août';
                break;
            case 'september':
                return 'septembre';
                break;
            case 'october':
                return 'octobre';
                break;
            case 'november':
                return 'novembre';
                break;
            case 'december':
                return 'decembre';
                break;
            default:
                return $Entry;
                break;
        endswitch;
       
    }
    public static function getFrenchDay($Entry){
        switch($Entry):
            case 'monday':
                return 'lundi';
                break;
            case 'tuesday':
                return 'mardi';
                break;
            case 'wednesday':
                return 'mercredi';
                break;
            case 'thursday':
                return 'jeudi';
                break;
            case 'friday':
                return 'vendredi';
                break;
            case 'saturday':
                return 'samedi';
                break;
            case 'sunday':
                return 'dimanche';
                break;
            default:
                return $Entry;
                break;
        endswitch;
       
    }
}
