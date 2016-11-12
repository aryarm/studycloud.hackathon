<html>
<head>
	<title>Make A New Study Cloud</title>
	<!-- Font chosen: Nunito by Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<!-- The form! I probably shouldn't call this index.php. -->
	<form action="confirm.php" method="post">
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
			<!-- At a later time, make sure that they didn't select select as the option because that would be bad -->
			Grade: 
			<select name="grade" required>
			  <option value="">Select...</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
			  <option value="11">11</option>
			  <option value="12">12</option>
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