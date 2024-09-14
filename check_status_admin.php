<?php
session_start();
include 'connect_pemweb.php';

$username = $_POST['username'];
$pass = $_POST['pass'];

$data = mysqli_query($connect, "SELECT * FROM admin WHERE username='$username' AND pass='$pass'") or die(mysqli_error($connect));
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$admin = $data->fetch_assoc();
	$_SESSION['adminID'] = $admin["adminID"];
	$_SESSION['username'] = $username;
	$_SESSION['status']   = "login";
	header("location:home_admin.php?pesan=login");
} else {
	header("location:login_admin.php?pesan=gagal");
}
