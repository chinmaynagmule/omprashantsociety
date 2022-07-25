<?php
session_start();
include "connection.php";
if(isset($_REQUEST['submit'])){
$admin_name=$_REQUEST['admin_name'];
$pass=$_REQUEST['password'];
$query5="select * from admin where admin_name='$admin_name' && password='$pass'";
$result6=mysqli_query($con, $query5);
$num= mysqli_num_rows($result6);
 if ($num==true) {
    echo "<script>alert('Welcome Admin');
    window.location.href='http://localhost/TYPROJECT/FINAL/Admin/dashboard/dashboard.php'</script>";
      $_SESSION["admin_name"]=$admin_name;
  } else {
    echo "<script>alert('Incorrect values entered');
    window.location.href='http://localhost/TYPROJECT/FINAL/Admin/login/adminlogin.php'</script>";
  }
}
?>