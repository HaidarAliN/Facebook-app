<?php 

include "../connection.php";
$index=0;
$response = [];
 
$user_id = $_GET["id"];
$sql2="SELECT * FROM `notifications` WHERE user_id = ? order by idn desc limit 5"; 
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("i",$user_id);
$stmt2->execute();
$result2 = $stmt2->get_result();
$row = $result2	-> fetch_assoc();
if(empty($row)){
    $response['status'] = 400;
    header("Content-Type: JSON");
     echo json_encode($response, JSON_PRETTY_PRINT);
}else{
        
    do{
        $response[$index]['notification'] = $row['notification'];
        $index++;
        }while($row = $result2	-> fetch_assoc());
    header("Content-Type: JSON");
    echo json_encode($response, JSON_PRETTY_PRINT);
}


?>