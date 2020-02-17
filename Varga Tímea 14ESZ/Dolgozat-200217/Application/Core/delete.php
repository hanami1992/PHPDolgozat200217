<?php
    
    $id = $_GET['id'];

    $config = getConfig($configPath);

    $pdo = getConection( $config["database"] );

    deleteUser( $pdo, $id );

?>