<?php
include 'connect_pemweb.php';

$artikelID = $_GET['artikelID'];
$query = mysqli_query($connect, "DELETE FROM artikel WHERE artikelID = '$artikelID'");

if ($query) {
    header("location:artikel_admin.php");
} else {
    echo "Proses hapus gagal";
}
