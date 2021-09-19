<?php 

include "../connection.php";
$index=0;
$response = [];
$user_id = $_POST['id'];
$name = $_POST['name'];
$bio = $_POST['bio'];
$sql = "UPDATE `users` SET `full_name`=?,`bio`=? WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssi",$name,$bio,$user_id);
$stmt->execute();

header("Content-Type: JSON");
$response['status'] = 200;
echo json_encode($response, JSON_PRETTY_PRINT);


?>


