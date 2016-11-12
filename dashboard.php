<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="dashboard_css.css">
</head>
<body>
<!-- 	<button id="fNameLink">FNAME</button>
	<p id="fNameContent">
		<form action="" method="post">
			First Name: 
			<input type="text" name="fName">
			<input type="submit" name="fNameSub">
			<?php 
			if(isset($_POST['fNameSub'])) {
    			echo "Thank you, you have changed your name.";
			}?>
		</form>
	</p>
 -->

 	<h1 id = "header"> 
 		Admin Dashboard
 	</h1>

 	<div id="real_dashboard"></div>

	<!-- JQUERY STUFFS (include at end of file bc reasons) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="dashboard.js"></script>
</body>
</html>