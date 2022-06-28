<?php 
require_once "../utils/db.php";

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

// if ($result->num_rows > 0) {
// 	while ($row = $result->fetch_assoc()) {
// 		echo $row['id'].' '.$row['name'];
// 		echo "<br />";
// 	}
// }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students</title>

</head>
<body>
<h2>List of students</h2>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Profile</th>
			<th>Name</th>
			<th>Email</th>
			<th>Date of Birth</th>
			<th>Favorite Color</th>
			<th>Weight (KG)</th>
			<th>Gender</th>
			<th>Hobbies</th>
			<th>Nationality</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	if ($result->num_rows > 0) {
		while($student = $result->fetch_assoc())
		{
	?>
			<tr>
				<td><?= $student['id'] ?></td>
				<td><img src="" alt="profile"></td>
				<td><?= $student['name'] ?></td>
				<td><?= $student['email'] ?></td>
				<td><?= $student['dob'] ?></td>
				<td><?= $student['favorite_color'] ?></td>
				<td><?= $student['weight'] ?></td>
				<td><?= $student['gender'] ?></td>
				<td><?= $student['hobbies'] ?></td>
				<td><?= $student['nationality'] ?></td>
				<td>
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</td>
			</tr>
		<?php }
	} else { ?>
		<tr>
			<td colspan="11"> No record found!</td>
		</tr>

	<?php } ?>
	</tbody>
</table>
</body>
</html>