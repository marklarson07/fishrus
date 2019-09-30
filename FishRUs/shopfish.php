<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Fish</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--- navbar --->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">Fish R US</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shopfish.php">Shop Fish</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shopsupplies.php">Shop Supplies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customerlogin.php">Customer Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="distributorlogin.php">Distributor Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
        </ul>
    </div>
</nav>
<!--- Content enter body here --->
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1>Shop Fish</h1>
    </div>
</div>
<div class="container">
    <p>Here is where you can buy all the types of fish that you would like to buy! Be sure to choose as many as you can. We have fish from all over the world.<br><br></p>
</div>
<!--Images and buttons for fish pictures-->
<center>
    <img src='static/img/AnglerFish.jpeg' style="width:190px;height:175px;"> <br>Angler Fish </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/DanubeRiverFish.jpeg' style="width:190px;height:175px;"> <br><br>Danube River Fish </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/DinosaurFish.jpeg' style="width:190px;height:175px;"> <br><br> Dinosaur Fish </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/KoiFish.jpeg' style="width:190px;height:175px;"> <br><br> Koi Fish </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/MauiFish.jpeg' style="width:190px;height:175px;"> <br><br> Maui Fish </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/MongoliaFish.jpeg' style="width:190px;height:175px;"> <br><br> Mongolia Fish </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/NemoFish.jpeg' style="width:190px;height:175px;"> <br><br> Nemo Fish </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>

    <img src='static/img/WakandaFish.jpeg' style="width:190px;height:175px;"> <br><br> Wakanda Fish </img>

    <form action="cart.php" method='post'><center><br>
            Select Quantity
            <input type='number' name='quantity' min='1' max= '99' value='0'><center> <p style='padding-right: 5px;'></p>
                <input type='submit' value='Purchase'><br><br><br>

    </form>
</center>
    <!--- Scripting --->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>
