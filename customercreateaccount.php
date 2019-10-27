<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!--Accessing js file-->
    <script type='text/javascript' src='validate.js'></script>
    <script>
        function validate(form)
        {
            var fail = validateUsername(form.username.value)
            fail += validateName(form.name.value)
            fail += validatePassword(form.password.value)
            fail += validatePassword2(form.password2.value)
            if(form.password.value!="")
                fail += comparePasswords(form.password.value, form.password2.value)

            if (fail=="") return true
            else { alert(fail); return false}
        }
    </script>


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
        <h1 align="center">Create New User</h1>
    </div>
</div>
<br><br><br><br>
<div class="Create-New-User">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="mx-auto">
                <form action="shopfish.php" method="post" onsubmit="return validate(this)">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username (required)" name="username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name (required)" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" name="address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Re-enter Password" name="password2">
                    </div>
					<div class="form-group">
						<input type="hidden" name="customercreateaccount" value="yes">
					</div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-block">Create Account</button>
                    </div>
                    
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


<?php

// validation using Javascript

if (isset($_POST['username'])){
    $username = fix_string($_POST['username']);
    $name = fix_string($_POST['name']);
    $password = fix_string($_POST['password']);
    $password2 = fix_string($_POST['password2']);

    $fail = validate_username($username);
    $fail .= validate_name($name);
    $fail .= validate_password($password);
    $fail .= validate_password2($password2);
    $fail .= compare_password($password,$password2);


    if ($fail == ""){
        echo "Form data validated successfully<br>";
    }else{
        echo $fail. '<br>';
    }

}

//Bunch of validation functions

function validate_username($string){
    return ($string == "") ? "No Username was entered.\n" : "";
}
function validate_name($string){
    return ($string == "") ? "No name was entered.\n" : "";
}
function validate_password($string){
    return ($string == "") ? "No Password1 was entered.\n" : "";
}
function validate_password2($string){
    return ($string == "") ? "No Password2 was entered.\n" : "";
}
function compare_password($pass1, $pass2){
    if($pass1==$pass2) return "";
    else return "Your Passwords do not match\n";
}

///sanitization function
function fix_string($string){
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return htmlentities ($string);
}

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


    $salt1='hg&7';
    $salt2='kw*7';

    $address= $_POST['address'];
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $username= $_POST['username'];
	$password= $_POST['password'];
	$token = hash('ripemd128',"$salt1$password$salt2");


add_user($conn, $address, $name, $username, $phone, $token);


function add_user($conn, $address, $name, $username, $phone, $token){
    $query = "INSERT INTO customer (address, name, phone, username, password) VALUES ('$address','$name', '$phone', '$username', '$token')";
    $result = $conn->query($query);
    if(!$result) die($conn->error);
}

header("Location: shopfish.php");

?>