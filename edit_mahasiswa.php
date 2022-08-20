<?php
include 'connection.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$foto = $_POST['foto'];
$sql = "UPDATE tb_mahasiswa SET nama='".$nama."', jurusan='".$jurusan."', tanggal_lahir='".$tanggal_lahir."', alamat='".$alamat."', foto='".$foto."' WHERE nim='".$nim."'";
$result = $connect->query($sql);
if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}
