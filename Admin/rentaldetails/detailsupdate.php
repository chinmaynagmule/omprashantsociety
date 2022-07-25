<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Rental Details</title>

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
    .credentials {
        display: grid;
        margin-left: 500px;
        margin-top: 20px;
        padding: 40px;
        height: 42rem;
        width: 40rem;
        background: #0C2D48;
        color: #fff;
        overflow: auto;
}
.btn{
    margin:  3% 40%;
}
.societylogo{
        height: 180px;
        width: 200px;
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
                            <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Member Details</a>
                            <ul class="collapse list-unstyled" id="services">
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
                                    <a href="">Chef</a>
                                </li>
                                 <li>
                                     <a href="">Driver</a>
                                </li>
                                <li>
                                    <a href="">Maid</a>
                                </li>
                                <li>
                                    <a href="">Laundry</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Rental Details</a>
                        </li>
                        <li>
                            <a href="">Maintenance Details</a>
                        </li>
                        <li>
                            <a href="">Complaints Details</a>
                        </li>
                        <li>
                            <a href="">Update Notices</a>
                        </li>
                        <li>
                            <a href="">Contact Details</a>
                        </li>
                </ul>
        </nav>

        <!-- Page Content  -->
        <div class="credentials">
            <form action="connection.php" method="POST">
            <h4 style="text-align:center">Enter Resident Details Here</h4>
            <br>
        <form>
  <div class="form-group">
    <label for="name">Resident Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="contactno">Contact Number</label>
    <input type="text" class="form-control" name="contactno" placeholder="Enter Contact Number">
  </div>
  <div class="form-group">
    <label for="roomno">Room Number</label>
    <input type="text" class="form-control" name="roomno" placeholder="Enter Room Number">
  </div>
  <div class="form-group">
  <label for="wing">Wing</label>
  <select class="custom-select" name="wing">
    <option selected>Choose...</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
  </select>
</div>
  <div class="form-group">
  <label for="floor">Floor</label>
  <select class="custom-select" name="floor">
    <option selected>Choose...</option>
    <option value="1">First Floor</option>
    <option value="2">Second Floor</option>
    <option value="3">Third Floor</option>
    <option value="4">Fourth Floor</option>
  </select>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
                
            </form>
               
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