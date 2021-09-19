<?php 

include "../connection.php";
$response = [];
$user_id = $_GET["id"];
$sql = "SELECT * FROM `users` WHERE id=?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i",$user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result	-> fetch_assoc();

$sql2 = "SELECT count(c.user_id) as co FROM `connections` as c , users as u WHERE  (( u.id = c.connection_id and c.user_id = ? and c.status = 1) or (u.id = c.user_id and c.connection_id = ? and status = 1));";
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("ii",$user_id,$user_id);
$stmt2->execute();
$result2 = $stmt2->get_result();
$row2= $result2	-> fetch_assoc();

$response['id'] = $row['id'];
$response['name'] = $row['full_name'];
$response['image'] = $row['image_path'];
$response['bio'] = $row['bio'];
$response['gender'] = $row['gender'];
$response['connections'] = $row2['co'];
header("Content-Type: JSON");
echo json_encode($response, JSON_PRETTY_PRINT);
?>


