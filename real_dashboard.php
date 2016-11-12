<?php
	$global_index_security = true;
	include 'db_connect.php';
	
	$query_getRequests = "SELECT schoolid, name, ticket, fname, lname, email, grade FROM new_schools";
	$result_getRequests = mysqli_query($db, $query_getRequests);
	if (mysqli_num_rows($result_getRequests)>0){
?>
		<link rel="stylesheet" type="text/css" href="dashboard_css.css">
		<table>
			<tbody>
				<tr>
					<th>Edit</th>
					<th>School Name</th>
					<th>Ticket</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Grade</th>
					<th>Approve/Deny</th>
				</tr>
<?php
		while($row_getResults = mysqli_fetch_assoc($result_getRequests)){
?>
				<tr data-schoolid="<?php echo $row_getResults['schoolid'] ?>">
					<td>
						<button>Edit</button>
					</td>
					<td><?php echo $row_getResults['name'] ?></td>
					<td><?php echo $row_getResults['ticket'] ?></td>
					<td><?php echo $row_getResults['fname'] ?></td>
					<td><?php echo $row_getResults['lname'] ?></td>
					<td><?php echo $row_getResults['email'] ?></td>
					<td><?php echo $row_getResults['grade'] ?></td>
					<td>
						<button class="accept">accept</button>
						<button class="deny">deny</button>
					</td>
				</tr>
<?php
		}
?>
			</tbody>
	</table>
<?php
	} else {
?>
		<p>There aren't any requests!</p>
<?php
	}
?>		