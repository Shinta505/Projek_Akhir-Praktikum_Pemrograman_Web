<?php
session_start();
include 'connect_pemweb.php';

$Gambar = $_POST['Gambar'];
$Judul = $_POST['Judul'];
$Keterangan = $_POST['Keterangan'];
$Selengkapnya = $_POST['Selengkapnya'];

$query = mysqli_query($connect, "INSERT INTO artikel
             VALUES('', '$Gambar', '$Judul', '$Keterangan', '$Selengkapnya')")
    or die(mysqli_error($connect));

if ($query) {
    header("location:tambah_artikel.php?pesan=masuk");
}
