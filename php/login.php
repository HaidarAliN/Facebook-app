<?php
include "connection.php";

if (isset($_POST["emaill"]) and $_POST["emaill"] !="")
	{
		$email = $_POST["emaill"];
	}else
	{
		die("Try again next time");
	}

if (isset($_POST["passwordd"]) and $_POST["passwordd"] !="")
	{
		$password = $_POST["passwordd"];
	}else{
		die("Try again next time");
	}
$hash = hash('sha256', $password);
$sql1="Select * from users where email=? and password=?"; 
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("ss",$email,$hash);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

if(empty($row)){
	session_start();
	$_SESSION["flash"] = "Please check your email and password";
	header('location: ../sign-in.html');
}
else{
	session_start();
	$_SESSION["id"] = $row["id"];
	header('location: ../index.php');
}
?>