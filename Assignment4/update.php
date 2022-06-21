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
        
        $command = "UPDATE User_Info SET Interests_and_Hobbies='dogs and walking'
                WHERE Student_ID=103";
        
        $stmt = $dbConn->prepare($command);
        $exeOk = $stmt->execute();
        if ($exeOk)
            echo "Successfully updated interests and hobbies in DB";
        else
            echo "Error executing UPDATE query";
        
        ?>
    </body>
</html>
