<?php
include "connection.php";


if(isset($_POST["full_name"]) && $_POST["full_name"] != "" && strlen($_POST["full_name"]) >= 3) {
    $full_name = $_POST["full_name"];
}else{
    die ("Enter a valid input1");
}


if(isset($_POST["email"]) && $_POST["email"] != "" ) {
    $email = $_POST["email"];
}else{
    die ("Enter a valid input2");
}


if(isset($_POST["password"]) && $_POST["password"] != "" ) {
    $password = $_POST["password"];
}else{
    die ("Enter a valid input3");
}

if(isset($_POST["confirmPassword"]) && $_POST["confirmPassword"] != "" ) {
    $confirmPassword = $_POST["confirmPassword"];
}else{
    die ("Enter a valid input4");
}

if(isset($_POST["gender"]) && $_POST["gender"] != "" ) {
    $gender = $_POST["gender"];
    if($gender == 1){
        $path = 'images/resources/pf-icon1.png';
    }
    else{
        $path = 'images/resources/pf-icon2.png';
    }
}else{
    die ("Enter a valid input5");
}


$sql1="Select * from users where email=?"; 
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("s",$email);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

session_start();

if(empty($row)){
$sql2 = "INSERT INTO `users` (`full_name`, `email`, `password`, `gender`, `image_path`) VALUES (?, ?, ?, ?, ?);"; 
$hash = hash('sha256', $password);
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("sssss",$full_name,$email,$hash,$gender, $path);
$stmt2->execute();
$result2 = $stmt2->get_result();
header('location: ../sign-in.html');
}
else{
    $_SESSION["flash"] = "This email is taken";
    header('location: ../sign-in.html');
}
?>