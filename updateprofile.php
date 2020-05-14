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
$about = mysqli_real_escape_string($db, $_POST['about']);
$gender = $_POST['gender'];
$id = $_SESSION['id'];



$sql = "UPDATE user SET displayName ='$username', about = '$about', gender = '$gender' WHERE id= $id";
if(mysqli_query($db, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

$user_id_selection = "SELECT * from user where id = '$id'";
$userid = mysqli_query($db, $user_id_selection);
$data = mysqli_fetch_assoc($userid);

     $_SESSION['username']= $data['displayName'];
     $_SESSION['email']= $data['email'];
     $_SESSION['about']= $data['about'];