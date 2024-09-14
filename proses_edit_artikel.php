<?php
include 'connect_pemweb.php';

$artikelID = $_POST['artikelID'];
$Gambar = $_POST['Gambar'];
$Judul = $_POST['Judul'];
$Keterangan = $_POST['Keterangan'];
$Selengkapnya = $_POST['Selengkapnya'];

$query = mysqli_query($connect, "UPDATE artikel SET Gambar='$Gambar', Judul='$Judul', Keterangan='$Keterangan', Selengkapnya='$Selengkapnya' WHERE artikelID='$artikelID'") or die(mysqli_error($connect));

if ($query) {
    header("location:artikel_admin.php");
} else {
    echo "Proses edit gagal";
}
