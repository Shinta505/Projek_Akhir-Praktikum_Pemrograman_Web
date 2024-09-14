<?php
session_start();
include 'connect_pemweb.php';
$id =  $_SESSION["pasienID"];
//    $query = mysqli_query($connect, "select * from kunjungan where pasienID = $id");
//    while($data = mysqli_fetch_array($query)){
//         $pasien = $data['pasienID'];
//    }
// orangtua, anak, tgl_janji, umur, gejala, dokter, info

$orangtua = $_POST['orangtua'];
$anak = $_POST['anak'];
$tgl_janji = $_POST['tgl_janji'];
$umur = $_POST['umur'];
$gejala = $_POST['gejala'];
// $dokter = $_POST['dokter'];
if (isset($_POST['dokter'])) {
    $dokter = $_POST['dokter'];
}
$info = $_POST['info'];
$status = 0;

$query = mysqli_query($connect, "INSERT INTO kunjungan
             VALUES('$orangtua', '$anak', '$gejala', '$info', '$umur', '$tgl_janji', '$status', '$id', '$dokter', '')")
    or die(mysqli_error($connect));

if ($query) {
    header("location:make_appoinment.php?pesan=masuk");
}
