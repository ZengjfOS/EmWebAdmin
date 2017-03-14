<?php
    // NOTE: Smarty has a capital 'S'
    require_once('smarty/Smarty.class.php');
    $smarty = new Smarty();
    // $smarty->debugging = true;
    
    // template configures
    $tplconf = json_decode(file_get_contents("config/tplconf.json"), true);
    $smarty->assign('tplconf', $tplconf);

    // system configures
    $sysconf = json_decode(file_get_contents("config/sysconf.json"), true);
    $smarty->assign('sysconf', $sysconf);

    // custom configures
    $cusconf = json_decode(file_get_contents("config/cusconf.json"), true);
    $smarty->assign('cusconf', $cusconf);

    include "tpl/tplFuncs.php";
?>
