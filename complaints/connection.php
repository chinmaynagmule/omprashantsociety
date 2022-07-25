<?php
$server="localhost";
$user="root";
$password="";
$db="ompdb";

$conn = mysqli_connect($server,$user,$password,$db);

if(isset($_POST['submit'])){
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['number']) && !empty($_POST['wing']) && !empty($_POST['complaint'])) {
        $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $number= $_POST['number'];
        $wing= $_POST['wing'];
        $complaint= $_POST['complaint'];

        $query= "INSERT INTO `complaints`(`firstname`, `lastname`, `number`, `wing`, `complaint`) VALUES ('$firstname','$lastname','$number','$wing','$complaint')";
        $run= mysqli_query ($conn, $query) or die(mysqli_error());

        if($run){
            echo "<script>alert('Complaint Submitted Successfully');
            window.location.href='complaints.php'</script>";
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