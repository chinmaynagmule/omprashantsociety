<?php
$server="localhost";
$user="root";
$password="";
$db="ompdb";

$conn = mysqli_connect($server,$user,$password,$db);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['contactno']) && !empty($_POST['category'])) {
        $name= $_POST['name'];
        $contactno= $_POST['contactno'];
        $category= $_POST['category'];

        $query= "INSERT INTO `services`(`name`, `contactno`, `category`) VALUES ('$name','$contactno','$category')";
        $run= mysqli_query ($conn, $query) or die(mysqli_error());

        if($run){
            echo "<script>alert('Data Inserted Successfully');
            window.location.href='http://localhost/TYPROJECT/FINAL/Admin/servicesdetails/updatedetails/updatedetails.php'</script>";
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