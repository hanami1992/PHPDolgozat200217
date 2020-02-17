<?php
    define('APPPATH','Application/');
    require_once APPPATH.'functions.php';

    $configPath='config.json';
    $page= $_GET['page'] ? $_GET['page'] : 'users';


    switch ($page)
    {
        case 'users': require_once APPPATH. 'Core/users.php'; break;
        //case 'signUp': require_once APPPATH. 'Templates/signUpView.php'; break;       
        case 'delete' : require_once APPPATH. 'Core/delete.php'; break;
        case 'insert' : require_once APPPATH. 'Core/insert.php'; break;
    }

    
    require_once APPPATH.'Templates/_layout.php';
    
?>