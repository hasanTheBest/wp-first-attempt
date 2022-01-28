<?php

$cookie_name = "user";
$cooke_value = "Mahmudul Hasan";
setcookie($cookie_name, $cooke_value, time() + (3600 * 30), "/");
// setcooke(name, value , time, path, domain, secure, httponly);

//to modify a cookie value just set again;
$cookie_name = "user_home";
$cooke_value = "Siam Ahmed";
setcookie($cookie_name, $cooke_value, time() + (3600 * 30), "/");

//to delete a cookie name just set cookie with past time
$cookie_name = "user_home";
$cooke_value = "Siam Ahmed";
setcookie($cookie_name, $cooke_value, time() - 3600, "/");

//check if cookies are Enabled
$cookie_name = "user_guest";
$cooke_value = "Sabit";
setcookie($cookie_name, $cooke_value, time() + (3600 * 30), "/");
?>

<html>
    <body>
        
        <?php 
        
        if(count($_COOKIE) > 0){
            echo "Cookies are enabled. <br>";
        }else{
            echo "Cookies are disabled. <br>";
        }
        
        if(!isset($_COOKIE["$cookie_name"])){
            echo "Cookie named '" . $cookie_name . "' is not set";
        }else{
            echo "Cookie value '". $cookie_name . "' is set! <br>";
            echo "Value is " . $_COOKIE[$cookie_name];
        }
        
        ?>
        
    </body>
</html>