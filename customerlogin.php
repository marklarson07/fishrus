<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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

<!--- Content --->
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 align="center">Customer Login</h1>
    </div>
</div>
<br><br><br><br>
<div class="login-form">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="mx-auto">
                <form method="post" name="custlogin" action="custlogincheck.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="username" name="username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="password" name="password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="custlogin" class="btn btn-secondary btn-block">Log in</button>
                    </div>
                </form>
                <p class="text-center"><a href="customercreateaccount.php">Create an Account</a></p>
            </div>
        </div>
    </div>
</div>




<!--- Scripting --->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
