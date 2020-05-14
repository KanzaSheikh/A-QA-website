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

$title = $_POST['question'];
$body = $_POST['desc'];

$title = mysqli_real_escape_string($db, $_POST['question']);
$body = mysqli_real_escape_string($db, $_POST['desc']);
// if(empty($username)) {array_push($errors, "Username is required");}

$query = "INSERT into question (title, body) values ('$title', '$body')";

mysqli_query($db,$query);
$_SESSION['title'] = $title;
$_SESSION['body'] = $body;
echo "Question submitted successfully";

    //  header('location: userprofile.php');


?>