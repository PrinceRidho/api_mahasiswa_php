<?php
$foto = $_POST['foto'];
$nama = $_POST['nama'];
$fotoBerkas = base64_decode($foto);
file_put_contents("foto/".$nama, $fotoBerkas);