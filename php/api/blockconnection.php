<?php 

include "../connection.php";
$index=0;
$response = [];
$user_id = $_GET['id'];
$block_id = $_GET['block_id'];

$sql2 = "SELECT * FROM `connections` WHERE (user_id = ? and connection_id = ?) or (user_id = ? and connection_id = ?)";
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("iiii",$user_id,$block_id,$block_id,$user_id);
$stmt2->execute();
$result2 = $stmt2->get_result();
$row = $result2	-> fetch_assoc();

if(empty($row)){
    $sql = "INSERT INTO `connections`(`user_id`, `connection_id`, `status`) VALUES (?,?,2)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ii",$user_id,$block_id);
    $stmt->execute();
}else{
    $i =  $row['idq'];
    $sql3 = "UPDATE `connections` SET `status` = 2 WHERE idq = $i";
    $stmt3 = $connection->prepare($sql3);
    $stmt3->execute();
}

header("Content-Type: JSON");
$response['status'] = 200;
echo json_encode($response, JSON_PRETTY_PRINT);


?>


