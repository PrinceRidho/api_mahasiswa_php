<?php
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * from tb_admin WHERE username='".$username."' AND password='".$password."'";
$result = $connect->query($sql);
if($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
    $dataId=$row["id"];
    $dataUsername=$row["username"];
    $dataPassword=$row["password"];
    }
    echo json_encode(array(
    "success"=>true,
    "data"=> array(
    "id"=>$dataId,
    "username"=>$dataUsername,
    "password"=>$dataPassword
    ),
    ));
} else {
    echo json_encode(array(
    "success"=>false, 
    ));
}
