<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Maintenance</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/584b7cea70.js" crossorigin="anonymous"></script>
    
</head>
<style>
    .wrapper{
        font-family: 'Roboto Slab', serif;
    }
    .societylogo{
        height: 180px;
        width: 200px;
    }
    input[type=password] {
    width: 90%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 45px 50px 0px 55px;
    font-size: 16px;
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
        <div class="row">
            <div class="col-75">
              <div class="container">
                <form action="connection.php" method="POST">
          
                  <div class="row">
                    <div class="col-50">
                      <h3>Maintenance Payment</h3>
                      <br>
                      <label for="fname"><i class="fas fa-user"></i> Name of Owner</label>
                      <input type="text" id="name" name="name" placeholder="Full Name" required>
                      <label for="email"><i class="fas fa-hotel"></i>Room No</label>
                      <input type="text" id="roomno" name="roomno" placeholder="Room No." maxlength="4" required>
                      <label for="adr"><i class="fas fa-money-bill"></i> Amount</label>
                      <input type="text" id="amount" name="amount" placeholder="Amount" maxlength="5" required>
                      <label for="contact"><i class="fas fa-address-book"></i> Contact Number</label>
                      <input type="text" id="contact" name="contact" placeholder="Contact No" maxlength="10" required>
                    </div>
          
                    <div class="col-50">
                      <h3>Payment</h3>
                      <label for="cname">Name on Card</label>
                      <input type="text" id="cname" name="cardname" placeholder="Name" required>
                      <label for="ccnum">Card number</label>
                      <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" maxlength="16" required>
                      <label for="expmonth">Exp Month</label>
                      <input type="text" id="expmonth" name="expmonth" placeholder="Eg-January" required>
          
                      <div class="row">
                        <div class="col-50">
                          <label for="expyear">Exp Year</label>
                          <input type="text" id="expyear" name="expyear" placeholder="2002" maxlength="4" required>
                        </div>
                        <div class="col-50">
                          <label for="cvv">CVV</label>
                          <input type="password" id="cvv" name="cvv" placeholder="123" maxlength="3" required>
                        </div>
                      </div>
                    </div>
          
                  </div>
          
                  <input type="submit" value="Continue Payment" name="submit" class="btn">
                </form>
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