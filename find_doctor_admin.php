<?php
session_start();
include 'connect_pemweb.php';
$username =  $_SESSION["username"];
if (empty($_SESSION['adminID'])) {
    header("location:login_admin.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Doctor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@200&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Catamaran';
            font-family: 'Poppins';
            background-color: #FEF9EF;
        }

        .col-9 {
            overflow-y: auto;
            max-height: 95vh;
        }

        .card {
            background-color: #FEF9EF;
            height: 550px;
            width: 400px;
        }

        .card-body-text {
            height: 230px;
        }
    </style>
</head>

<body>
    <ul class="nav justify-content-end p-4 py-1" style="background-color : #FEE440; font-size: 18px;">
        <div class="col-3 justify-content-start">
            <li>
                <!-- gimana biar dia ke pojok kiri -->
                <h2 class="fw-semibold fst-italic"> <img src="logo_rs.png" alt="" width=44px>FamCare</h2>
            </li>
        </div>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" aria-current="page" href="home_admin.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" aria-current="page" href="data_pasien.php">Patients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" aria-current="page" href="data_feedback.php">Feedback</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" href="appoinment_admin.php">Appointment Patients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" href="history_admin.php">History Patients</a>
        </li>
    </ul>
    <div class="row">
        <div class="col-9">
            <div class="text-start m-2 mt-3 row">
                <?php
                include 'connect_pemweb.php';
                $query = mysqli_query($connect, "SELECT * FROM dokter");
                while ($data = mysqli_fetch_array($query)) {
                ?>

                    <div class="col-sm-4">
                        <div class="card border border-2 shadow p-3 mb-5 bg-body-info">
                            <center>
                                <img src="<?php echo $data['foto']; ?>" class="card-img-top rounded-circle" alt="" style="width: 200px; height: 200px;">
                            </center>
                            <div class="card-body mx-3">
                                <div class="card-body-text">
                                    <h4 class="card-title" style="color: #4F709C;"><?php echo $data['nama']; ?></h4>
                                    <p class="card-text" style="font-size: 15px;">
                                        <img src="stetoskop.png" alt="">
                                        <?php echo $data['kualifikasi']; ?>
                                    </p>
                                    <p class="card-text" style="font-size: 15px;">
                                        <img src="building.png" alt="">
                                        <?php echo $data['lokasi']; ?>
                                    </p>
                                    <p class="card-text" style="color: #FF865E;">
                                        <?php echo $data['biaya']; ?>
                                    </p>
                                </div>
                                <a href="edit_doctor.php?dokterID=<?php echo $data['dokterID']; ?>" class="btn py-1 mb-3 text-center" style="width: 40%; background-color: #A2D2FF;">
                                    Edit
                                </a>
                                <a href="hapus_doctor.php?dokterID=<?php echo $data['dokterID']; ?>" class="btn py-1 mb-3 text-center" style="width: 40%; background-color: #FF865E;">
                                    Hapus
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-3 mt-5">
            <center>
                <a href="tambah_doctor.php" class="btn py-2 mb-3 text-center" style="width: 85%; background-color: #FEE440;">
                    Tambah Dokter
                </a>
            </center>
            <form action="select_option_admin.php" method="POST">
                <select name="opsiLokasi" id="opsiLokasi" class="border border-none p-3 ms-4" style="background-color: #A2D2FF;">
                    <option value="#">-Pilih Berdasarkan Lokasi-</option>
                    <option value="RSKIA Sadewa">Sadewa</option>
                    <option value="RSKIA Pratama UPN">Pratama UPN</option>
                    <option value="RSKIA UGM">UGM</option>
                    <option value="RSKIA Hermina">Hermina</option>
                    <option value="RSKIA Permata Bunda">Permata Bunda</option>
                    <option value="RSKIA Fajar">Fajar</option>
                </select>
                <center>
                    <button type="submit" name="search" class="btn btn-primary my-3 border border-0" style="background-color: #A2D2FF;">Cari</button>
                </center>
            </form>
            <img src="doctor.png" alt="" style="width: 100%; margin-top: 1rem;">
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">Logout</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin logout dari akun ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="logout.php"><button type="submit" class="btn btn-primary">Yakin</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>