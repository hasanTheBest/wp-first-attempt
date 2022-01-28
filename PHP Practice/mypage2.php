
<html>
    <head>
        
    </head>
    <body>
        <?php
    
        /*--<form action="mypage2.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email" ><br>
            <input type="submit">
        </form>
        
        Welcome <?php // echo $_POST["name"]; ?><br>
        Your E-mail address is : <?php // echo $_POST["email"]; ?>
        //-->*/

/*class Person
{
    public $age;
}
$person = new Person();
$person->age = 21;

$anotherPerson = new Person();
$anotherPerson->age = 25;

var_dump($person->age);
var_dump($anotherPerson->age);*/

//PHP Form Validation
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

/*if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}*/

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)){
            $nameErr = "Only letters and white space allowed.";
        }
    }
    
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format.";
        }
    }
    
    if(empty($_POST["website"])){
        $website = "";
    }else{
        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/"
                . "\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%~_|]/i", $website)){
            $websiteErr = "Invalid URL.";
        }
    }
    
    if(empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = test_input($_POST["comment"]);
    }
    
    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*echo "<h2>Your Input : </h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";*/

?>
       <h1>PHP Form Validation Example</h1>
        <form action="<?php
        htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
        method="post">
        <p style="color:red">required field.</p>
        <p>Name: <input type="text" name="name" value="<?php echo $name;?>">
            <span style="color:red;" class="error">
                * <?php echo $nameErr; ?> </span></p>
        
        <p>E-mail: <input type="text" name="email" value="<?php echo $email;?>">
            <span style="color:red">
                * <?php echo $emailErr; ?></span></p>
        
        <p>Website: <input type="text" name="website" value="<?php echo $website;?>"></p>
        <p>Comment: <textarea rows="5" cols="35" name="comment"><?php echo $name;?></textarea></p>
        <p>Gender: 
            <input type="radio" name="gender" value="Male">
            Male<span style="color:red">
                * <?php echo $genderErr; ?></span>
            <input type="radio" name="gender" value="Female">
            Female<span style="color:red"></span>    
        </p>
        <p><input type="submit"></p>
        </form> 

</body>
</html>