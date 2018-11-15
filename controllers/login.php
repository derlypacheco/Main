<?php
session_start();
include_once 'cnn.php';
$pass = sha1(md5($_POST['txtPass']));
$query = $mysqli->query("CALL sp_Login('".$_POST['txtUser']."', '".$pass."')");
	if($query){
		if ($query->num_rows == 1) {
			$rows = $query->fetch_array();
			// Creamos las sesiones que se requieren
			$_SESSION['user'] 		= $rows['user'];
			$_SESSION['name']		= $rows['name'];

			header('location:home.php');
		} 
	}
?>