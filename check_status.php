<?php
session_start();
include 'connect_pemweb.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($connect, "SELECT * FROM pasien WHERE email='$email' AND password='$password'") or die(mysqli_error($connect));
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$pasien = $data->fetch_assoc();
	$_SESSION['pasienID'] = $pasien["pasienID"];
	$_SESSION['email'] = $email;
	$_SESSION['status']   = "login";
	header("location:home.php?pesan=login");
} else {
	header("location:login.php?pesan=gagal");
}
