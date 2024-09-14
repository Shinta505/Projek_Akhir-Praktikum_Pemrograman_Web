<?php
include 'connect_pemweb.php';

$password = $_POST['password'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact = $_POST['contact'];
$birth_date = $_POST['birth_date'];
$riwayat = $_POST['riwayat'];
$address = $_POST['address'];
$pasienID = $_POST['pasienID'];

$query = mysqli_query($connect, "UPDATE pasien SET password='$password', email='$email', first_name='$first_name', last_name='$last_name', contact='$contact', birth_date='$birth_date', riwayat='$riwayat', address='$address' WHERE pasienID='$pasienID'") or die(mysqli_error($connect));

if ($query) {
    header("location:my_profile.php");
} else {
    echo "Proses edit gagal";
}
?>