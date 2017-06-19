<?php
session_start();
print_r($_POST);
if (isset($_POST['login'])){
	if ($_POST['login'] == admin){
		if ($_POST['password'] == admin) {
			$_SESSION['islogedin'] = 1;
			$_SESSION['user'] = admin;
			$_SESSION['user_avatar'] = "./userfiles/admin/avatar.png";
			$_SESSION['friends_count'] = 95;
			$_SESSION['music_count'] = 312;
			$_SESSION['groups_count'] = 31;
			header("Location: http://127.0.0.1/edsa-socnet/");
		}
	}
}

if (isset($_GET['logout'])){
	session_unset();
	header("Location: http://127.0.0.1/edsa-socnet/");
}