<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Maintenance Details</title>

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
    .details{
        background: #0C2D48;
        color: #fff;
        font-size: 1.1rem;
        margin-left: 21%;
    }
    .societylogo{
        height: 180px;
        width: 200px;
    }
    .contactheader{
        background: #0C2D48;
        color: #fff;
        width: 40%;
        margin-left: 39%;
        padding: 2px;
        text-decoration: underline;
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
                    <a href="http://localhost/TYPROJECT/FINAL/Admin/dashboard/dashboard.php">Home</a>
                </li>     
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
                </ul>
          </nav>

        <!-- Page Content  -->
        <div class="fram_floor">
            <div class="contactheader">
                <h3>List of Members with Paid Maintenance</h3>
            </div>
            <div class="details container mt-3">            
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Room No</th>
                            <th>Contact No</th>
                            <th>Amount Paid</th>
                            <th>Time&Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                  $conn = mysqli_connect("localhost", "root", "", "ompdb");
                  $sql = "SELECT `ID`, `name`, `roomno`, `contact`, `amount`, `timestamp` FROM `maintenance`";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['roomno']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['timestamp']; ?></td>
                    <td><a href="delete.php?ID=<?php echo $row['ID']; ?>"><button class="btn btn-danger" id="submit">Delete</button></a></td>
                    </tr>
              </tbody>
              <?php
                      }
                    }
                    ?>
                </table>
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