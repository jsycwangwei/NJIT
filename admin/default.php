<?php
/**
 * Created by PhpStorm.
 * User: jsycwangwei
 * Date: 15/8/15
 * Time: 下午11:24
 */


require_once(dirname(__FILE__).'/inc/config.inc.php');


//初始化变量
$b_url = 'templates/html/default.html';
$s_url = 'templates/html/default_user.html';


if($cfg_adminlevel == 1)
    require_once($b_url);
else
    require_once($s_url);

?>