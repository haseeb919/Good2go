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
  <title>Make a request</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
    <div class="sidebar">
       <img src="assets/images/logo.png" width="100px">
        
  <a href="makearequest.html"><i class="fa fa-fw fa-home"></i> Make A Request</a>
  <a href="viewrequest.php"><i class="fa fa-fw fa-wrench"></i> View Requests</a>
  <a href="index.php?logout='1'"><i class="fa fa-fw fa-envelope"></i> Logout</a>
</div>
    <br>
    <br>
    <div class="login"> 
     <form method="post" action="request.php">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>
                          
               
                           <div class="container">
                                <label for="">Bags of Trash</label>
                                <input type="text" name="bags" id="Request" placeholder="No of bags">
                            
                           
                                <label for="">Trash Description</label>
                                <input type="text" name="trash" id="Request" placeholder="Oraganic.Paper/Carta">
                            

                           
                                <label for="">Event Date & Time</label>
                                <input type="datetime-local" name="event_dt" id="Request" placeholder="">
                                <br>
                                <br>
                            
                            
                                <button type="submit" name="save_datetime" id="Sub">Submit</button>
                             </div>
                        </form>

                   
                </div>
            

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>