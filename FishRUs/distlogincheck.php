
<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


if (isset($_POST['distlogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];


    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $salt1='hg&7';
    $salt2='kw*7';
    $token = hash('ripemd128',"$salt1$password$salt2");

    $query = "SELECT * FROM customer WHERE username = '{$username}'";
    $select_user_query = mysqli_query($conn, $query);

    if(!$select_user_query) {
        die("QUERY FAILED" . mysqli_error($conn));
    }

    while($row = mysqli_fetch_array($select_user_query)){
        $db_user =$row['username'];
        $db_pass =$row['password'];
        echo $db_role =$row['role'];
    }

    if($username !== $db_user && $token !== $db_pass && 'admin' !== $db_role){

        header("Location: distributorlogin.php");
    } else if($username == $db_user && $token == $db_pass && 'admin' == $db_role)
    {
        header("Location: distributordash.php");
    } else{
        header("Location: index.php");
    }
}


?>