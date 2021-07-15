<?php
session_start();
include_once 'databaseconnection.php';


if(isset($_GET['updated']))
{    
  $id=$_GET['updated'];

     $result = mysqli_query($conn, "UPDATE requests SET status = 'In Progress' WHERE id= '$id'") or die(mysql_error());


     if($results)
     {
        $_SESSION['success'] = "Request is in In Porgress";
        header('Location:manage.php');
     }else{
         $_SESSION['failure'] = "Request is not In Progress";
        header('Location:manage.php');

     }
      
}


?>