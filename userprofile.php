<?php

session_start();

?>



<!DOCTYPE html>
<html>
    <head>
        <title> Techbytes - User Profile </title>
<!--<link rel="stylesheet" type="text/css" href="bootstrap.css">-->
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="web page design.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

   <style>
       .badge-primary
       {
        background: orange;
       }
       
.askaquestion
{
  margin-top: 50px;
  margin-right: 20px;
  margin-bottom: 50px;
  margin-left: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-right: 25px;
  padding-left: 25px;
  background: orange;   
}
.list-group
{
  margin-top: 30px;
  margin-right: 20px;
  margin-bottom: 80px;
  margin-left: 0px;
   
}
.verticalLine {
  border-right: thin solid #797474;
}
.verticalline{
  border-left: thin solid #797474;
}
.horizontalLine{
  border-top: thin solid #797474;
  border-bottom: thin solid #797474;
}
.AllQuestions{
  color: #4e4a4a;
  margin-top: 20px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 10px;
}
.votes
{
  border-left: thin solid #797474;
  border-right: thin solid #797474;
}
body{
  padding-top: 50px;
  }
  .createanaccount{
    padding-top: 20px;
    padding-right: 160px;  
  }
  .userid{
    padding-left: 20px;
    margin-left: 20px; 
    float: right;
  }

   </style>
    </head>
    <body>
        <!-- Code for navbar starts here -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand" href="#">Techbytes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav   my-2 my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?php echo $_SESSION['username'];  ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal">Edit Profile</a>
                              <a class="dropdown-item" href="#">Setting</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">logout</a>
                            </div>
                          </li>
                    </ul>
                  </div>
    </nav>

    <!-- Code for navbar ends here -->

    <!-- Code for update profile popup form starts here -->

    <div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title">Edit Profile</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <form action="updateprofile.php" method="POST">
            <div class="modal-body">
                
                <div class="form-group">
                      Username <input type="text" name="username" class="form-control" placeholder="Username" value=" <?php echo $_SESSION['username'] ?>">
                </div>
                <div class="form-group">
                        Email <input type="text" name="email" class="form-control" placeholder="Email" value=" <?php echo $_SESSION['email'] ?>">
                </div>
                <div class="form-group">
                  Gender <select class="form-control" name="gender" id="">
                    <option value="" disabled selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
                <div class="form-group">
                    Bio <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about"  value=" <?php echo $_SESSION['about'] ?>"></textarea>
                    <!-- Bio <input type="textarea" name="about" class="form-control" placeholder=""> -->
                </div>


            </div>
          <div class="modal-footer">

              <button type="submit" class="btn btn-primary" name="updateprofile"> Update Profile </button>

          </div>
          </form>
        </div>
    </div>
</div>

<!-- Code for update profile popup form ends here -->

<!-- code for submit question starts here -->
<div class="modal fade" role="dialog" id="askaquestion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title">Ask a Question</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <form action="submitquestion.php" method="POST">
            <div class="modal-body">
                
                <div class="form-group">
                       <input type="text" name="question" class="form-control" placeholder="Your Question" >
                </div>
                <div class="form-group">
                  <select class="form-control" name="category" id="">
                    <option value="" disabled selected>Category</option>
                    <option value="male">Business</option>
                    <option value="female">Engineering</option>
                    <option value="female">Art</option>
                    <option value="female">Science</option>
                    <option value="female">Religion</option>
                    <option value="female">Programming</option> 
                    <option value="female">Health</option>
                  </select>
                </div>
                <div class="form-group">
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                    <!-- Bio <input type="textarea" name="about" class="form-control" placeholder=""> -->
                </div>


            </div>
          <div class="modal-footer">

              <button type="submit" class="btn btn-primary" name="updateprofile">Submit </button>

          </div>
          </form>
        </div>
    </div>
</div>

<!-- code for submit question ends here -->

    <div class="row">
            <div class="col-sm-2 ">

               <div class="verticalLine">
                  <button type="button" class="btn btn-primary askaquestion" data-toggle="modal" data-target="#askaquestion">
                      <span class="glyphicon glyphicon-plus"></span>
                    Ask a Question</button>


<ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <a href="#">Questions</a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">Tags</a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">Badges</a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">Categories</a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">Users</a>
                      </li>
                    </ul>         
                 </div>  
            </div>


<!-- Code for the pop up login form starts here -->  

<div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title">Login</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <form action="signin.php" method="POST">
            <div class="modal-body">
                
                <div class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

            </div>
          <div class="modal-footer">

            <div class="createanaccount">
                <p> Don't have an account? <br/>
                  <a href="#" class="popmake-close pum-close" data-toggle="modal" data-target="#accountModal">Create a new account</a>
                </p>
            </div>
              <button type="submit" class="btn btn-primary" name="signin"> Sign In </button>

          </div>
          </form>
        </div>
    </div>
</div>

<!-- Code for popup login form ends here -->

<!-- Code for popup create account form starts here -->

<div class="modal fade" role="dialog" id="accountModal">
    <div class="modal-dialog">
         <div class="modal-content">                             
            <div class="modal-header">

  \           <h3 class="modal-title">Create a new account</h3>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
          
            </div>
            <form action="signup.php" method="POST">
              <div class="modal-body">
                              
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <select class="form-control" name="gender" id="">
                    <option value="" disabled selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Confirm Password">
                </div>
                                    
              </div>
              <div class="modal-footer">
                <div class="createanaccount">
                  <p> Already a member? <br/>
                    <a href="#" class="popmake-close pum-close" data-toggle="modal" data-target="#loginModal">Sign in</a>
                  </p>
                </div>
                  <button type="submit" class="btn btn-primary" name="signup"> Sign Up </button>                           
              </div>
            </form>
        </div>   
    </div>
</div>

<!-- Code for popup create account form ends here  -->





            <div class="col-sm-8 ">
             <div class="row">
               <div class="col-sm-6">
                  <h3  class="AllQuestions">
                      <?php echo $_SESSION['username'] ?>'s Profile
                    </h3>
               </div>
              

             </div>

             <div class="jumbotron" >
               <div class="row">
                  <div class="col-sm-6">
                  <div class="card" style="width: 18rem;">
                          <img src="E:\sems\5b5a973bd185a85aa5dcd1ebebcddf0e.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $_SESSION['username'] ?></h5>
                            <p class="card-text">Bio - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lobortis orci ac ligula semper vehicula. Ut sollicitudin sapien ut sem maximus, ut faucibus nisi semper.</p>
                            
                          </div>
                        </div>
                   </div>
                   <div class="col-sm-6">
                    <h1 style ="display: inline"> 0 </h1> <h4 style ="display: inline"><span class="badge badge-primary">Questions</span></h4><hr />
                    <h1 style ="display: inline"> 0 </h1> <h4 style ="display: inline"><span class="badge badge-primary">Answers</span></h4><hr />
                    <h1 style ="display: inline"> 0 </h1> <h4 style ="display: inline"><span class="badge badge-primary">Followers</span></h4>
                   </div>
               </div>


             </div>
            <div class="horizontalLine">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link " href="#">Questions</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="#">Polls</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Answers</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Following</a>
                    </li>
                  </ul>
            </div>
        </div>
            <div class="col-sm-2 ">
              <div class="verticalline">
                <h3>
                  Questions
                </h3>

              </div>
            </div>
          </div>



    </body>
</html>