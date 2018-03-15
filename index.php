<?php 

$greetings = "Welcome to our site";
$names = array('Jeff','John','Mary' );

function dd($data)
{
	echo '<pre>';
	die(var_dump($data));
	echo '<pre>';
}

$task = [
	'title' =>	'Finishing Homework',
	'due'	=>	'today',
	'assigned_to' => 'Cesar',
	'completed' => false,
];

require "index.view.php";

 ?>