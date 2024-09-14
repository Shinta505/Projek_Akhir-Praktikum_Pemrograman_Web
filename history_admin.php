<?php
session_start();
include 'connect_pemweb.php';
$username =  $_SESSION["username"];
if (empty($_SESSION['adminID'])) {
  header("location:login_admin.php?pesan=belum_login");
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hospital Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@200&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
      font-family: 'Catamaran';
      color: #213555;
    }
  </style>
</head>

<body style="background-color : #FEF9EF; color : #213555">
  <ul class="nav justify-content-between bg-transparent mt-3" style="margin-left: 19rem; margin-right: 2rem;">
    <li class="nav-item">
      <h1 class="fs-1 fw-bold">History Kunjungan Pasien</h1>
    </li>
    <li class="nav-item">
      <a class="nav-link fs-5" style="color : #213555;" href="home_admin.php"><button class="navbar-toggler border border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAZpJREFUWEft1ktugzAQAFAb5yCQO1B1WQ5B1WVykqYnSZdV6R3Ksio5Q/FFYKpJMTJg4x9IUUU2WWQcP43HM6bkxj70xjzk/4Hi+6eYNs0ZMw2MHfnXGw/JelCGOkwtATgwloWgvEEKjHAFobxAqsx0mrj79kY5g5THBHAkux2nTfNJCAlCOYF0GH75KDEz3e9BKGuQCSMKKBRlBbLFLIEyglwxoahZkC8mBKUFhWJ8UUrQUhgf1ASk6sAAkImr7TunbMfMAKQbB3VVGIvfBpqkOYziJh19sFGS5jgoRaft164Iwj14XRWJ2Oy2QXhkUdserm8bgGehVmUoTvNDROkkm7imbdsSZ9v4GSIfGaX05RobRa9ynLY25MUyaObZMSkjYCyRN9P9p7zQGZSkOQ7PB5siJoSUdVVkInYtUH9TRNrHON1xrw7S3T7dxhvIVCtbhrYMYQZs6mCtW6YctJYN0RQ2GKhWnXp/93iSG5xpB5ffsaH+fL+fVGtm3zn7ND/D35hQDlEXRP+8mMFgzCIPLx+Ybs0GMmXzF1vFvDReatl+AAAAAElFTkSuQmCC" />
        </button></a>
    </li>
  </ul>

  <div class=" row ">
    <div class="col-8 mb-5 mt-4 ms-5" style="margin-right: 10rem;">
      <table class="table table-striped table-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Orang Tua/Wali</th>
            <th scope="col">Anak</th>
            <!-- sekalian bawahnya umurnya + tahun -->
            <th scope="col">Gejala</th>
            <th scope="col">Informasi</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Dokter</th>
            <th scope="col">Lokasi</th>
          </tr>
        </thead>
        <?php
        include 'connect_pemweb.php';
        $query = mysqli_query($connect, "SELECT k.pasienID, k.parent_name, k.children_name, k.troubling_symptoms, k.addictional_information, k.children_age, k.visit_date, k.kunjunganID, d.nama, d.lokasi FROM kunjungan k 
                                   INNER JOIN dokter d ON k.dokterID = d.dokterID WHERE k.status = 1 ORDER BY k.visit_date DESC");
        while ($data = mysqli_fetch_array($query)) {

        ?>
          <tr>
            <td><?php echo $data['pasienID']; ?></td>
            <td><?php echo $data['parent_name']; ?></td>
            <td><?php echo $data['children_name']; ?> <br> <?php echo $data['children_age'] . " tahun"; ?> </td>
            <td><?php echo $data['troubling_symptoms']; ?></td>
            <td><?php echo $data['addictional_information']; ?></td>
            <td><?php echo $data['visit_date']; ?> </td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['lokasi']; ?></td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
    <div class="col-1">
      <img src="data_kunjungan.png" alt="" height="540px">
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>