<?php
$server="localhost";
$user="root";
$password="";
$db="ompdb";

$conn = mysqli_connect($server,$user,$password,$db);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['roomno']) && !empty($_POST['amount']) && !empty($_POST['contact']) && !empty($_POST['cardname']) && !empty($_POST['cardnumber']) && !empty($_POST['expmonth']) && !empty($_POST['expyear']) && !empty($_POST['cvv'])) {
        $name= $_POST['name'];
        $roomno= $_POST['roomno'];
        $amount= $_POST['amount'];
        $contact= $_POST['contact'];
        $cardname= $_POST['cardname'];
        $cardnumber= $_POST['cardnumber'];
        $expmonth= $_POST['expmonth'];
        $expyear= $_POST['expyear'];
        $cvv= $_POST['cvv'];

        $query= "INSERT INTO `maintenance`(`name`, `roomno`, `amount`, `contact`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES ('$name','$roomno','$amount','$contact','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
        $run= mysqli_query ($conn, $query) or die(mysqli_error());

        if($run){
            echo "<script>alert('Maintenance Filled Successfully');
            window.location.href='http://localhost/TYPROJECT/FINAL/maintenance/maint.php'</script>";
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