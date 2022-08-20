<?php
include 'connection.php';
$nim = $_POST['nim'];
$sql = "DELETE FROM tb_mahasiswa WHERE nim='".$nim."'";
$result = $connect->query($sql);
if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}