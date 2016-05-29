<?php
session_start();
if(isset($_SESSION['sess_user'])){
	header("Location:training.php");
}
?>

<html>
<head>


<title>Brainoholic - Login</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/menu.css">

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />


</head>
<body>

<div class="header">

<div class="menu">
    <!-- Menu icon -->
    <div class="icon-close">
		<img src="images/close.png">
    </div>

    <!-- Menu -->
    <ul>
		<a href="home.php"><li>Home</li></a>
        <a href="training.php"><li>Training</li></a>
        <a href="#"><li>Global</li></a>
        <a href="#"><li>Test</li></a>
    </ul>
</div>



<div class="icon-menu">
	<img src="images/menu-icon.png">
    Menu
</div>

<div class="logo">
	<img src="images/logo.png">
</div>

</div>

<div class="content">

	<div class="member-box">
		
		<form action="" method="post">
			<h1>Login</h1>
			<input type="text" name="username" placeholder="Username or email" /><br>
			<input type="password" name="password" placeholder="password" /><br>
			<input type="submit" name="submit" value="Login" /><br>
		</form>
		
		<?php
		if(isset($_POST['submit'])){
			$con = mysqli_connect("localhost","root","","brainoholic");
			
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			$query = mysqli_query($con,"SELECT * FROM `users` WHERE `username` =  '".$username."' AND `password` = '".$password."' OR `email` = '".$username."' AND `password` = '".$password."'");
			$numrows = mysqli_num_rows($query);
			
			if($numrows!=0){
				$_SESSION['sess_user']=$username;
				header("Location:training.php");
			}else{
				echo("Invalid username/email or password.<br>");
			}
		}
		?>
		
		<a href="register.php">Don't have an ID?</a>
	</div>
	
</div>

<div class="footer">
	
	<img src="images/logo-white.png">
		
	<div class="credit">
		Created by Abhay Nayar
	</div>
		
	<div class="social-icons">
			
		<a href="#"><img src="images/fb-icon.png"></a>
		<a href="#"><img src="images/twitter-icon.png"></a>
		<a href="#"><img src="images/me-icon.png"></a>
			
	</div>
	
</div>

<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>

</body>
</html>