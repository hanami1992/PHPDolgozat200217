<?php
    $config = getConfig($configPath);

    $pdo = getConection($config["database"]);

    $users = getUsers($pdo);
?>