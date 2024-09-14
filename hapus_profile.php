<?php
session_start();
include 'connect_pemweb.php';

$pasienID = $_SESSION['pasienID'];

$query = mysqli_query($connect, "DELETE FROM kunjungan WHERE pasienID='$pasienID'");
$query2 = mysqli_query($connect, "DELETE FROM pasien
            WHERE pasienID='$pasienID'");

if ($query && $query2) {
    header("location:login.php?pesan=hapus");
} else {
    echo "Proses hapus gagal";
}
