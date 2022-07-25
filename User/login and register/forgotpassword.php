<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="forgot.css">
</head>
<body>
    <div class="container" id="container">
    <div class="form-container sign-in-container">
    <?php
session_start();
include "connection.php";
if(isset($_REQUEST['submit'])){
    $email=$_REQUEST['email'];
$query5="select * from users where email='$email'";
$result6=mysqli_query($con, $query5);
$num= mysqli_num_rows($result6);
 if ($num==true) {
     echo  $password;
  } else {
      $password=$_SESSION['password'];
    $query5="select * from users where password";

    ?>
    <script>
    alert("Incorrect values entered");
    </script>
    <?php

  }
}
?>
		<form action="forgotpassword.php" method="POST">
			<h1>Sign in</h1>
            <br>
			<input type="text" placeholder="Enter Your Email" name="email" />
            <label for="">Your Password Is:<?php echo $password;?></label>

			<button name="submit">Submit</button>
		</form>
	</div>
    </div>
</body>
</html>