<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            table {border: 1px solid magenta;
                   border-collapse: collapse;
                   background-color: grey;
                   color: white;
                   padding: 10px;
            }
            td{padding: 5px;}
            th,tr{padding: 5px; border: 1px solid antiquewhite; }
            tr:nth-child(even){background-color: chocolate}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Filter Name</th>
                <th>Filter ID</th>
            </tr>
            
            <?php 
            
            foreach(filter_list() as $id => $filter){
               echo "<tr><td>" . $filter . "</td><td>" . 
                       filter_id($filter). "</td></tr>";
            }
            
            ?>
        </table>
        
        <?php
        //sanitizing a strign
        $str = "<h1>Hello World!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;
        
        //avlidatig an integer
        $int = 100.50;
        
        if(!filter_var($int, FILTER_VALIDATE_INT) === 0 ||
                !filter_var($int, FILTER_VALIDATE_INT) === false){
            echo ("Interger is valid");
        }else{
            echo ("Integer is not vlaid");
        }
        //$email = filter_var($email, FILTER_SANITIZE_EMAIL);
        ?>
    </body>
</html>
