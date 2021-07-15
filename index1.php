<?php
session_start();
$con = mysqli_connect("localhost","root","","good2go");

if(isset($_POST['admin_login']))
{
    
        header("Location: loginadmin.php");

    
}
if(isset($_POST['login_user']))
{
    
        header("Location: login.php");

    
}
?>