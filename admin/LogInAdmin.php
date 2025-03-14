<?php
session_start();
include "../conect.php";


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Login Admin </title>
        <link href="../layout/css/bootstrap.css" rel="stylesheet"  />
    <link rel="stylesheet" href="layout/css/styling.css" />
    </head>
    <body>
         <!--Header-->
         <div class="container-fluid">
            <nav class="navbar navbar-default navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" style="float: left;">
                    <span class="navbar-brand">Hi: <?php if(!empty($id)){echo $rows['Name']; } ?></span>
                </div>

                <div class="navbar-header" style="float: right;">
                    <a class="navbar-brand" href="index.php">Home</a>
                    <a class="navbar-brand" href="../logout.php">LogOut</a>
                </div>

            </div>
            </nav>


         <div class="container" style=" min-height: 500px;">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card list-group">
                <div class="card-header list-group-item disabled"> Login Admin</div>
                <div class="card-body list-group-item">
                    <form method="POST"  action = "inc/login_admin.php">

                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> email</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="email" type="email" class="form-control " name="email" value="" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-group form-group-lg">
                            <div class="row">
                                <label class="col-md-2 control-label" style="line-height: 3;"> password</label>
                                <div class="col-sm-10 col-md-8">
                                    <input id="password" type="password" class="form-control " name="password" required  >
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    GO
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--footer-->
<footer class="text-center text-black py-3 fixed-bottom" style="background-color: #508f07;">
    © 2024 Copyright: Cilantro Store
    <img src="img/Cilntro_LOGO.png" width="3%">
</footer>
<!--footer-->
         </div>
    </body>
</html>
