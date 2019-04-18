<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'admin');
  define('DB_PASSWORD', 'admin');
  define('DB_DATABASE', 'twsm');
  // Open connection
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$username = "";
  if($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form

     $myusername = mysqli_real_escape_string($db,$_POST['username']);
     $mypassword = mysqli_real_escape_string($db,$_POST['password']);

     $sql = "SELECT id FROM user WHERE username = '$myusername' and password = '$mypassword'";
     $result = mysqli_query($db,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

     $count = mysqli_num_rows($result);

     // If result matched $myusername and $mypassword, table row must be 1 row
     if($count == 1) {
        header("Location: http://localhost/webProjects/PhpLogin/Portfolio.html");
     }else {
        $login_error = "Wrong username or password";
     }
  }
  mysqli_close($db);
?>
