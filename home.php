<?php
session_start();

if(isset($_SESSION['sess_user'])){
	$username = $_SESSION['sess_user'];
	$con = mysqli_connect("localhost","root","","brainoholic");
	$query = "SELECT * from users WHERE username = '".$username."'";
	$result = mysqli_query($con,$query);
	$array = mysqli_fetch_assoc($result);
	$first_name = $array["first_name"];
}
?>

<html>
<head>
<title>Brainoholic - Home</title>

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
		<a href="home.php"><li class="active">Home</li></a>
        <a href="training.php"><li>Training</li></a>
        <a href="#"><li>Global</li></a>
        <a href="#"><li>Test</li></a>
    </ul>
</div>

<div class="icon-menu">
	<img src="images/menu-icon.png">
    Menu
</div>

<div class="member">
<?php
if(!isset($_SESSION['sess_user']))echo("<a href=\"login.php\">Login</a> | <a href=\"register.php\">Register</a>");
else echo("Hi ".$first_name." | <a href=\"logout.php\">Log Out</a>");
?>
	
</div>

<div class="logo">
	<img src="images/logo.png">
</div>

</div>

<img src="images/iqtr.png" class="iqtr">

<div class="content">
	<div class="box box2">
		<img src="images/coffee.png">
		<p class="p-title">All you have to do is...</p>
		
		<ul>
			<li>Create an account.</li><br>
			<li>Buy a pad and a pencil.</li><br>
			<li>Practice for 10 minutes everyday.</li><br>
		</ul>
	</div>
	
	<div class="box box3">
		<img src="images/mac.png">
		<p class="p-title">Why choose us?</p>
		
		<ul>
			<li>We don't just pose questions, we spark curiosity.</li><br>
			<li>We help you know your place amongst others.</li><br>
			<li>We charge nothing for any feature.</li><br>
			<li>We have our very own test.</li><br>
		</ul>
	</div>
	<div class="box box1">
		
		<img src="images/brain.png">
		<p class="p-title">Are you curious enough?</p>
		<a href="register.php">Start now</a>
	
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