<?php

    $user = $_POST;

    $config = getConfig($configPath);

    $pdo = getConection( $config["database"] );

    updateUser( $pdo, $user );
?>
