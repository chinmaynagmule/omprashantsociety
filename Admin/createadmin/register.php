<?php
include "connection.php";
$admin_name= $_POST['admin_name'];
$password= $_POST['password'];

$query = "SELECT * FROM admin WHERE admin_name= '$admin_name'";
$result= mysqli_query($conn, $query);
$count= mysqli_num_rows($result);
if ($count >0) {
    echo "<script>alert('User Already Registered');
    window.location.href='http://localhost/TYPROJECT/FINAL/Admin/createadmin/createadmin.php'</script>";    
}
else{
    $reg= "INSERT INTO `admin`(`admin_name`, `password`) VALUES ('$admin_name','$password')";
    $query1= mysqli_query ($conn, $reg);
    if ($query1) {
        echo "<script>alert('Registered Successfully');
        window.location.href='http://localhost/TYPROJECT/FINAL/Admin/dashboard/dashboard.php'</script>";
    }
    else {
        echo "<script>alert('Registration Failed');
        window.location.href='http://localhost/TYPROJECT/FINAL/Admin/createadmin/createadmin.php'</script>";
    }
}
?>