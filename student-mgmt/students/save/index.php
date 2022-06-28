<?php 

require_once "../../utils/db.php";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$dob = $_POST['dob'] ?? '';
$favorite_color = $_POST['color'] ?? '';
$weight = $_POST['weight'] ?? '';
$gender = $_POST['gender'] ?? '';
$hobbies = implode(",", $_POST['hobbies'] ?? []);
$nationality = $_POST['nationality'] ?? 'NP';

$sql = "INSERT INTO students (name, email, password, dob, favorite_color, weight, gender, hobbies, nationality)
VALUES ('$name', '$email', '$password', '$dob', '$favorite_color', $weight, '$gender', '$hobbies', '$nationality')";

if($conn->query($sql) == TRUE) {
	header("location:../?success=inserted successfully");
} else {
	header("location:../?error=error occured");
}