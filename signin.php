<?php

session_start();

$username = "";
$result = "";

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "tbdb";


$errors = array();

$db = new mysqli($host, $dbUsername, $dbPassword, $dbname) or die("could not connect to database");

if(isset($_POST['signin']))
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
   

    if(count($errors)==0)
    {
        $query = "SELECT * from user where displayName ='$username' and password = '$password' ";  
        $results = mysqli_query($db,$query);

        if(mysqli_num_rows($results))
        {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in";
            $_SESSION['active']=true;
            $_SESSION['id']= mysqli_query($db, "SELECT id from user where displayName = '$username'");
            header ('location: userprofile.php');
        }
        else
        {
           echo "Wrong username or password. Please try again.";
        }
    }
}

?>