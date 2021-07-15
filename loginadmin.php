<?php include('server2.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Good2Go | Good2go</title>

   <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>  
</head>
<body>
  <main>
    <br>
    <br>
    <br>
 
    <div class="login"> 
     <form method="post" action="loginadmin.php">

    <?php include('errors.php'); ?>

    <div class="container">
      <img src="assets/images/logo.png" width="200px">
         <label></label>
         <input type="text" name="username" id="Uname" placeholder="Username"  >
         <br>
         <br>

         <label></label>
         <input type="password" name="password"  id="Pass" placeholder="Password">
         <br>
         <br>
  
         <button type="submit" id="log" name="login_user">Login</button>
    </div>
   
    </form>
     </div>           
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>    
</html>  