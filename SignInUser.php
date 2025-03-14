<?php
session_start();
include "conect.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Login User </title>
        <link href="layout/css/bootstrap.css" rel="stylesheet"  />
        <link rel="stylesheet" href="layout/css/styling.css" />
    </head>
    <body>
    <div class="container-fluid">
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">

  <div class="navbar-header" style="float:left;">
        <a class="navbar-brand" href="index.php">Home</a>
        <a class="navbar-brand" href="ContactUs.php">Contact Us</a>


    </div>
    <div class="navbar-header" style="float: right;">
        <span class="navbar-brand">Hi: <?php if(!empty($id)){echo $rows['Name']; } ?></span>
        <?php if(!empty($id)){
            echo '<a class="navbar-brand" href="logout.php">LogOut</a>';
        }else{
            echo '<a class="navbar-brand" href="LogInUser.php">Sign in</a>';

        }
         ?>
    </div>



  </div>
</nav>



<div class="container" style="min-height: 500px;">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card list-group">
                <div class="card-header list-group-item disabled">  Sign In User</div>
                <div class="card-body list-group-item">
                    <form method="POST" method= "POST" action = "inc/register_user.php">

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Name</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="name" type="text"  placeholder = "First name" class="form-control " name="firstName" required >
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Email</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="name" type="email" class="form-control " name="email" value="" placeholder = "Enter your Email" required >
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Phone Number</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="number" type="number" class="form-control " placeholder="+(966) ##-###-####" name="phoon" required  >
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Address</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="name" type="text"  class="form-control " name="adrees" required >
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Password</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="number" type="password" class="form-control"  placeholder="Create a password" name="password1" required  >
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> Confirm password</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="number" type="password"  placeholder="Confirm your password" class="form-control " name="password2" required  >
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block">
                                    SignUp
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="Reset" class="btn btn-primary btn-block">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                    <p> Do have an account? <a href="LoginUser.php"> LogIn </a> </p>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--Header-->

<!--footer-->
<footer class="text-center text-black py-3 fixed-bottom" style="background-color: #508f07;">
    © 2024 Copyright: Cilantro Store
    <img src="img/Cilntro_LOGO.png" width="3%">
</footer>
<!--footer-->
    </body>
</html>
