<?php
include "connection.php";
$name= $_POST['name'];
$username= $_POST['username'];
$email= $_POST['email'];
$number= $_POST['number'];
$password= $_POST['password'];

$query = "SELECT * FROM users WHERE username= '$username'";
$result= mysqli_query($con, $query);
$count= mysqli_num_rows($result);
if ($count >0) {
    echo "<script>alert('Username is Already Taken');
        window.location.href='http://localhost/TYPROJECT/FINAL/User/login%20and%20register/index.php'</script>";  
}
else{
    $reg= "INSERT INTO users (name, username, email, number, password) VALUES ('$name','$username','$email','$number','$password')";
    $query1= mysqli_query ($con, $reg);
    if ($query1) {
        echo "<script>alert('Registered Successfully');
        window.location.href='http://localhost/TYPROJECT/FINAL/User/login%20and%20register/index.php'</script>";   
    }
    else {
        echo "<script>alert('Not Registered Successfully');
        window.location.href='http://localhost/TYPROJECT/FINAL/User/login%20and%20register/index.php'</script>";
    }
}
?>