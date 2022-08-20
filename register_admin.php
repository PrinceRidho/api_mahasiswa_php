<?php
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO tb_admin (username, password) VALUES ('".$username."', '".$password."')";
$result = $connect->query($sql);
if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}
