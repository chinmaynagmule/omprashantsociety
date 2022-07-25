<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Rentals</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/584b7cea70.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
  </head>
  <style>
      body{
        background-image: url("images/society2.jpg");
      }
      .wrapper{
        font-family: 'Roboto Slab', serif;
    }
      .rentheading{
        padding: 10px;
        background: #0C2D48;
        color: #fff;
        font-size: 1rem;
        margin: 0% 0% 1% 33%;
        text-align: center;
        width: 30vw;
        text-decoration: underline;
      }

      .rentimage{
        height: 250px;
        width: 250px;
      }

      .container{
          width: 100vw;
          height: 100vh;
          margin-left: 70px;
          text-align: center;
          background-color: white;
      }

      .col{
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 25px;
        padding-left: 15px;
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
        <div class="content">
            <div class="rentheading">
            <h3>Available Flats For Rents</h3>
            </div>
        <div class="container">
            <div class="row">
            <?php
                $con = mysqli_connect("localhost", "root", "", "ompdb");
                $display= "select * from rentals order by ID asc";
                $query= mysqli_query($con,$display);
               if(mysqli_num_rows($query) > 0)
               {
                while($result= mysqli_fetch_array($query)){
            ?>
                <div class="col-lg-3">
                    <form method="POST" action="rentals.php?action=add&id=<?php echo $result["ID"]; ?>"></form>
                    <div class="rental-grid">
                        <div class="flatimage">
                            <img class="rentimage" img src="images/Om Prashant Logo.png" alt="">
                        </div>
                        <div class="flatdescription">
                            <h3><?php echo $result['flatno'];?></h3>
                            <div class="price">
                                <h3><?php echo $result['price'];?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
            ?>
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