<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/584b7cea70.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login/Register</title>
</head>
<style>
	.fas{
	position: absolute;
	right: 0;
	top: 0;
	font-size: 50px;
	width: 100px;
	text-align: center;
	padding-top: 10px;
	color: #0C2D48;
} 
body {
background-image: url("images//society.jpg");
background-size: 100%;
background-repeat: no-repeat;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
font-family: 'Montserrat', sans-serif;
height: 100vh;
margin: -20px 0 50px;
overflow: hidden;
}
</style>
<body>
	<a href="http://localhost/TYPROJECT/FINAL/Admin/login/adminlogin.php"><i class="fas fa-user-lock"></i></a>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="register.php" method="POST">
			<h1>Create Account</h1>
            <br>
			<input type="text" placeholder="Name" name="name" required/>
            <input type="text" placeholder="Username" name="username" required/>
			<input type="email" placeholder="Email" name="email" required/>
            <input type="text" placeholder="Number" name="number" maxlength="10" required>
			<input type="password" placeholder="Password" name="password" required/>
            <br>
			<button name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="POST">
			<h1>Sign in</h1>
            <br>
			<input type="text" placeholder="Username" name="username" required/>
			<input type="password" placeholder="Password" name="password" required/>
			<a href="#">Forgot your password?</a>
			<button name="signin">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1 class="welcome">Welcome Back!</h1>
				<p>Please login with your info for access</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1 class="hello">Hello, Member!</h1>
				<p>Enter your Details and Start Journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="index.js"></script>
</body>
</html>