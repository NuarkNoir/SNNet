<?php
session_start();
if (!isset($_SESSION['islogedin'])){
	$is_logedin = 0;
	$_SESSION['islogedin'] = $is_logedin;
	include ("./login.html");
} elseif ($_SESSION['islogedin'] == 1) {
	include ("./interface.html");
} else {
	$is_logedin = 0;
	$_SESSION['islogedin'] = $is_logedin;
	include ("./login.html");	
}