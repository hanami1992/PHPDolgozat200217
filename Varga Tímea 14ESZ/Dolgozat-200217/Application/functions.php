<?php
    function getConfig($configPath)
    {
        return json_decode(file_get_contents($configPath), true);
    }

    function getConection($config)
    {
        try {
            $pdo = new PDO( 
                "mysql:host={$config['hostName']};dbname={$config['database']};charset=utf8",
                $config['username'],
                $config['password']
            );
            return $pdo;
            
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            die;
        }
    }

    function getUsers(PDO $pdo)
    {
        try {
            $sel = $pdo->prepare("SELECT * FROM `users`");
            $sel->execute();
            $result = $sel->fetchAll();

            if(count($result)==0)
            {
                throw new RuntimeException("Something is went wrong while page is loaded");
            }
            return $result;

        } catch (PDOException $e) {
            return false;
            die;
        }

    }

    function deleteUser($pdo, $id)
    {
        try {
            $del = $pdo->prepare("DELETE FROM `users` WHERE `id` = :id");

            $del->bindParam(':id',$id);

            if(!$del->execute())
            {
                throw new RuntimeException($del->errorInfo()[2]);
            } 

            return true;

        } catch (RuntimeException $e) {
           var_dump($e->getMssage());
           return false;
        }

    }

    function updateUser( $pdo, $user )
{
    try
    {
     
        $upd = $pdo->prepare( "UPDATE `users` SET `name` = :name, `email` = :email, `address` = :address, `bornAt` = :bornAt WHERE `id` = :id"  );
        
        $upd->bindParam( ':name',    $user['name'] );
        $upd->bindParam( ':email',   $user['email'] );
        $upd->bindParam( ':address', $user['address'] );
        $upd->bindParam( ':bornAt',  $user['bornAt'] );
        $upd->bindParam( ':id',      $user['id'] );


                
        

        if ( !$upd->execute() )
        {
            throw new RuntimeException( $upd->errorInfo()[2] );
        }
    
        return true;

    }
    catch ( RuntimeException $r )
    {        
        var_dump( $r->getMessage() );
        return false;
    }
}

?>