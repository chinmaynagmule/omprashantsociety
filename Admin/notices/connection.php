<?php
$server="localhost";
$user="root";
$password="";
$db="ompdb";

$conn = mysqli_connect($server,$user,$password,$db);

if(isset($_POST['submit'])){
    if(!empty($_POST['notice'])) {
        $notices= $_POST['notice'];

        $query= "INSERT INTO `notices`(`notice`) VALUES ('$notices')";
        $run= mysqli_query ($conn, $query) or die(mysqli_error());

        if($run){
            echo "<script>alert('Data Inserted Successfully');
            window.location.href='http://localhost/TYPROJECT/FINAL/Admin/notices/notices.php'</script>";
        }
        else{
            alert("Form Not Submitted") ;
        }
    }
    else{
        echo "All fields Required";
    }
     

}

?>