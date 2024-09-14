<?php
include 'connect_pemweb.php';

$kunjunganID = $_GET['kunjunganID'];
// UPDATE `kunjungan` SET `status` = 0 WHERE `kunjungan`.`pasienID` = 2; 
$query = mysqli_query($connect, "update kunjungan set status = 1 where kunjunganID = '$kunjunganID'");

if ($query) {
    header("location:appoinment_admin.php");
} else {
    echo "Proses hapus gagal";
}
