<html>
<body>
	<!-- The form! I probably shouldn't call this index.php. -->
	<form action="confirm.php" method="get">
		<h2>Make A New Study Cloud</h2>
			First Name: 
			<input type="text" name="fName" required>
			<br>
			Last Name: 
			<input type="text" name="lName" required>
			<br>
			Email: 
			<input type="email" name="email" required>
			<br>
			<!-- PUT OPTIONS AND SELECT TAGS TO MAKE IT A DROPDOWN -->
			Grade: 
			<select name="grade">
			  <option value="">Select...</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			</select>
			<br>
			Password: 
			<input type="password" name="password" required>
			<br>
			School Name: 
			<input type="text" name="schoolName" required>
			<br>
			School Code:  
			<input type="text" name="schoolTicket" required>
			<br>
			<input type="submit">
	</form>
</body>
</html>