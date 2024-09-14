<?php
include 'connect_pemweb.php';

$dokterID = $_POST['dokterID'];
$foto = $_POST['foto'];
$nama = $_POST['nama'];
$kualifikasi = $_POST['kualifikasi'];
$biaya = $_POST['biaya'];
$lokasi = $_POST['lokasi'];

$query = mysqli_query($connect, "UPDATE dokter SET foto='$foto', nama='$nama', kualifikasi='$kualifikasi', biaya='$biaya', lokasi='$lokasi' WHERE dokterID='$dokterID'") or die(mysqli_error($connect));

if ($query) {
    header("location:find_doctor_admin.php");
} else {
    echo "Proses edit gagal";
}
?>