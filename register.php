<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register | Good2go</title>

   <link rel="stylesheet" type="text/css" href="assets/css/style.css"/> 
</head>
<body>
  <main>
    <br>
    <br>
    <br>
    <div class="login"> 
     <form method="post" action="register.php">


    <?php include('errors.php'); ?>

    <div class="container">
      <img src="assets/images/logo.png" width="200px">
      
         <label></label>
         <input type="text" name="username" id="Uname" placeholder="Username" value="<?php echo $username; ?>">
         <br>
         <br>
         <label></label>
      <input type="email" name="email" id="Uname"placeholder="Email" value="<?php echo $email; ?>">
      <br>
      <br>

         <label></label>
          <input type="password"  id="Uname" placeholder="Password" name="password_1">
          <br>
          <br>
           <input type="password" name="password_2" id="Uname" placeholder="Confirm Password">
         <br>
         <br>
  
         <button type="submit" id="reg" name="reg_user">Register</button>
      <br>
    </div>
    <p>
      <br>
      Already a member? <a href="login.php">Sign in</a>
    </p>
    </form>
     </div> 
    
            
            
          </div>
        </div>
        
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
