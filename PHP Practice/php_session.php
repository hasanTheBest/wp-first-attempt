<?php 

//start session
session_start();

?>

<html>
    <body>
        <?php 
        
        //Set session variables
        $_SESSION["name"] = "Imtiz ahmed Siam";
        $_SESSION["hobby"] = "Naughty work";
        $_SESSION["food"] = "Vegitable";
        $_SESSION["person"] = "Mother";
        
        echo "Session variable is set."
        ?>
    </body>
</html>
