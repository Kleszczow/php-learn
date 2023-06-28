<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Username:</label><br>
    <input type="text" name="username"><br>
    <label>Password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log In">
    </form>
</body>
</html>
<?php 
/*
    $name = "tymek";
    $emial = "tymekslomski@gmail.com";

    $age = 21;

    $emplyed = false;

    echo "hello my name is {$name} <br>";
    echo"my emial adres is {$emial} <br>";
    echo"i have {$age} years right now";

    //shop

    $price = 5.99;
    $value = 3;
    $total = null;
    $total = $value * $price;
    echo"You have {$value} of snickers<br> Your total is \${$total} <br>";*/
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

    //get pokazuje w url wartości
    //post nie pokazuje!!!
?>