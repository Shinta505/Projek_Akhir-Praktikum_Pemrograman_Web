<?php
include 'connect_pemweb.php';

$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$query = mysqli_query($connect, "INSERT INTO feedback
             VALUES('$first_name', '$last_name', '$email', '$contact', '$message')")
    or die(mysqli_error($connect));

if ($query) {
    header("location:home.php");
}
