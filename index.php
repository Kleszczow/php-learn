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
    <label>Country:</label><br>
    <input type="text" name="country"><br>
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
    $password = $_POST["password"];
    $passLenght = strlen($password);
    echo "{$_POST["username"]} <br>";
    echo "{$password} <br>";
    //get pokazuje w url wartości
    //post nie pokazuje!!!
    if(empty($password)){
        echo "not decLARATED PASSWORD";
} else {
    if( $passLenght <= 4){
        echo"password is too short! <br>";
    } elseif($passLenght == 5){
        echo"password is medium strong <br>";
    }
    else {
        echo"password is strong <br>";
    }
};

   

    $capitals = array("USA" => "Washington D.C", "Japan" => "Tokio", "Poland" => "Warsaw",);
  /*  $capitals["Poland"] = "Gliwice";
    //array_pop($capitals); - usuwa ostatnia shift usuwa pierwsza
    $capitals["England"] = "London";
    $keys = array_keys($capitals);
    foreach($keys as $capital){
        echo"capital {$capital} <br>";
    }
    $values = array_values($capitals);
    foreach($values as $city){
        echo"city {$city} <br>";
    }


    //array_reverse obraca nam góra dół
    //array_flip obraca nam składniki 
   // echo"<br>{$capitals["USA"]} <br>";
    foreach($capitals as $key => $value) {
        echo"{$key} is {$value} <br>";
    }
    $counter = count($capitals);
    echo"counter {$counter} <br>";
    */
    $capital = $capitals[$_POST["country"]];
    echo$capital;

    $thisValue = "lol";
    if(empty($thisValue)){
        echo"rain";
    } else {
        echo"sun";
    };
?>
