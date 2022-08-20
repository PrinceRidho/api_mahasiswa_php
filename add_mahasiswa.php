<?php
include 'connection.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$foto = $_POST['foto'];

$sql = "INSERT INTO tb_mahasiswa (nama, nim, jurusan, tanggal_lahir, alamat,foto) VALUES ('".$nama."','".$nim."','".$jurusan."','".$tanggal_lahir."','".$alamat."','".$foto."')";
$result = $connect->query($sql);
if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}
