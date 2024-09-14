<?php
include 'connect_pemweb.php';

$password = $_POST['password'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact = $_POST['contact'];
$birth_date = $_POST['birth_date'];
$riwayat = $_POST['riwayat'];
$kunjungan = $_POST['kunjungan'];
$address = $_POST['address'];

$query = mysqli_query($connect, "INSERT INTO pasien
             VALUES('$password', '$email', '$first_name', '$last_name', '$contact', '$birth_date', '$riwayat', '$kunjungan', '$address', '')")
    or die(mysqli_error($connect));

if ($query) {
    header("location:login.php?pesan=berhasil_regis");
}
