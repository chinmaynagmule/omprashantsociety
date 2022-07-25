<?php
$server="localhost";
$user="root";
$password="";
$db="ompdb";

$conn = mysqli_connect($server,$user,$password,$db);

if(isset($_POST['submit'])){
    
        $filename=$_FILES["upload"] ["name"];
        $tempname=$_FILES["upload"] ["tmp_name"];
        $folder="admin/images/".$filename;
        move_uploaded_file($tempname,$folder);
        $flatno= $_POST['flatno'];
        $price= $_POST['price'];
        $floor= $_POST['floor'];
        $wing= $_POST['wing'];
        $description= $_POST['description'];
        $ownername= $_POST['ownername'];
        $ownernumber= $_POST['ownernumber'];
        
        $query= "INSERT INTO `rentals`(`flatno`, `price`, `floor`, `wing`, `description`, `images`, `ownername`, `ownernumber`) VALUES ('$flatno','$price','$floor','$wing','$wing','$description','$folder','$ownername','$ownernumber')";
        $run= mysqli_query($conn, $query);


        if($run){
            echo "<script>alert('Data Inserted Successfully');
            window.location.href='http://localhost/TYPROJECT/FINAL/Admin/rentaldetails/rentaldetails.php'</script>";
        }
        else{
            alert("Form Not Submitted") ;
        }
    }
    else{
        echo "All fields Required";
    }
     



?>