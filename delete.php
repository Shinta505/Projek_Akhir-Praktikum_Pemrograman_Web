<?php
include 'connect_pemweb.php';

$kunjunganID = $_GET['kunjunganID'];
$query = mysqli_query($connect, "DELETE FROM kunjungan WHERE kunjunganID = '$kunjunganID'");

if ($query) {
    header("location:appoinment.php");
} else {
    echo "Proses hapus gagal";
}
