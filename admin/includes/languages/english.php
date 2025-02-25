<?php

function lang($phrase){
    static $lang = array(
        'MESSAGE'=>'welcome',
        'ADMIN' => 'adminstarator', 
    );
    return $lang[$phrase];
}