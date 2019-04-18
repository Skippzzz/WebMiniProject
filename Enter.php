<?php include('login.php')?> 
 <!DOCTYPE html> 
 <html> 
   <head> 
     <title>Login</title> 
     <link rel="stylesheet" href="style.css"> 
   </head> 
   <body> 
     <form method="post" action="Enter.php" id="login_form"> 
  <h1>Login</h1> 
  <div <?php if (isset($login_error)): ?> class="form_error" <?php endif ?> > 
  <input type="text" name="username" placeholder="Username" required="required" value="<?php echo $username; ?>"> 
  <?php if (isset($login_error)): ?> 
    <span><?php echo $login_error; ?></span> 
  <?php endif ?> 
  </div> 
  <div> 
    <input type="password"  placeholder="Password" name="password" required="required"> 
  </div> 
  <div> 
      <button type="submit" name="login" id="login_btn">Login</button> 
      <button type="button" name="login" id="reg_btn" onclick="location.href='http://localhost/webProjects/PhpLogin/WebMiniProject/registering.php'">Register</button> 
  </div> 
</form> 
   </body> 
 </html> 
