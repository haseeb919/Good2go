<?php
session_start();
include_once 'databaseconnection.php';


if(isset($_GET['updated']))
{    
  $id=$_GET['updated'];

     $result = mysqli_query($conn, "UPDATE requests SET status = 'Complete' WHERE id= '$id'") or die(mysql_error());


     if($results)
     {
        $_SESSION['success'] = "Request is Complete";
        header('Location:manage.php');
     }else{
         $_SESSION['failure'] = "Request is not Complete";
        header('Location:manage.php');

     }
      
}


?>