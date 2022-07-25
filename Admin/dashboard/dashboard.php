<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Om Prashant Co-Op Society</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
</head>
<style>
        .wrapper{
        font-family: 'Roboto Slab', serif;
    }
    .navbar{
        height: 82px;
        width: 84vw;
    }
    .btn{
        font-size:15px;
  font-weight:580px;
  padding: 8px 12px;
  border-radius: 5px;
    }
    .navbar-brand{
        font-size: 1.9rem;
    }
    .societylogo{
        height: 180px;
        width: 200px;
    }
    body {
    background-image: url("images/society.jpg");
    background-size: 100%;
    background-repeat: no-repeat;
    overflow: hidden;
  }

  .row{
      background-color: white;
      margin-top: 30px;
      width: 100vw;
      height: 25vh;
  }
.main-section{
width:80%;
margin:0 auto;
}
.dashbord{
margin-top:30px;
margin-right: 10px;
display: inline-block;
width:30%;
color:#fff;
border-radius: 3px;
}
.title-section{
border-radius: 5px 5px 0px 0px;
text-align: center;
background-color: #0C2D48;
padding:7px 0px;
}
.title-section h6{
margin:0px;
font-size:20px;
}
.icon-text-section{
background-color:white;
padding:5px 10px;
}
.icon-section{
font-size:50px;
float:left;
width:20%;
color:black;
}
.text-section{
width:80%;
float:right;
text-align: right;
}
.text-section h1{
margin-top:20px;
font-size:25px;
color: black;
}
.detail-section{
background-color: #0C2D48;
cursor: pointer;
border-radius: 0px 0px 5px 5px;
}
.detail-section a{
color:#fff;
}
.detail-section a p{
display: inline-block;
margin: 0px;
font-size: 12px;
padding:10px;
}
.detail-section a i{
float:right;
padding: 10px 5px 0px 0px;
}
</style>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <img class="societylogo" img src="images/Om Prashant Logo.png" alt="society-logo">
            </div>

            <ul class="list-unstyled components">       
                        <li>
                            <a href="#members" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Member Details</a>
                            <ul class="collapse list-unstyled" id="members">
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/memberdetails/detailsupdate/updatedetails.php">Update Details</a>
                                </li>
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/memberdetails/A-wing/winga.php">A-Wing</a>
                                </li>
                                 <li>
                                     <a href="http://localhost/TYPROJECT/FINAL/Admin/memberdetails/B-wing/wingb.php">B-Wing</a>
                                </li>
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/memberdetails/C-wing/wingc.php">C-Wing</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Service Details</a>
                            <ul class="collapse list-unstyled" id="services">
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/servicesdetails/updatedetails/updatedetails.php">Update Details</a>
                                </li>
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/servicesdetails/chef/chef.php">Chef</a>
                                </li>
                                 <li>
                                     <a href="http://localhost/TYPROJECT/FINAL/Admin/servicesdetails/driver/driver.php">Driver</a>
                                </li>
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/servicesdetails/maid/maid.php">Maid</a>
                                </li>
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/servicesdetails/laundry/laundry.php">Laundry</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://localhost/TYPROJECT/FINAL/Admin/maintenacedetails/maintenancedetails.php">Maintenance Details</a>
                        </li>
                        <li>
                            <a href="http://localhost/TYPROJECT/FINAL/Admin/complaintdetails/complaintdetails.php">Complaints Details</a>
                        </li>
                        <li>
                            <a href="#notices" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Notice Details</a>
                            <ul class="collapse list-unstyled" id="notices">
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/notices/notices.php">Update Notices</a>
                                </li>
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/notices/editnotices/editnotices.php">Edit Notices</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Contact Details</a>
                            <ul class="collapse list-unstyled" id="contact">
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/contactdetails/contactdetails.php">Update Contacts</a>
                                </li>
                                <li>
                                    <a href="http://localhost/TYPROJECT/FINAL/Admin/contactdetails/editcontact/editcontact.php">Edit Contacts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://localhost/TYPROJECT/FINAL/Admin/registeredusers/registeredusers.php">Registered Users</a>
                        </li>
                        <hr>
                        <a style="margin-left: 10px" href="http://localhost/TYPROJECT/FINAL/Admin/createadmin/createadmin.php"><button type="button" class="btn btn-outline-primary">Create New Admin Account</button></a>
                </ul>
        </nav>


        <!-- Page Content  -->
        <div class="content">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand">Welcome:    <?php 
                    if(isset($_SESSION['admin_name']))
                        {
                            echo $_SESSION['admin_name'];
                        }
                        else{
                            ?>
                            <section></section>
                            <?php
                        }?></a>
                        <a href="logout.php"><button type="button" class="btn btn-outline-primary">Logout</button></a>
                </div>
            </nav>
            <div class="main-section">
                <div class="dashbord maintenance-content">
                    <div class="title-section">
                        <h6>Total Maintenance</h6>
                    </div>
                    <div class="icon-text-section">
                        <div class="icon-section">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="text-section">
                            <?php
                            $maintquery = "SELECT * FROM maintenance";
                            $run = mysqli_query($conn,$maintquery);
                            if($total = mysqli_num_rows($run))
                            {
                                echo '<h1>'.$total.'</h1>';
                            }
                            else
                            {
                                echo '<h1>No data</h1>';
                            }
                            ?>
                            
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="detail-section">
                        <a href="http://localhost/TYPROJECT/FINAL/Admin/maintenacedetails/maintenancedetails.php">
                            <p style="color: white">View Detail</p>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="dashbord complaint-content">
                    <div class="title-section">
                        <h6>Total Complaints</h6>
                    </div>
                    <div class="icon-text-section">
                        <div class="icon-section">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="text-section">
                        <?php
                            $maintquery1 = "SELECT * FROM complaints";
                            $run1 = mysqli_query($conn,$maintquery1);
                            if($total1 = mysqli_num_rows($run1))
                            {
                                echo '<h1>'.$total1.'</h1>';
                            }
                            else
                            {
                                echo '<h1>No data</h1>';
                            }
                            ?>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="detail-section">
                        <a href="http://localhost/TYPROJECT/FINAL/Admin/complaintdetails/complaintdetails.php">
                            <p style="color: white">View Detail</p>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="dashbord notices-content">
                    <div class="title-section">
                        <h6>Total Notices</h6>
                    </div>
                    <div class="icon-text-section">
                        <div class="icon-section">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="text-section">
                        <?php
                            $maintquery2 = "SELECT * FROM notices";
                            $run2 = mysqli_query($conn,$maintquery2);
                            if($total2 = mysqli_num_rows($run2))
                            {
                                echo '<h1>'.$total2.'</h1>';
                            }
                            else
                            {
                                echo '<h1>No data</h1>';
                            }
                            ?>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="detail-section">
                        <a href="http://localhost/TYPROJECT/FINAL/Admin/notices/editnotices/editnotices.php">
                            <p style="color: white">View Detail</p>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="dashbord members-content">
                    <div class="title-section">
                        <h6>Total Members</h6>
                    </div>
                    <div class="icon-text-section">
                        <div class="icon-section">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="text-section">
                        <?php
                            $maintquery3 = "SELECT * FROM residential";
                            $run3 = mysqli_query($conn,$maintquery3);
                            if($total3 = mysqli_num_rows($run3))
                            {
                                echo '<h1>'.$total3.'</h1>';
                            }
                            else
                            {
                                echo '<h1>No data</h1>';
                            }
                            ?>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="detail-section">
                        <a href="#">
                            <p style="color: white">View in Member Details</p>
                        </a>
                    </div>
                </div>
                <div class="dashbord service-content">
                    <div class="title-section">
                        <h6>Total Services</h6>
                    </div>
                    <div class="icon-text-section">
                        <div class="icon-section">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="text-section">
                        <?php
                            $maintquery4 = "SELECT * FROM services";
                            $run4 = mysqli_query($conn,$maintquery4);
                            if($total4 = mysqli_num_rows($run4))
                            {
                                echo '<h1>'.$total4.'</h1>';
                            }
                            else
                            {
                                echo '<h1>No data</h1>';
                            }
                            ?>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="detail-section">
                        <a href="#">
                            <p style="color: white">View in Service Details</p>
                        </a>
                    </div>
                </div>  
                <div class="dashbord users-content">
                    <div class="title-section">
                        <h6>Total Registered Users</h6>
                    </div>
                    <div class="icon-text-section">
                        <div class="icon-section">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </div>
                        <div class="text-section">
                        <?php
                            $maintquery5 = "SELECT * FROM users";
                            $run5 = mysqli_query($conn,$maintquery5);
                            if($total5 = mysqli_num_rows($run5))
                            {
                                echo '<h1>'.$total5.'</h1>';
                            }
                            else
                            {
                                echo '<h1>No data</h1>';
                            }
                            ?>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="detail-section">
                        <a href="http://localhost/TYPROJECT/FINAL/Admin/registeredusers/registeredusers.php">
                            <p style="color: white">View Details</p>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


</body>

</html>