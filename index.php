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
        <input type="submit" value="Log In" name="login">
    </form>
    <form action="index.php" method="post">
        <label>Visa</label>
        <input type="radio" name="credit_card" value="Visa"><br>
        <label>MasterCard</label>
        <input type="radio" name="credit_card" value="MasterCard"><br>
        <label>PayPal</label>
        <input type="radio" name="credit_card" value="PayPal"><br>
        <input type="submit" name="credi_submit">
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

        if(empty($username)){
            echo "set your username";
        }
        elseif(empty($password)){
            echo "set your password";} 
        elseif(empty($country)){
            echo"set your country";
        }
    else {
        $capital = $capitals[$_POST["country"]];
        echo$capital;
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
    

?>
