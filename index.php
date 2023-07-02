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
        <label>Age:</label><br>
        <input type="text" name="age"><br>
        <input type="submit" value="Log In" name="login">
    </form>
    <form action="index.php" method="post">
        <label>Visa</label>
        <input type="radio" name="credit_card" value="Visa"><br>
        <label>MasterCard</label>
        <input type="radio" name="credit_card" value="MasterCard">
        <label>PayPal</label>
        <input type="radio" name="credit_card" value="PayPal"><br>
        <input type="submit" name="credi_submit"><br><br><br>
    </form>
    <form action="index.php" method="post">
        <input type="checkbox" name="food[]" value="pizza" id="pizza">
        <label for="pizza">Pizza</label><br>
        <input type="checkbox" name="food[]" value="kebab" id="kebab">
        <label for="kebab">kebab</label><br>
        <input type="checkbox" name="food[]" value="burger" id="burger">
        <label for="burger">burger</label><br>
        <input type="submit" value="what you like?" name="eat">
    </form>
</body>
</html>
<?php 

    $capitals = array("USA" => "Washington D.C", "Japan" => "Tokio", "Poland" => "Warsaw",);

    if(isset($_POST["login"])){
        $password = $_POST["password"];
        $passLenght = strlen($password);
        $username = $_POST["username"];
        $country = $_POST["country"];
        $age = $_POST["age"];

        if(empty($username)){
            echo "set your username";
        }
        elseif(empty($password)){
            echo "set your password";} 
        elseif(empty($country)){
            echo"set your country";
        } 
        elseif(empty($age)){
            echo"set your age";
        }
    else {
        $capital = $capitals[$_POST["country"]];
        echo$capital;
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        if(empty($age)){
            echo " <br> Hello {$username}! We don't know how old you really are. <br>";
        } else{
            echo " <br> Hello {$username} you have {$age} <br>";
        }
      
        if( $passLenght <= 4){
            echo"password is too short! <br>";
            
        } elseif($passLenght == 5){
            echo"password is medium strong <br>";
        }
        else {
            echo"password is strong <br>";
        }
    };
    }
    if(isset($_POST["credi_submit"])){
        if(isset($_POST["credit_card"])){
           $creditCard = $_POST["credit_card"];
           switch ($creditCard) {
            case "Visa":
                echo"working {$creditCard}";
                break;
            case "MasterCard":
                echo"working {$creditCard}";
                break;
            case "PayPal":
                echo"working {$creditCard}";
                break;
           }
        } else {
            echo"plisclick";
        }
    } 
    if(isset($_POST["eat"])){
        $food = $_POST["food"];
        foreach($food as $oneFood){
            echo $oneFood. "<br>";
        }
    }
    
    $myName = "Tymek Slomski";
    $myNumber = "507-362-050";
    $myName = strtoupper($myName). "<br>";
    $myNumber = str_replace("-", "", $myNumber);    
    //strcmp sprawdza czy strin jest taki sam i oddaje warttości 1 albo 0 

    setcookie("peyment", "paypal", time() - 1);
    setcookie("lel", "123", time() + 84200);
    setcookie("lol", "cooola", time() + 84200);
    
    foreach($_COOKIE as $key => $cooki){
        echo"fiest argument {$key} sec {$cooki} <br>";
    };

    if(isset($_COOKIE['peyment'])){
        echo"BUY WITH PAYPAL";
    } else {
        echo"BUY WUTH MASTERCARD";
    };



    include("footer.html");
?>
