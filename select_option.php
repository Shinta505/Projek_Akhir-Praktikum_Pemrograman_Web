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

        .btn {
            background-color: #A2D2FF;
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
    <ul class="nav justify-content-end px-4 pt-1" style="background-color : #FEE440; font-size: 18px;">
        <div class="col-5 justify-content-start">
            <li>
                <!-- gimana biar dia ke pojok kiri -->
                <h2 class="fw-semibold fst-italic"> <img src="logo_rs.png" alt="" width=44px>FamCare </h2>
            </li>
        </div>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" aria-current="page" href="artikel.php">Article</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" href="contact_hos.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" href="location.php">Location</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 mx-3" style="color : #213555;" href="#"><button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    Account
                </button></a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header" style="background-color : #A2D2FF;">
                    <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Your Account</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <center>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <img src="profile1.jpg" class="rounded-circle mt-1 mb-4" width=100px; alt="">
                                <!-- ini nanti kasih gmail dari dbnya ya   -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="my_profile.php">My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="appoinment.php">My Appointment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="history.php">History</a>
                            </li>
                            <li class="nav-item mt-4 pt-5">
                                <button class="btn px-4 rounded-pill fw-semibold fs-5" style="background-color : #A2D2FF;  width: 360px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Logout">Logout</button>
                            </li>
                    </div>
                </center>
            </div>
        </li>
    </ul>
    <div class="row">
        <div class="col-9">
            <div class="text-start m-2 mt-3 row">
                <?php
                include 'connect_pemweb.php';

                if (isset($_POST['opsiLokasi'])) {
                    $lokasi = $_POST['opsiLokasi'];
                }

                $query = mysqli_query($connect, "SELECT * FROM dokter WHERE lokasi='$lokasi'")
                    or die(mysqli_error($connect));
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
                                <a href="make_appoinment2.php?dokterID=<?php echo $data['dokterID']; ?>" class="btn py-3 mb-3 text-center" style="width: 100%;">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK1JREFUSEvtlUEKhDAMRZ/nGBAGF3obL+NmbqAX8iBu3ImC91AGrIpjJtrSEWG6bZOX/KRJgOcTePaPBhimAKR32v3vASmQA4mldDWQAaWx36beAw9L58asASIJYDR1ZCzSbzNQi6aQP+wvA3iX6DKAkVRrhll6qQZSBvcEHJ1X66xPSeQdsBfZv8iu/0wedh0QOrpvgac0rt8LpwBiS0gFvL4tHEu/spnW487AEZ/cJhlt4Ql+AAAAAElFTkSuQmCC" />
                                    Buat Janji Temu
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
            <form action="select_opstion.php" method="POST">
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
                    <button type="submit" name="search" class="btn btn-primary my-3">Cari</button>
                </center>
            </form>
            <img src="doctor.png" alt="" style="width: 100%; margin-top: 6rem;">
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
                    <button type="button" class="btn" style="background-color: #FF865E;" data-bs-dismiss="modal">Cancel</button>
                    <a href="logout.php"><button type="submit" class="btn" style="background-color: #A2D2FF;">Yakin</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>