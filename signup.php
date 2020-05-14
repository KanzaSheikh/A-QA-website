<?php

session_start();

$username = "";
$email = "";
$result = "";

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "tbdb";


$errors = array();

$db = new mysqli($host, $dbUsername, $dbPassword, $dbname) or die("could not connect to database");

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$gender = $_POST['gender'];

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password)) {array_push($errors, "Password is required");}


$user_check_query = "SELECT * from user where displayName = '$username' or email = '$email' limit 1";

$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user)
{
    if($user['displayName']===$username){array_push($errors, "Username already exixts");}
    if($user['email']===$email){array_push($errors, "Email already in use");}

}
if($_POST['password']==$_POST['cpassword'])
{
    if(count($errors)==0)
{
    
    $query = "INSERT into user (displayName, gender, email, password) values ('$username', '$gender', '$email','$password')";

    mysqli_query($db,$query);
     $_SESSION['username'] = $username;
     $_SESSION['email'] = $email;
     $_SESSION['password'] = $password;
     $_SESSION['success'] = "You are now logged in";
     $_SESSION['active']=true;


     $user_id_selection = "SELECT * from user where displayName = '$username'";
     $userid = mysqli_query($db, $user_id_selection);
     $data = mysqli_fetch_assoc($userid);

     $id= $data['id'];
     $_SESSION['id']=$id;

     header('location: userprofile.php');
}

}
else
{
    echo "Passwords do not match. Try Again";
}


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
            header ('location: userprofile.php');
        }
        else
        {
            array_push($errors, "Wrong username or password. Please try again.");
        }
    }
}

?>