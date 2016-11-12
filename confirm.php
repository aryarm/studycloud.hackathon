<html>
<body>
	<!-- This page displays to confirm that the form is filled in properly. -->
	<h2>You have inputted the following:</h2>
	First Name: 
	<?php echo $_GET["fName"]; ?>
	<br>
	Last Name: 
	<?php echo $_GET["lName"]; ?>
	<br>
	Email: 
	<?php echo $_GET["email"]; ?>
	<br>
 	Grade: 
	<?php echo $_GET["grade"]; ?>
	<br>
	Password: 
	DON'T SHOW THE PASSWORD
	<?php echo $_GET["password"]; ?>
	<br>
	School Name: 
	<?php echo $_GET["schoolName"]; ?>
	<br>
	School Code:  
	<?php echo $_GET["schoolTicket"]; ?>
</body>
</html>