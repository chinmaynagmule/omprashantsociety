<?php
$server="localhost";
$user="root";
$password="";
$db="ompdb";

$conn = mysqli_connect($server,$user,$password,$db);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['contactno']) && !empty($_POST['roomno']) && !empty($_POST['wing']) && !empty($_POST['floor'])) {
        $name= $_POST['name'];
        $contactno= $_POST['contactno'];
        $roomno= $_POST['roomno'];
        $wing= $_POST['wing'];
        $floor= $_POST['floor'];

        $query= "INSERT INTO `residential`(`name`, `contactno`, `roomno`, `wing`, `floor`) VALUES ('$name','$contactno','$roomno','$wing','$floor')";
        $run= mysqli_query ($conn, $query) or die(mysqli_error());

        if($run){
            echo "<script>alert('Data Inserted Successfully');
            window.location.href='http://localhost/TYPROJECT/FINAL/Admin/memberdetails/detailsupdate/updatedetails.php'</script>";
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