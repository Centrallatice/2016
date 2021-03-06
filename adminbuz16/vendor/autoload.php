﻿<?php
if($_SERVER['SERVER_NAME']=='127.0.0.1') define('LOCAL',1);
else define('LOCAL',0);

$theme='default';

if(LOCAL==1):
    define('BASE_URL','http://127.0.0.1:82/2016/');
    define('BASE_PATH','C:/Users/sylvain.dupont/Desktop/Projets Web/2016/');
else:
    define('BASE_URL','http://www.krealine.fr/Works/ngCMS/');
    define('BASE_PATH','/home/krealinefi/www/Works/ngCMS/');
endif;

define('SITENAME','DEMO KreaCMS');

define('CSS_CLIENT_URL',BASE_URL.'public/css/');
define('CSS_ADMIN_URL',BASE_URL.'adminbuz16/ressources/css/');
define('CSS_CLIENT_PATH',BASE_PATH.'public/css/');
define('CSS_ADMIN_PATH',BASE_PATH.'adminbuz16/ressources/css/');


define('JS_CLIENT_URL',BASE_URL.'public/js/');
define('JS_ADMIN_URL',BASE_URL.'adminbuz16/ressources/js/');
define('JS_CLIENT_PATH',BASE_PATH.'public/js/');

define('JS_ADMIN_PATH',BASE_PATH.'adminbuz16/ressources/js/');

define('IMG_CLIENT_URL',BASE_URL.'public/img/');
define('IMG_THEME_URL',BASE_URL.'themes/'.$theme.'/img/');
define('IMG_ADMIN_URL',BASE_URL.'adminbuz16/ressources/img/');
define('IMG_CLIENT_PATH',BASE_PATH.'public/img/');
define('IMG_ADMIN_PATH',BASE_PATH.'adminbuz16/ressources/img/');

define('TPL_ADMIN_PATH',BASE_PATH.'adminbuz16/layout/');
define('ADMIN_BASE_URL',BASE_URL.'adminbuz16/');
define('ADMIN_BASE_PATH',BASE_PATH.'adminbuz16/');
define('ADMIN_VENDOR_PATH',BASE_URL.'adminbuz16/vendor/index.php');

define('BASE_PATH_UPLOAD_DIR',BASE_PATH.'public/upload');
define('BASE_PATH_UPLOAD_URL',BASE_URL.'public/upload');

// define('THEME_URL',BASE_URL.'themes/'.$theme);
define('THEME_URL',BASE_URL.'themes/');
// define('THEME_PATH',BASE_PATH.'themes/'.$theme);
define('THEME_PATH',BASE_PATH.'themes/');

require_once 'framework/Bdd_GetConnexion.php';

$bddInst = new Bdd_GetConnexion();
$db = $bddInst->_instancePdoConnec();

if(isset($_GET['p'])){
	$action = (!isset($_GET['action'])) ? 'init' : $_GET['action'];
}