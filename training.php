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
$iq = $array["score"]
?>

<html>
<head>

<title>Brainoholic - Training</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/menu.css">

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>

<div class="header">

<div class="menu">
    <!-- Menu icon -->
    <div class="icon-close">
		<img src="images/close.png">
    </div>

    <!-- Menu -->
    <ul>
		<a href="home.php"><li>Home</li></a>
        <a href="training.php"><li class="active">Training</li></a>
        <a href="#"><li>Global</li></a>
        <a href="#"><li>Test</li></a>
    </ul>
</div>



<div class="icon-menu">
	<img src="images/menu-icon.png">
    Menu
</div>

<div class="member">
	Hi <?php echo($first_name);?> | <a href="logout.php">Log Out</a>
</div>

<div class="logo">
	<img src="images/logo.png">
</div>

</div>

<div class="performance-container">
	<div class="performance">

		<p>Performance</p>
		
		<div class="iq">
			Your Score
			<p><?php echo($iq) ?></p>
			<a href="#">Improve</a>
		</div>
		
		<div class="position">
		
			<ul class="dropdown">
				<li><a href="#">Your global position<img src="images/arrow.png"></a>
					<ul>
						<a href="#"><li>Your local position</li></a>
					</ul>
				</li>
			</ul>
			
			<img src="images/percentile.png">
		
		</div>
		
		<div class="stats">
		
			Stats
			
			<table>
				<tr>
					<td>Levels completed</td>
					<td>23</td>
				</tr>
				
				<tr>
					<td>Tests taken</td>
					<td>2</td>
				</tr>
				
				<tr>
					<td>Days in a row</td>
					<td>3</td>
				</tr>
			</table>
		</div>
		
		<a href="#">How to use Brainoholic?</a>

	</div>
</div>

	<a href="level/1.php">
		<div class="level">
			<p>Level 1</p>
			<img src="images/level/1.png">
			<p>Introduction</p>
		</div>
	</a>

	<a href="#">
		<div class="level">
			<p>Level 2</p>
			<img src="images/level/2.png">
			<p>All about logic</p>
		</div>
	</a>

	<a href="#">
		<div class="level">
			<p>Level 3</p>
			<img src="images/level/3.png">
			<p>How your memory works</p>
		</div>
	</a>

	<a href="#">
		<div class="level">
			<p>Level 4</p>
			<img src="images/level/4.png">
			<p>Basic practice</p>
		</div>
	</a>

	<a href="#">
		<div class="level">
			<p>Level 5</p>
			<img src="images/level/5.png">
			<p>Albert Einstein</p>
		</div>
	</a>

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
<script src="js/script.js"></script>

</body>
</html>