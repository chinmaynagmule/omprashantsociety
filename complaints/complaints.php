<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Complaints</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    body {
    background-image: url("images/society2.jpg");
    background-size: 100%;
    background-repeat: no-repeat;
    height: 100vh;
    overflow: auto;
}
.societylogo{
        height: 180px;
        width: 200px;
    }
    .mainform{
    margin: 50px 230px 50px 450px;
    padding: 2rem;
    background-color: #0C2D48;
    color: white;
    display: flex;
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
                <a href="http://localhost/TYPROJECT/FINAL/homepage/index.php">Home</a>
              </li>
              <li>
                      <a href="#buildings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Buildings</a>
                      <ul class="collapse list-unstyled" id="buildings">
                          <li>
                              <a href="#directory" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Resident Directory</a>
                              <ul class="collapse list-unstyled" id="directory">
                                  <li>
                                      <a href="http://localhost/TYPROJECT/FINAL/buildings/A-wing/winga.php">A-Wing</a>
                                  </li>
                                  <li>
                                      <a href="http://localhost/TYPROJECT/FINAL/buildings/B-wing/wingb.php">B-Wing</a>
                                  </li>
                                  <li>
                                      <a href="http://localhost/TYPROJECT/FINAL/buildings/C-wing/wingc.php">C-Wing</a>
                                  </li>
                              </ul>                   
                          </li>
                      </ul>
              </li>       
                          <li>
                              <a href="#services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Find Services</a>
                              <ul class="collapse list-unstyled" id="services">
                                  <li>
                                      <a href="http://localhost/TYPROJECT/FINAL/find%20services/chef/chef.php">Chef</a>
                                  </li>
                                   <li>
                                       <a href="http://localhost/TYPROJECT/FINAL/find%20services/maid/maid.php">Maid</a>
                                  </li>
                                  <li>
                                      <a href="http://localhost/TYPROJECT/FINAL/find%20services/driver/driver.php">Driver</a>
                                  </li>
                                  <li>
                                      <a href="http://localhost/TYPROJECT/FINAL/find%20services/laundry/laundry.php">Laundry</a>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <a href="http://localhost/TYPROJECT/FINAL/maintenance/maint.php">Maintenance</a>
                          </li>
                          <li>
                              <a href="http://localhost/TYPROJECT/FINAL/complaints/complaints.php">Complaints</a>
                          </li>
                          <li>
                              <a href="http://localhost/TYPROJECT/FINAL/contact/contact.php">Contact</a>
                          </li>
                  </li>
                  </ul>
          </nav>

        <!-- Page Content  -->
        <div class= "mainform">
            <form action="connection.php" method="POST">
                <div class = "header">
                    <h1 style="text-decoration: underline"><b>Complaint Form</b></h1>
                          <hr>
                    </div>
                    <div class="form-group">
                        <label for="firstname"><b>First Name:</b></label>
                        <input type="text" class="form-control" id="firstname" placeholder="Enter First name" name="firstname" required>
                    </div>
            
                      <div class="form-group">
                        <label for="lastname"><b>Last Name:</b></label> 
                        <input type="text" class="form-control" id="lastname" placeholder="Enter Last name" name="lastname" required>
                      </div>
                      <div class="form-group">

                        <label for="number"> <b>Phone Number: </b> </label>
                        <input type="text" id="number" class="form-control" placeholder="Enter Phone Number" name = "number" maxlength="10" required>
                
                      </div>
                      <label for="wing"><b>Select Your Wing</b></label>
                      <select id="wing" name="wing" placeholder="Wing" required>
                        <option value="----">----</option>
                        <option value="A-Wing">A-Wing</option>
                        <option value="B-Wing">B-Wing</option>
                        <option value="C-Wing">C-Wing</option>
                      </select>
                    
                      <label for="complaint"><b>Complaint Details:</b></label>

                    <textarea id="complaint" name="complaint" placeholder="Enter your complaint details......." style="height:200px"></textarea>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        
            </form>
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