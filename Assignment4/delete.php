<!DOCTYPE html>
<?php
require("connect.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        try {
            $dbConn = new PDO($hostname, $username, $password);
            echo "Succesfully connected to db <br>";
        } catch (PDOException $e) {
            echo "connection error : " + $e . getMessage() . "<br><br>";
        }
        
        $command = "DELETE FROM `User_Info` WHERE Student_ID=102";
        $stmt = $dbConn->prepare($command);
        $exeOk = $stmt->execute();
        if ($exeOk)
            echo "Successfully deleted from DB";
        else
            echo "Error executing DELETE query";
        ?>        
                
        ?>
    </body>
</html>
