<?php
$server="localhost";
$user="root";
$password="";
$db="ompdb";

$conn = mysqli_connect($server,$user,$password,$db);
$id= $_GET['id'];
$deletequery= "DELETE FROM `users` WHERE id='$id'";
$query= mysqli_query($conn, $deletequery);
  
  if($query){
    echo "<script>alert('Data Deleted Successfully');
            window.location.href='http://localhost/TYPROJECT/FINAL/Admin/registeredusers/registeredusers.php'</script>";
  }
  else{
    echo "<script>alert('Data Not Deleted');
    window.location.href='http://localhost/TYPROJECT/FINAL/Admin/registeredusers/registeredusers.php'</script>";
  }
?>