<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_DATABASE', 'twsm');
// Open connection
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

  $username = "";
  if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $confirm_password = mysqli_real_escape_string($db,$_POST['confim_password']);

  	$sql_u = "SELECT * FROM user WHERE username='$username'";
    $sql_p = "SELECT * FROM user WHERE password='$password'";
  	$res_u = mysqli_query($db, $sql_u);
    $res_p = mysqli_query($db, $sql_p);

    $user = mysqli_fetch_assoc($res_u);

  	if ($user) {
       if ($user['username'] === $username) {
         $name_error = "Sorry... username already taken";
      }
  	}
    elseif ($password !== $confirm_password) {
       $name_error = "Password does not match";
    }
    else{
           $query = "INSERT INTO user (username, password)
      	    	  VALUES ('$username', '$password')";
           $results = mysqli_query($db, $query);
           // echo "welcome";
           header("Location: http://localhost/webProjects/PhpLogin/WebMiniProject/Enter.php");
           exit();
  	}
  }
  mysqli_close($db);
?>
