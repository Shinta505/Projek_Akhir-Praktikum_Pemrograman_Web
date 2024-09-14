<?php
session_start();
include 'connect_pemweb.php';

$foto = $_POST['foto'];
$nama = $_POST['nama'];
$kualifikasi = $_POST['kualifikasi'];
$biaya = $_POST['biaya'];
$lokasi = $_POST['lokasi'];

$query = mysqli_query($connect, "INSERT INTO dokter
             VALUES('$foto', '$nama', '$kualifikasi', '$biaya', '', '$lokasi')")
    or die(mysqli_error($connect));

if ($query) {
    header("location:tambah_doctor.php?pesan=masuk");
}
