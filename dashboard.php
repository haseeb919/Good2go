<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
     <div class="sidebar">
      <img src="assets/images/logo.png" width="200px">
       <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    Welcome <strong><?php echo $_SESSION['username']; ?>
 <a href="makerequest.php"><i class="fa fa-fw fa-home"></i> Make A Request</a>
  <a href="viewrequest.php"><i class="fa fa-fw fa-wrench"></i> View Requests</a>
  <a href="index.php?logout='1'"><i class="fa fa-fw fa-envelope"></i> Logout</a> </p>
    <?php endif ?>
</div>
  </div>
</nav>

    <br>
    <div class="col-sm-9">
      <h4><small></small></h4>
      <hr>
      <h2>Introduction</h2>
      <h5><span class="glyphicon glyphicon-time"></span> </h5>
      <h5><span class="label label-danger">Trash</span> <span class="label label-primary">Ipsum</span></h5><br>
      <p>Our aim is to provide an easy and reliable trash management system, in which the service provider will pick trash from the doorsteps of the houses so that the users don’t have to walk till the big trash bins.</p>
      <br><br>
    </div>
  </body>
  </html>
    