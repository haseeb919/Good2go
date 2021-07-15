<?php
session_start();
$con = mysqli_connect("localhost","root","","good2go");

if(isset($_POST['save_datetime']))
{
    $username = $_SESSION['username'];
    $trash = $_POST['trash'];
    $bags = $_POST['bags'];
    $event_dt = $_POST['event_dt'];
    
    

    $query = "INSERT INTO requests (username,trash,bags,event_dt,status) VALUES ('$username','$trash', '$bags','$event_dt','PENDING')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Booking Created Sucessfully";
        header("Location: makerequest.php");
    }
    else
    {
        $_SESSION['status'] = "Date Time Not Inserted";
        header("Location: makerequest.php");
    }
}
?>