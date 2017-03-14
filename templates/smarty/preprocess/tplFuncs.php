<?php

// $tplconf = json_decode(file_get_contents("config/tplconf.json"), true);
// $sysconf = json_decode(file_get_contents("config/sysconf.json"), true);
// $cusconf = json_decode(file_get_contents("config/cusconf.json"), true);

/**
 * @level: indent level
 */
Function fillBlank($level)
{
    $ret = "";

    // code indent
    for ($i = 0; $i < $level; $i++) {
        $ret = $ret.'  ';
    }

    return $ret;
}
$smarty->assign('fillBlank', fillBlank($level));

/**
 *  <!--
 *  <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
 *  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
 *    <ul class="nav child_menu">
 *      <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
 *      <li><a><i class="fa fa-cogs"></i> System Settings <span class="fa fa-chevron-down"></span></a>
 *        <ul class="nav child_menu">
 *          <li><a href="network.php"><i class="fa fa-sitemap"></i>Network</a></li>
 *          <li><a href="dataAndCalander.php"><i class="fa fa-calendar"></i>Time & Calander</a></li>
 *          <li><a href="update.php"><i class="fa fa-undo"></i>Update System</a></li>
 *          <li><a href="webconsole.php"><i class="fa fa-terminal"></i>Terminal</a></li>
 *          <li><a href="plain_page.php"><i class="fa fa-lock"></i>Root Passwd</a></li>
 *        </ul>
 *      </li>
 *      <li><a><i class="fa fa-legal"></i> HardWare Status <span class="fa fa-chevron-down"></span></a>
 *        <ul class="nav child_menu">
 *          <li><a href="hardware.php"><i class="fa fa-arrows-h"></i>Input&Output</a></li>
 *          <li><a href="hardware.php#Serial"><i class="fa fa-tty"></i>Serial(tty)</a></li>
 *          <li><a href="hardware.php#USBPort"><i class="fa fa-usb"></i>USB Port</a></li>
 *        </ul>
 *      </li>
 *      <li><a href="customerSettings.php"><i class="fa fa-wrench"></i>Customer Settings</a></li>
 *      <li><a href="customerData.php"><i class="fa fa-pie-chart"></i>Customer Data</a></li>
 *    </ul>
 *  </li>
 *  <li><a><i class="fa fa-book"></i> About <span class="fa fa-chevron-down"></span></a>
 *    <ul class="nav child_menu">
 *      <li><a href="about.php"><i class="fa fa-copyright"></i>WebAdmin</a></li>
 *    </ul>
 *  </li>
 *  -->
 */

$level = 1;
$active = "Home";
$currentPage = end(explode('/', $_SERVER['PHP_SELF']));

/**
 * @jsonData: nav data as JSON data format
 * @level: indent level
 * @active: Classify for php file
 * @currentPage: current php file
 */
Function recursiveNav($jsonData, $level, $active, $currentPage)
{
    $ret = "";
    foreach( $jsonData as $key => $value ) {
        if( isset( $value['subitem'] ) ) {

            // with the drop-down options
            $ret .= fillBlank($level);
            $ret .=  '<li';
            if ($key == $active) $ret .= ' class="active"';
            $ret .= '><a><i class="fa fa-'.$value["icon"].'"></i> '.$key.' <span class="fa fa-chevron-down"></span></a>'."\n";

            // code indent
            $ret .= fillBlank($level+1);
            $ret .= '<ul class="nav child_menu">'."\n";

            // recursive callback
            $ret .= recursiveNav($value['subitem'], $level+2, $active, $currentPage);

            $ret .= fillBlank($level+1);
            $ret .= '</ul>'."\n";

            $ret .= fillBlank($level);
            $ret .= '</li>'."\n";

        } else {

            $ret .= fillBlank($level);
            $ret .= '<li';
            if ($currentPage == $value['link']) $ret .= ' class="current-page"';
            $ret .= '><a href="'.$value['link'].'"><i class="fa fa-'.$value['icon'].'"></i>'.$key.'</a></li>'."\n";

        }
    }

    return $ret;
}
$smarty->assign("recursiveNav", recursiveNav($tplconf['nav'], $level, $active, $currentPage));

// <link href="css/custom.min.css" rel="stylesheet">
Function additionalCSS($sysJsonData, $cusJsonData)
{
    $ret = "zengjfcss";

    if( isset( $sysJsonData["css"] ) ) {
        foreach( $sysJsonData["css"] as $value ) {
            $ret .= '<link href="'.$value.'" rel="stylesheet">'."\n";
        }
    }

    if( isset( $cusJsonData["css"] ) ) {
        foreach( $cusJsonData["css"] as $value ) {
            $ret .= '<link href="'.$value.'" rel="stylesheet">'."\n";
        }
    }

    echo $ret;

    return $ret;
}
$smarty->assign("additionalCSS", additionalCSS($sysconf));

Function additionalJS($sysJsonData, $cusJsonData)
{
    $ret = "zengjfjs";

    if( isset( $sysJsonData["js"] ) ) {
        foreach( $sysJsonData["js"] as $value ) {
            $ret .= '<script src="'.$value.'"></script>'."\n";
        }
    }

    if( isset( $cusJsonData["js"] ) ) {
        foreach( $cusJsonData["js"] as $value ) {
            $ret .= '<script src="'.$value.'"></script>'."\n";
        }
    }

    echo $ret;

    return $ret;
}
$smarty->assign("additionalJS", additionalJS($sysconf, $cusconf));

?>
