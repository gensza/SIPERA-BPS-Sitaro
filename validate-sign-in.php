<?php
session_start();
include "config_sqli.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sqli = mysqli_query ($konek, "SELECT * FROM `i_us3r` WHERE username='$username' AND password='$password'");

// Validasi Login
if ($_POST){

	$queryuser = mysqli_query ($konek, "SELECT * FROM `i_us3r` WHERE username='$username'");

	$sqli = mysqli_fetch_array ($queryuser);

	if($sqli){
			if (password_verify($password, $sqli["password"])){

				$_SESSION["username"] = $sqli["username"];
				$_SESSION["password"] = $sqli["password"];
				$_SESSION["flag"]	= $sqli["flag"];
				$_SESSION["nama_lgkp"]	= $sqli["nama_lgkp"];
				$_SESSION["nip"]	= $sqli["nip"];
				$_SESSION["photo"]	= $sqli["photo"];
        $_SESSION["jabatan"]	= $sqli["jabatan"];
				$_SESSION["Login"] = true;

				if ($_SESSION["flag"] == 1){
					header ("Location: pages/forms/dashboard.php");
					exit();
				}
				else if($_SESSION["flag"] == 2){
					header ("Location: pages/user/dashboard.php");
					exit();
				}else{
					header("Location :index.php");
					exit();
				}
			}
			else
			{
				header ("Location: index.php?Err=4");
				exit();
			}
	}
	else if (empty ($Username) && empty ($Password)){
		header ("Location: index.php?Err=1");
		exit();
	}
	else if(empty ($Username)){
		header ("Location: index.php?Err=2");
		exit();
	}
	else if(empty ($Password)){
		header ("Location: index.php?Err=3");
		exit();
	}
	else{
		header ("Location: index.php?Err=5");
		exit();
	}
}

?>