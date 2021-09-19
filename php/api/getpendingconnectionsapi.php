<?php 

include "../connection.php";
$index=0;
$response = [];
$connection_id = $_GET["id"];
$sql = "SELECT * FROM `connections` as c , users as u WHERE  ( (u.id = c.user_id and c.connection_id = ? and status = 0))  order by c.idq desc limit 5;";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i",$connection_id);
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
    header("Content-Type: JSON");
    echo json_encode($response, JSON_PRETTY_PRINT);
}
?>


