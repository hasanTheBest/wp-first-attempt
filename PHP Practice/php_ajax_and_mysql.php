<!DCOTYPE html>
<html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table,td,th{
                border: 1px solid black;
                padding: 5px;
            }
            th{text-align: left;}
        </style>
    </head>
    <body>
        <?php
        
        $q = intval($_REQUEST['q']);
        $conn = mysqli_connect('localhost', 'root', '', 'mydb');
        if(!$conn){
            die("Could not connect: " . mysqli_erro($conn));
        }
        
        mysqli_select_db($conn, "ajax_demo");
        $sql = "SELECT * FROM user WHERE id = '".$q."'";
        $result = mysqli_query($conn, $sql);
        
        echo "<table>"
        . "<tr>"
                . "<th>Firstname</th>"
                . "<th>Lastname</th>"
                . "<th>Age</th>"
                . "<th>Hometown</th>"
                . "<th>Job</th>"
        . "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['FirstName'] . "</td>";
            echo "<td>" . $row['LastName'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Hometown'] . "</td>";
            echo "<td>" . $row['Job'] . "</td>";
            echo "</tr>";
            
        }
        echo '</table>';
        mysqli_close($conn);
        ?>
    </body>
</html>
