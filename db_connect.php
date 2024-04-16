<?php

if(!defined('MyConst')) {
   die('Direct access not permitted');
}
	$host= "brparadisesipandmunch.com";
	$username = "dhcqbzzs";
	$password = "38(L[d0cV3ScYl";
	$dbname = "dhcqbzzs_brparadise";
	 
	// Create connection
	$conn = mysqli_connect($host, $username, $password, $dbname);
	 
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	 
?>