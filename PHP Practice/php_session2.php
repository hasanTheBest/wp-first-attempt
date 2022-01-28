<?php 

//start session
session_start();

?>

<html>
    <body>
        <?php
        
        //to modify session variable
//        $_SESSION["name"] = "Mahmudul Hasan";
//        $_SESSION["job"]  = "Student";
//        $_SESSION["occupation"] = "Web development";
//        $_SESSION["food"] = "Vegitable";
//        $_SESSION["person"] = "Mother";
        
        //to print session value
//        echo $_SESSION["name"] . "<br>";
//        echo $_SESSION["job"] . "<br>";
//        echo $_SESSION["occupation"] . "<br>";
//        echo $_SESSION["food"] . "<br>";
//        echo $_SESSION["person"] . "<br>";
        
        //another way to show session values
        print_r($_SESSION);
        
        //to remove sesstion variables use 'session_unset();
        session_unset();
        
        //to destroy session variable use 'session_destroy();
        session_destroy();
        ?>
    </body>
</html>

