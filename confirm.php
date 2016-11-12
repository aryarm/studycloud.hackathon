<html>
<body>
	<!-- This page displays to confirm that the form is filled in properly. -->
	<h2>You have inputted the following:</h2>
	First Name: 
	<?php echo $_POST["fName"]; ?>
	<br>
	Last Name: 
	<?php echo $_POST["lName"]; ?>
	<br>
	Email: 
	<?php echo $_POST["email"]; ?>
	<br>
 	Grade: 
	<?php echo $_POST["grade"]; ?>
	<br>
	Password: 
	DON'T SHOW THE PASSWORD
	<?php echo $_POST["password"]; ?>
	<br>
	School Name: 
	<?php echo $_POST["schoolName"]; ?>
	<br>
	School Code:  
	<?php echo $_POST["schoolTicket"]; ?>
</body>
</html>