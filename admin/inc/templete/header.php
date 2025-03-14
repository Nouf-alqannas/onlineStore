<?php
session_start();
include "../conect.php";
include '../inc/function/function.php';
if(isset($_SESSION["userid_admin"])){

    if(isset($_SESSION["userid_admin"])){ $id = $_SESSION["userid_admin"];}

    $stmt = $con->prepare("SELECT * FROM `admin` WHERE Admin_ID =?");
    $stmt->execute(array($id));
    $rows =$stmt->fetch();
}else{
    header("location:LogInAdmin.php");

}


$products = GetProductAndCats();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../layout/css/bootstrap.css" rel="stylesheet"  />
    <link rel="stylesheet" href="../layout/css/styling.css" />
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            min-height: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
        .theLogo{
    text-align: center;
    font-size: x-large;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

    </style>
</head>
<body>
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
