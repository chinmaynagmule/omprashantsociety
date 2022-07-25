<?php
$server="localhost";
$user="root";
$password="";
$db="ompdb";

$conn = mysqli_connect($server,$user,$password,$db);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['designation']) && !empty($_POST['contactno'])) {
        $name= $_POST['name'];
        $designation= $_POST['designation'];
        $contactno= $_POST['contactno'];

        $query= "INSERT INTO `contact`(`name`, `designation`, `contactno`) VALUES ('$name','$designation', '$contactno')";
        $run= mysqli_query ($conn, $query) or die(mysqli_error());

        if($run){
            echo "<script>alert('Data Inserted Successfully');
            window.location.href='http://localhost/TYPROJECT/FINAL/Admin/contactdetails/contactdetails.php'</script>";
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