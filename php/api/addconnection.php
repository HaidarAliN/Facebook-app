<?php 

include "../connection.php";
$index=0;
$response = [];
$user_id = $_GET['id'];
$con_id = $_GET['con_id'];
$sql = "INSERT INTO `connections`(`user_id`, `connection_id`, `status`) VALUES (?,?,0)";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ii",$user_id,$con_id);
$stmt->execute();

$sql2 = "SELECT full_name FROM `users` WHERE id = ?";
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("i",$user_id);
$stmt2->execute();
$result2 = $stmt2->get_result();
$row = $result2	-> fetch_assoc();

$user_name = $row['full_name'];
$massege_body = $user_name." has sent you a friend request";

$sql3 = "INSERT INTO `notifications`(`notification`, `user_id`, `is_read`) VALUES (?,?,0)";
$stmt3 = $connection->prepare($sql3);
$stmt3->bind_param("si",$massege_body,$con_id);
$stmt3->execute();

header("Content-Type: JSON");
$response['status'] = 200;
echo json_encode($response, JSON_PRETTY_PRINT);


?>


