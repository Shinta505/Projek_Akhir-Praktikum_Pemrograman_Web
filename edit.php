<?php
session_start();
include 'connect_pemweb.php';

$id =  $_POST['kunjunganID'];
$orangtua = $_POST['orangtua'];
$anak = $_POST['anak'];
$tgl_janji = $_POST['tgl_janji'];
$umur = $_POST['umur'];
$gejala = $_POST['gejala'];
if (isset($_POST['dokter'])) {
    $dokter = $_POST['dokter'];
}
$info = $_POST['info'];

$query = mysqli_query($connect, "update kunjungan set parent_name = '$orangtua', children_name = '$anak', visit_date = '$tgl_janji',
            children_age = '$umur', troubling_symptoms = '$gejala', dokterID = '$dokter', addictional_information = '$info' where kunjunganID = '$id'")
    or die(mysqli_error($connect));
if ($query) {
    header('location:appoinment.php');
} else {
    echo "Proses edit gagal";
}
