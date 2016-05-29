<?php
session_start();
if(!isset($_SESSION['sess_user'])){
	header("Location:login.php");
}

$username = $_SESSION['sess_user'];

$con = mysqli_connect("localhost","root","","brainoholic");
$query = "SELECT * from users WHERE username = '".$username."'";
$result = mysqli_query($con,$query);
$array = mysqli_fetch_assoc($result);
$first_name = $array["first_name"];
?>

<html>
<head>

<title>Brainoholic - Training - Level 1</title>

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/menu.css">

<link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>

<div class="header">

<div class="menu">
    <!-- Menu icon -->
    <div class="icon-close">
		<img src="../images/close.png">
    </div>

    <!-- Menu -->
    <ul>
		<a href="../home.php"><li>Home</li></a>
        <a href="../training.php"><li class="active">Training</li></a>
        <a href="#"><li>Global</li></a>
        <a href="#"><li>Test</li></a>
    </ul>
</div>



<div class="icon-menu">
	<img src="../images/menu-icon.png">
    Menu
</div>

<div class="member">
	Hi <?php echo($first_name);?> | <a href="../logout.php">Log Out</a>
</div>

<div class="logo">
	<img src="../images/logo.png">
</div>

</div>

<div class="card">

	<div class="active-div">
		<h2>Wondering whether there is a relationship between exercise and mental alertness?</h2>
		<img src="../images/cartoons/jealous.png">
		<p>The answer is yes. The age-old myth that people are born intelligent should not let you down. Exercise boots brainpower. Brain is like a muscle which grows with hard work and consistency.</p>
		<a href="#" class="card-next">Next</a>
	</div>
	
	<div>
		<h2>Do what you love to do.</h2>
		<img src="../images/cartoons/boring.png">
		<p>We don't pay attention to boring things. We can talk and breathe, but when it comes to higher-level tasks, we just can't do it. Always remember, interest trumps everything else, because as long as you are interested, you are going to do it for yourself, not for someone else to see.</p>
		<a href="#" class="card-next">Next</a>
	</div>
	
	<div>
		<h2>This is the third Div</h2>
		<p>I have got nothing to do with it right now, but I just kept it for testing jQuery.</p>
		<a href="#" class="card-next">Next</a>
	</div>

</div>

<div class="footer">
	
	<img src="../images/logo-white.png">
		
	<div class="credit">
		Created by Abhay Nayar
	</div>
		
	<div class="social-icons">
			
		<a href="#"><img src="../images/fb-icon.png"></a>
		<a href="#"><img src="../images/twitter-icon.png"></a>
		<a href="#"><img src="../images/me-icon.png"></a>
			
	</div>
	
</div>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/script.js"></script>

</body>
</html>