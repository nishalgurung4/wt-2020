<?php

//single numeric array
$names = ["Anil", "Bishal", "Rohit", "Dev"];
$age = array(30, 24, 21, 18);

echo $names[0];
echo "<br />";
echo $names[1];
echo "<br />";

echo $age[0];
echo "<br />";
echo $age[1];

// single associative array
$students = [
	"Anil" => 30, 
	"Bishal" => 24, 
	"Rohit" => 21, 
	"Dev" => 18
];

// $students = array(
// 	"Anil" => 30, 
// 	"Bishal" => 24, 
// 	"Rohit" => 21, 
// 	"Dev" => 18
// );

echo $students["Bishal"];
echo "loop====";
foreach($students as $name => $roll) {
	echo "The roll no of $name is $roll";
	echo "<br />";
}
