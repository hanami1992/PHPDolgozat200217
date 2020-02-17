<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=APPPATH?>Style/style.css" type="text/css">
    <title><?= $page?></title>
</head>
<body>
    <?php require_once APPPATH.'Templates/headerView.php' ?>   
    <?php require_once APPPATH."Templates/{$page}View.php" ?>
    <?php require_once APPPATH.'Core/delete.php' ?>
    <?php require_once APPPATH.'Core/insert.php' ?>
</body>
</html>