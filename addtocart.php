<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add to Cart</title>

</head>
<h1>
     Add to Cart
</h1>
<h2>
    <a href = "logout.php" > Logout </a>
</h2>

<br>

<style type="text/css">
    h1 {
        color: lightblue;
        text-align: center;
    }
    body{
        color: white;
        text-align: center;
        background-color: darkred;
    }
</style>

<body>


<?php

REQUIRE_ONCE 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


if(isset($_GET['cardID'])) {
    $cardID = $_GET['cardID'];

    $query = "SELECT * FROM giftcard WHERE cardID=$cardID";

    $result = $conn->query($query);
    if (!$result) die($conn->error);

    $rows = $result->num_rows;

    for ($j = 0; $j < $rows; ++$j) {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_NUM);

        if($row[1]=='Shopping') {
            echo <<<_END

    <a href="card-add2.php?cardID=$row[0]" $row[0]><img height='150' width='300' src="images/shopping.jpg" ></a>

_END;
        }
        elseif($row[1]=='Game'){
            echo <<<_END

    <a href="card-add2.php?cardID=$row[0]" $row[0]><img height='150' width='300' src="images/game.jpg" ></a>

_END;
        }
        elseif($row[1]=='Athletics') {
            echo <<<_END

    <a href="card-add2.php?cardID=$row[0]" $row[0]><img height='150' width='300' src="images/athletics.jpg" ></a>

_END;
        }

        echo <<<_END
<pre>
<form action="card-add2.php" method="post">

    Card Name: <input type="text" name="cardName" value=" ">
    Card Type: <input type="text" name="cardType" value=" ">
    Card Value: <input type="text" name="cardValue" value=" ">
    Card Points: <input type="text" name="points" value=" ">

    <input type="hidden" name="card-add2" value="yes">
    <input type="submit">
    
</form>    
</pre>

_END;

    }
}

if(isset($_POST['card-add2'])){

    $cardID= $_POST['cardID'];
    $cardName= $_POST['cardName'];
    $cardType= $_POST['cardType'];
    $cardValue= $_POST['cardValue'];
    $points= $_POST['points'];

    $query = "INSERT INTO giftcard (cardName, cardType, cardValue, points) VALUES ('$cardName','$cardType', $cardValue, $points)";


    $result = $conn->query($query);
    if (!$result) die($conn->error);


    header("Location: card-list2.php");
}


