<?php
session_start();
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
    <!-- CSS -->
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
    body {
  background-image: url("images/society2.jpg");
  background-size: 100%;
  background-repeat: no-repeat;
  overflow: hidden;
}
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

    .notices{
        background: #0C2D48;
        color: #fff;
        font-size: 1.15rem;
        margin: 0% 20% 20%;
        width: 50vw;
        height: 45%;
        text-align: center;
        overflow: auto;
    }

    .navbar-brand{
        font-size: 1.9rem;
    }

    .noticeheading{
        padding: 10px;
        background: #0C2D48;
        color: #fff;
        font-size: 1rem;
        margin: 5% 20% 1% 37%;
        text-align: center;
        width: 20vw;
    }

    .societylogo{
        height: 180px;
        width: 200px;
    }

    table,tr,td{
        text-align: center;
    }

    h3{
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
        <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Welcome:    <?php 
            if(isset($_SESSION['username']))
            {
                echo $_SESSION['username'];
            }
            else{
                ?>
                <section></section>
                <?php
            }?></a>
      <a href="logout.php"><button type="button" class="btn btn-outline-primary">Logout</button></a>
  </div>
</nav>

<div class="noticeheading">
        <h3>Notice Board</h3>
    </div>

<div class="notices">
<table class="table">
<?php
            $con = mysqli_connect("localhost", "root", "", "ompdb");
          $display= "SELECT `ID`, `notice` FROM `notices`";
          $query= mysqli_query($con,$display);
         if(mysqli_num_rows($query) > 0)
         {
          while($result= mysqli_fetch_array($query)){
              ?>
  <tbody>
      <tr>
          <td><?php echo $result['ID']; ?></td>
          <td><?php echo $result['notice']; ?></td>
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