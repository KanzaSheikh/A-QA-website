<?php
session_start();
$_SESSION['active'] = false;
?>


<!DOCTYPE html>
<html>
<head>
<title> Techbytes </title>
<!--<link rel="stylesheet" type="text/css" href="bootstrap.css">-->
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet"type="text/css" href="first web page1.css">
<link rel="stylesheet" type="text/css" href="web page design.css">
<style type="text/css">

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
    padding-right: 200px;  
  }
  .userid{
    padding-left: 20px;
    margin-left: 20px; 
    float: right;
  }
  </style>
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
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
                        <li class="nav-item active">
                            <a class="nav-link" data-toggle="modal" data-target="#loginModal" href="#">Sign in or Sign up <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                  </div>
    </nav>

    <!-- Code for navbar ends here -->
  
        <div class="row">
            <div class="col-sm-2 ">
               <div class="verticalLine">
                  <button type="button" class="btn btn-primary askaquestion" data-toggle="modal" data-target="#loginModal">
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
                  <a href="#" class="popmake-close pum-close" data-toggle="modal" data-target="#accountModal" data-dismiss="modal">Create a new account</a>
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
                  <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
                </div>
                                    
              </div>
              <div class="modal-footer">
                <div class="createanaccount">
                  <p> Already a member? <br/>
                    <a href="#" class="popmake-close pum-close" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Sign in</a>
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
             <h3 class="AllQuestions">
               All Questions
             </h3>
            <div class="horizontalLine">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link " href="#">Latest</a>
                    </li>
                    <li class="nav-item votes">
                      <a class="nav-link" href="#">Votes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Unanswered</a>
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
