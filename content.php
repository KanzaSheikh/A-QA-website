
<?php  include 'index.php'; ?> 
  
<?php  
  $sort_value=0;
  if (isset($_GET['sort']))
 $sort_value = $_GET['sort'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tbdb";
$i=1;
$page=1;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  

   //count number of pages
$sql2="SELECT title FROM question";
$total_items = $conn->query($sql2);
$pages=ceil(($total_items->num_rows)/8);


$current_page=$_GET["page"];
if($current_page==""||$current_page==1)
{
	$start=0;
}

else
{
	$start=($page*5)*5;
}
$sql= "SELECT title FROM question limit $start,5";
$array = array();
$result = $conn->query($sql);


if ($result->num_rows > 0){
 while($row = $result->fetch_assoc()) {
        $array[] = $row;
    }
  for ($x=0; $x<sizeof($array); $x++)
  {     
      echo '
       <h3 class="AllQuestions">
               All Questions
             </h3>
            <div class="horizontalLine">
                <ul class="nav nav-pills">
                    <li class="nav-item latest">
                      <a class="nav-link anav" href="content.php?page='.$i.'?sort=0">Latest</a>
                    </li>
                    <li class="nav-item votes">
                      <a class="nav-link anav" href="content.php?page='.$i.'?sort=1">Votes</a>
                    </li>
                    <li class="nav-item unans">
                      <a class="nav-link anav" href="content.php?page='.$i.'?sort=2">Unanswered</a>
                    </li>
                  </ul>
                  <!--question div-->
            </div><div>
              <ul class="question-ul">
                <li class="question-li">
                  <div class="question-div row">
                    <div class="col-sm-8" style="display: inline-block;">
                      <div>
                        <h6 style="word-wrap: break-word; font-size:18px;">
                          <a style="color:#191919; text-decoration:none;" href="">'.$array[$x]['title'].'</a>
                          </h6>
                      </div>
                      <div>
                        <div style="max-height: 50px; word-wrap: break-word;">
                          <p class="q-info" style= "width:100%; max-height:inherit;
                           text-overflow: ellipsis;overflow: hidden; white-space: nowrap;">nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div>
                          <a href="">
                            <div style="display: inline-block;">
                            <div style="background-color: #000; height: 40px; width:40px; border-radius: 50%; display:inline-block; vertical-align: middle;"><!--<img src="">--></div>
                            <span style="display:inline-block;">author</span>
                          </div>
                          </a>
                            <span style="margin-left: 10%;">Date&<span style="color: #DC143C;">category</span></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 d-flex flex-sm-column flex-lg-row justify-content-md-between" style="display: inline-block;">
                      <div >
                        <div class="vote-div">4</div>
                            <span style="color: #808080">Votes</span>
                      </div>
                      <div >
                        <div class="vote-div">8</div>
                            <span style="color: #808080">Views</span>
                      </div>
                       <div >
                        <div class="vote-div">3</div>
                            <span style="color: #808080">Answer</span>
                      </div>
                   </div>
                   </div>
                </li>
              </ul>
            </div>';
        }
    }
    //page loop
    for($i=1; $i<=$pages; $i++)
    {
       ?> <a href="content.php?page=<?php echo $i?>?sort=<?php echo $sort_value?>" style="text-decoration: none;"><?php echo $i." "; ?></a><?php
    }

        $conn->close();
       ?>
      <?php  include 'index2.php';?>
