<?php
session_start();
if(isset($_SESSION['sess_user'])){
	header("Location:training.php");
}
?>

<html>
<head>


<title>Brainoholic - Register</title>

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
			<h1>Register</h1>
			<input type="text" name="first_name" placeholder="First Name" /><br>
			<input type="text" name="last_name" placeholder="Last Name" /><br>
			<input type="text" name="email" placeholder="Email" /><br>
			<input type="text" name="username" placeholder="Username" /><br>
			<input type="password" name="password" placeholder="Password" /><br>
			<input type="password" name="confirm_password" placeholder="Confirm Password" /><br>
			<input type="submit" name="submit" value="Get Started" /><br>
		</form>
		<?php
		if(isset($_POST['submit'])){
			$first_name = $_POST["first_name"];
			$last_name = $_POST["last_name"];
			$email = $_POST["email"];
			$username = $_POST["username"];
			$password = $_POST["password"];
			$confirm_password = $_POST["confirm_password"];
			
			$con = mysqli_connect("localhost","root","","brainoholic") or die("It did not connect.");
			
			$sql_result_username = mysqli_query($con,"SELECT * FROM `users` WHERE `username` =  '".$username."' LIMIT 0,1");
			$sql_result_email = mysqli_query($con,"SELECT * FROM `users` WHERE `email` =  '".$email."' LIMIT 0,1");
			
			
			if(strlen($first_name)<50){
				if(strlen($last_name)<50){
					if(strlen($username)<50){
						if(!is_resource($sql_result_username) && !mysqli_num_rows($sql_result_username) > 0 ){
							if(strlen($email)<50){
								if(!is_resource($sql_result_email) && !mysqli_num_rows($sql_result_email) > 0 ){
									if(filter_var($email, FILTER_VALIDATE_EMAIL)){
										if(strlen($password)>5&&strlen($password)<50){
											if($password==$confirm_password){
			mysqli_query($con,"INSERT INTO users VALUES(NULL,'".$first_name."','".$last_name."','".$email."','".$username."','".$password."',0)");
			//header("Location:login.php");
											}else echo("Passwords do not match.<br>");
										}else echo("Password should be more than 5 and less than 50 characters long.<br>");
									}else echo("Invalid email address.<br>");
								}else echo("Email already exists.<br>");
							}else echo("Email should be less than 50 characters long.<br>");
						}else echo("Username already exists.<br>");
					}else echo("Username should be less than 50 characters long.<br>");
				}else echo("Last name should be less than 50 characters long.<br>");
			}else echo("First name should be less than 50 characters long.<br>");
		}
		?>
		<a href="login.php">Already have an ID?</a>
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