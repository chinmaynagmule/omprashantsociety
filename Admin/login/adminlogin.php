<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
</head>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Roboto Slab', serif;
}
  .arrowicon{
    position: absolute;
		left: 0;
		top: 0;
		font-size: 50px;
		width: 100px;
		text-align: center;
		padding-top: 10px;
		color: #fff;
  }
  body{
    background-image: url("images/society1.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
  }
</style>
<body>
  <a href="http://localhost/TYPROJECT/FINAL/User/login%20and%20register/index.php"><i class="arrowicon fas fa-arrow-left"></i></a>
  <div class="wrapper">
    <header>Admin Login</header>
    <form action="login.php" method="POST">
      <div class="field username">
        <div class="input-area">
          <input type="text" name="admin_name" placeholder="Username" required>
          <i class="icon fas fa-user"></i>
        </div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" name="password" placeholder="Password" required>
          <i class="icon fas fa-lock"></i>
        </div>
      </div>
      <input type="submit" name="submit" value="Login">
    </form>
  </div>

  <script src="script.js"></script>

</body>
</html>