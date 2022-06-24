<?php 

//let's explore super global variable of php

function dump($data)
{
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
	echo "<br />";
}

// dump($_SERVER);

// dump($_REQUEST);

// dump($_GET);
// dump($_POST);

// dump($_FILES);



$arr = [
	'test' => 'testing',
	'test2' => 'cha'
];


if (isset($arr['test1'])) {
	echo $arr['test1'];
}

$display =  $arr['test2'] ?? 'chaina';
echo $display;


// dump($_SESSION);

// dump($_COOKIE);

