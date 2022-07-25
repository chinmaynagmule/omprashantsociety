<?php
session_start();
include "connection.php";
if(isset($_REQUEST['signin'])){
$username=$_REQUEST['username'];
$pass=$_REQUEST['password'];
$query5="select * from users where username='$username' && password='$pass'";
$result6=mysqli_query($con, $query5);
$num= mysqli_num_rows($result6);
 if ($num==true) {
  echo "<script>alert('Welcome User');
  window.location.href='http://localhost/TYPROJECT/FINAL/homepage/index.php'</script>";
      $_SESSION["username"]=$username;
  } else {
    echo "<script>alert('Incorrect values Entered');
  window.location.href='http://localhost/TYPROJECT/FINAL/User/login%20and%20register/index.php'</script>";
  }
}
?>