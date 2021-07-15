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
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <main>
      <form action="showrequests.php" method="post">
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
    

    
     
          <div class="col-sm-9">
           <table class= "table" border="7" width="700px">
  <tr>
    <td>Bags of Trash</td>
    <td>Trash Description</td>
    <td>Date & Time</td>
  </tr>
   <?php

include_once 'databaseconnection.php';

$username = $_SESSION['username'];

$sql = "SELECT * from requests where username = '$username'";
$records = $conn-> query($sql);

if($records-> num_rows >0){
  while($row = $records -> fetch_assoc()){
  echo "<tr><td>" . $row["trash"]. "</td><td>".$row["bags"]. "</td><td>" . $row["event_dt"]."</td></tr>";
}

?>
<?php
}
?>

                

              </table>

            </form>
            
          </div>
        </div>
        
      </div>
    
   
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
