<?php
include 'init.php';//da bdal
//include 'includes/templates/header.php';
include $tpl .'header.php';
include "includes/languages/english.php";
?>

<?php
echo lang('MESSAGE').' '.lang('ADMIN');
?>

<?php   
include $tpl .'footer.php';
?>