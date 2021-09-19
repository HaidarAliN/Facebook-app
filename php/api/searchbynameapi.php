<?php 

include "../connection.php";
$index=0;
$response = [];
$user_id = $_GET['id'];
$connection_name = "%".$_GET["name"]."%";
$sql = "SELECT * FROM `users` WHERE full_name like ? and id not in (SELECT id FROM `connections` as c , users as u WHERE  (( u.id = c.connection_id and c.user_id = ? and c.status = 1) or (u.id = c.user_id and c.connection_id = ? and status = 1))) and id not in (SELECT id FROM `connections` as c , users as u WHERE  (( u.id = c.connection_id and c.user_id = ? and c.status = 0) or (u.id = c.user_id and c.connection_id = ? and status = 0))) and id not in (SELECT id FROM `connections` as c , users as u WHERE  (( u.id = c.connection_id and c.user_id = ? and c.status = 2) or (u.id = c.user_id and c.connection_id = ? and status = 2))) and id <> ?;";
$stmt = $connection->prepare($sql);
$stmt->bind_param("siiiiiii",$connection_name,$user_id,$user_id,$user_id,$user_id,$user_id,$user_id,$user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result	-> fetch_assoc();
if(empty($row)){
    $response['status'] = 400;
    header("Content-Type: JSON");
    echo json_encode($response, JSON_PRETTY_PRINT);
}else{

    do{
        $response[$index]['id'] = $row['id'];
        $response[$index]['name'] = $row['full_name'];
        $response[$index]['image'] = $row['image_path'];
        $response[$index]['bio'] = $row['bio'];
        $response[$index]['gender'] = $row['gender'];
        $index++;
        }while($row = $result	-> fetch_assoc());
    echo json_encode($response);
}
?>


