<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $query="INSERT INTO `complaints`(`firstname`, `lastname`, `number`, `wing`, `complaint`) VALUES ('firstname','lastname','number','wing','complaint')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        ?>
        <script>
            alert("Complaint Registered Successfully");
        </script>
        <?php
        header ("location: http://localhost/TYPROJECT/FINAL/complaints/complaints.php") ;
    }
    else
    {
        ?>
        <script>
            alert("Not Registered");
        </script>
        <?php
    }
}

?>