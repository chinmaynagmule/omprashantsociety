<?php
$server="localhost";
$user="root";
$password="";
$db="ompdb";

$conn = mysqli_connect($server,$user,$password,$db);
$ID= $_GET['ID'];
$deletequery= "DELETE FROM `notices` WHERE ID='$ID'";
$query= mysqli_query($conn, $deletequery);
  
  if($query){
    echo "<script>alert('Data Deleted Successfully');
            window.location.href='http://localhost/TYPROJECT/FINAL/Admin/notices/editnotices/editnotices.php'</script>";
  }
  else{
    echo "<script>alert('Data Not Deleted');
    window.location.href='http://localhost/TYPROJECT/FINAL/Admin/notices/editnotices/editnotices.php'</script>";
  }
?>