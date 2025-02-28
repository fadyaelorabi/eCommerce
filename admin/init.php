<?php
include "connect.php" ;   
//routes
$tpl="includes/templates/";//template directory
$css="layout/css/";//css directory
$js="layout/js/";//js directory , afrd law 5lyt layout name design m4 htr a8yr kol el paths el mwdo3 hena dynamic
$lang="includes/languages/";//lang directory

//include all imp files:

include $lang . "english.php";
include $tpl .'header.php';//==include 'includes/templates/header.php';

//include navbar except the one with no $noNavbar var
if (!isset($noNavbar)) {include $tpl . 'navbar.php';}

