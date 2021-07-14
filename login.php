<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login page | Good2go</title>

   <link rel="stylesheet" type="text/css" href="assets/css/userlogin.css"/>  
</head>
<body>
  <main>
 <h2>Login Page</h2><br>    
    <div class="login"> 
     <form method="post" action="login.php">\

    <?php include('errors.php'); ?>

    <div class="container">
         <label>Username</label>
         <input type="text" name="username" id="Uname" placeholder="Username"  >

         <label>Password</label>
         <input type="password" name="password"  id="Pass" placeholder="Password">
  
         <button type="submit" id="log" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php"><label>Signup</label></a>
    </p>
    </form>
     </div>           
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>    
</html>  