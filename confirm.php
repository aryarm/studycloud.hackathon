<?php
	$global_index_security = true;
	include 'db_connect.php';

	function clean_input( $data ){
		global $db;
	    if (is_array($data)){
	        for ($i=0;$i<count($data);$i++){
	            $data[$i] = mysqli_real_escape_string($db, htmlspecialchars( strip_tags( trim($data[$i]) ) ) );
	        }
	        return $data;
	    } else {
	        return mysqli_real_escape_string($db, htmlspecialchars( strip_tags( trim($data) ) ) );
	    }
	}

	$fname = ucwords(clean_input($_POST['fName']));
	$lname = ucwords(clean_input($_POST['lName']));
	$email = clean_input($_POST['email']);
	$grade = clean_input($_POST['grade']);
	$password = sha1(clean_input($_POST['password']));
	$schoolName = clean_input($_POST['schoolName']);
	$schoolTicket = clean_input($_POST['schoolTicket']);


	$itWorked = false;
	if ($schoolTicket){
		$query_checkTicket = "SELECT * FROM new_schools WHERE ticket = '$schoolTicket' LIMIT 1";
		$result_checkTicket = mysqli_query($db, $query_checkTicket);
		$new_ticket = false;
		while ($row_checkTicket = mysqli_fetch_assoc($result_checkTicket)){
			echo 'hi giselle';
			$new_ticket = true;
		}
		if (!$new_ticket){
			//then, we know that the ticket doesn't already exist in the database
			//validate the data
			$query_addSchool = "INSERT INTO new_schools (name, ticket, fname, lname, email, grade, password) VALUES ('$schoolName', '$schoolTicket', '$fname', '$lname', '$email', '$grade', '$password')";
			if (mysqli_query($db, $query_addSchool)){
				$itWorked = true;
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
</head>
<body>
	<!-- This page displays to confirm that the form is filled in properly. -->
	<?php if ($itWorked){ echo "Your input was a success!"; } else { echo "It didn't work! Please <a href='index.php'>try again</a>."; } ?>
</body>
</html>