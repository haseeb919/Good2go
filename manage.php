<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All Requests</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <main>
      <form action="">
        <div class="sidebar">
           <img src="assets/images/logo.png" width="200px">
          
  <a href="allusers.php"><i class="fa fa-fw fa-home"></i> All User</a>
  <a href="allrequests.php"><i class="fa fa-fw fa-wrench"></i> All Requests</a>
  <a href="manage.php"><i class="fa fa-fw fa-envelope"></i> Manage Requests</a>
  <a href="loginadmin.php?logout='1'"><i class="fa fa-fw fa-envelope"></i> Log Out</a>
</div>
    

    
     
           <div class="col-sm-9">
           <table class= "table" border="7" width="700px">
  <tr>
    <td>Username</td>
    <td>No.of bags</td>
    <td>Trash Description</td>
    <td>Date & Time</td>
    <td>Status</td>
    <td><></td>
  </tr>
   <?php

include_once 'databaseconnection.php';

$requests = mysqli_query($conn,"select * from requests");
while($row = mysqli_fetch_array($requests))
{
?>
  <tr>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['bags']; ?></td>
    <td><?php echo $row['trash']; ?></td>    
    <td><?php echo $row['event_dt']; ?></td> 
    <td><?php echo $row['status']; ?></td> 
    <td><a href="inprogress.php?updated=<?php echo $row['id']; ?>">In Progress</a> <a href="complete.php?updated=<?php echo $row['id']; ?>">Complete</a></td>
  </tr> 

?>
<?php
}
?>

                

              </table>
            </div>

            </form>
        
            
         
    
   
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
