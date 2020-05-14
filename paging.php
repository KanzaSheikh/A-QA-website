<?php 
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  

   //count number of pages
$total_items = $conn->query("SELECT * FROM abc");
$total_page=ceil(($total_items->num_rows)/8);
$
//current page in url
$start=0;
if (isset($_GET['page'])) {
$page = $_GET['page'];
if($page==""||$page==1)
{
	$start=0;
}
else
{
	$start=($page*8)-8;
}
}

//collect data
$sql2= "SELECT * FROM abc limit $start,8";
$array = array();
$result = $conn->query($sql2);


//display data
if ($result->num_rows > 0){
 while($row = $result->fetch_assoc()) {
        echo $row['id'].' '.$row['letter'].'<br>';
    }

    //display pagination
  for($i=1; $i<=$total_page; $i++)
    {
       ?> <a href="paging.php?page=<?php echo $i?>" style="text-decoration: none;"><?php echo $i." "; ?></a><?php
    }
}
        $conn->close();
   ?>