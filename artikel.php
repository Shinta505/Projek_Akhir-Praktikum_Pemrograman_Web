<?php
session_start();
include 'connect_pemweb.php';
$gmail =  $_SESSION["email"];
if (empty($_SESSION['email'])) {
    header("location:artikel_nologin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@200&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Catamaran';
            font-family: 'Poppins';
        }

        .btn {
            background-color: #FEE440;
        }

        .card {
            background-color: #FEF9EF;
            height: 550px;
        }

        .card-body-text {
            height: 220px;
        }

        .card-text {
            font-size: 15px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #A2D2FF;
        }
    </style>
</head>

<body class="fw-light">
    <ul class="nav justify-content-end p-4 py-1 fw-normal" style="background-color : #A2D2FF; font-size: 18px;">
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
                <div class="offcanvas-header" style="background-color : #FEE440;">
                    <h3 class="offcanvas-title" id="offcanvasNavbarLabel">Your Account</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <center>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <img src="profile1.avif" class="rounded-circle mt-1 mb-3" width="100px" height="100px" alt="">
                                <h6 class="mb-3"><u><?php echo $gmail ?></u></h6>
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
                                <button class="btn px-4 rounded-pill fw-semibold fs-5" style="background-color : #FEE440;  width: 360px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Logout">Logout</button>
                            </li>
                    </div>
                </center>
            </div>
        </li>
    </ul>
    <center>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="container text-start my-3 row">
                <div class="carousel-inner">
                    <?php
                    include 'connect_pemweb.php';
                    $query = mysqli_query($connect, "SELECT * FROM artikel");
                    $count = 0;
                    while ($data = mysqli_fetch_array($query)) {
                        if ($count % 3 == 0) {
                            echo '<div class="carousel-item';
                            echo $count == 0 ? ' active' : '';
                            echo '">';
                            echo '<div class="row">';
                        }
                    ?>
                        <div class="col-sm-4">
                            <div class="card border border-2 shadow p-3 mb-5 bg-body-info">
                                <img src="<?php echo $data['Gambar']; ?>" class="card-img-top" alt="" style="width: 100%; height: 200px;">
                                <div class="card-body mx-3">
                                    <div class="card-body-text">
                                        <h4 class="card-title" style="color: #4F709C;"><?php echo $data['Judul']; ?></h4>
                                        <p class="card-text"><?php echo $data['Keterangan']; ?></p>
                                    </div>
                                    <a href="<?php echo $data['Selengkapnya']; ?>" class="btn py-3 text-center" style="width: 100%;">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                        $count++;
                        if ($count % 3 == 0) {
                            // End the current carousel item
                            echo '</div></div>';
                        }
                    }
                    // Close the last carousel item if needed
                    if ($count % 3 != 0) {
                        echo '</div></div>';
                    }
                    ?>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </center>

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