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

        $command = "INSERT INTO User_Info"
                . "(`Student_ID`, `First_Name`, `Last_Name`, "
                . "`Interests_and_Hobbies`, `City`, `Phone_No`, "
                . "`Campus_Name`, `Course_Name`) "
                . "VALUES (104, 'Bunny', 'Bugs', 'running  and swimming', "
                . "'Brampton', '437774317', 'Davis', 'Web Programming')";
        $stmt = $dbConn->prepare($command);
        $exeOk = $stmt->execute();
        if ($exeOk)
            echo "Successfully inserted to DB";
        else
            echo "Error executing INSERT query";
        ?>
    </body>
</html>
