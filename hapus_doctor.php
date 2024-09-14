<?php
include 'connect_pemweb.php';

$dokterID = $_GET['dokterID'];
$query = mysqli_query($connect, "DELETE FROM dokter WHERE dokterID = '$dokterID'");

if ($query) {
    header("location:find_doctor_admin.php");
} else {
    echo "Proses hapus gagal";
}
