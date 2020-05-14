<!<!DOCTYPE html>
<html>
<head>
<title> Techbytes </title>
<!--<link rel="stylesheet" type="text/css" href="bootstrap.css">-->
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet"type="text/css" href="first web page1.css">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- jquery library --> 
   <script type="text/javascript" src="./jquery-3.4.1.min.js"></script>
<style type="text/css">
.btn-primary
{
  margin-top: 30px;
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
  margin: auto;
   
}
.verticalLine {
  border-right: thin solid #c0c0c0;
}
.verticalline{
  border-left: thin solid #c0c0c0;
}
.horizontalLine{
  border-top: thin solid #c0c0c0;
  border-bottom: thin solid #c0c0c0;
}
.AllQuestions{
  color: #4e4a4a;
  margin-top: 20px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 10px;
}
.list-group-mine .list-group-item {
  background-color: #eef1f7;
  border-top: 1px solid #c0c0c0;
  border-left-color: #fff;
  border-right-color: #fff;
  text-decoration: none;
}

.list-group-mine .list-group-item:hover {
  background-color:#D8D8FA;
}
.list-group-mine .list-group-item:active{
  background-color:#D8D8FA;
}

body{
  padding-top: 50px;
  height: 100%;
  margin: 0
  }
  .createanaccount{
    padding-top: 20px;
    padding-right: 160px;  
  }

.box {
  display: flex;
  flex-flow: column;
  height: 100%;
}

.box .roww {
  border: 1px dotted grey;
}

.box .roww.header {
  flex: 0 1 auto;
  /* The above is shorthand for:
  flex-grow: 0,
  flex-shrink: 1,
  flex-basis: auto
  */
}

.box .roww.content {
  flex: 1 1 auto;
}

.box .roww.footerr {
  flex: 0 1 auto;
}
  .selected {
       border-bottom: 4px solid #f39c12;
  }
  .anav{
    padding: 0px;
    margin:5px 15px;
    width: min-content;
  }
  .question-ul{
    list-style: none;
    margin:10px 0px;
    padding: 0px;
  }
  .q-info{
    width: inherit;
    margin-bottom: 20px;
    color:#666;
  }
  .question-li{
 
    border-bottom: thin solid #c0c0c0 ;
  }
  .question-div{
    margin: 5px 15px;
  }
  .vote-div{
     height: 40px; width:40px; border-radius: 50%; color: #1E90FF;
    text-align: center;
    vertical-align: middle;
    line-height: 40px; 
    border-color: #DDA0DD;
    border-style: solid;
    border-width:medium; } 
  .footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
.footera:hover{
  color: white;
}
.footera{
  margin: auto 10px;
}
  </style>
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- jQuery library -->
  
  <script type="text/javascript">
    $(document).ready(function()
   {
    $('.anav').click(function(){
    $('li a').removeClass("selected");
    $(this).addClass("selected");
    });
    });
  </script> 
</head>

<body>

  <!-- Code for navbar starts here -->
<div class="box">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark roww header">
            <a class="navbar-brand" href="#"><strong>Techbytes</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home<span </span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1">Contact</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
    </nav>

    <!-- Code for navbar ends here -->
  
        <div class="row no-gutters roww content">
            <div class="col-sm-2 verticalLine" style="background-color: #eef1f7">

               <div class="">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
                      <span class="glyphicon glyphicon-plus"></span>
                    Ask a Question</button>

 <!-- Code for the pop up login form starts here -->  

                    <div class="modal fade" role="dialog" id="loginModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Login</h3>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                                </div>
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
                                    <button type="submit" class="btn btn-primary"> Sign In </button>
                  
                                </div>

                                <div class="modal fade" role="dialog" id="accountModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Create a new account</h3>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="text" name="firstname" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                                            </div>
                                                <div class="form-group">
                                                      <input type="text" name="username" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control" placeholder="Confirm Password">
                                                </div>
                              
                                            </div>
                                            <div class="modal-footer">
                                              
                                                <button type="submit" class="btn btn-primary"> Create Account </button>
                              
                                            </div>
                                        </div>
                              
                                    </div>
                              
                                </div>



                            </div>
                  
                        </div>
                  
                    </div>
                  

<!-- Code for pop up login form ends here  -->

               <div class="list-group list-group-flush list-group-mine">
                    <a class="list-group-item" href="#">Questions</a> 
                      <a class="list-group-item"href="#">Badges</a>
                      <a class="list-group-item"href="#">Categories</a>
                      <a class="list-group-item"href="#">Users</a>
                      
                    </div>         
                 </div>
              
            </div>
            <div class="col-sm-8">
