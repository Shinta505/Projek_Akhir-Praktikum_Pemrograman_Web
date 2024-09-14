<?php
session_start();
if (empty($_SESSION['pasienID'])) {
    header("location:login.php?pesan=belum_login");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Janjian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        select {
            border-color: #A2D2FF;
        }
    </style>
</head>

<body style="background-color: #FEF9EF; color: #213555;">

    <ul class="nav justify-content-between bg-transparent mt-3 mb-3" style="margin-left: 11rem; margin-right: 2rem;">
        <li class="nav-item">
            <h1 class="fs-1 fw-bold">Ubah Jadwal Kunjungan</h1>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5" style="color : #213555;" href="home.php"><button class="navbar-toggler border border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAZpJREFUWEft1ktugzAQAFAb5yCQO1B1WQ5B1WVykqYnSZdV6R3Ksio5Q/FFYKpJMTJg4x9IUUU2WWQcP43HM6bkxj70xjzk/4Hi+6eYNs0ZMw2MHfnXGw/JelCGOkwtATgwloWgvEEKjHAFobxAqsx0mrj79kY5g5THBHAkux2nTfNJCAlCOYF0GH75KDEz3e9BKGuQCSMKKBRlBbLFLIEyglwxoahZkC8mBKUFhWJ8UUrQUhgf1ASk6sAAkImr7TunbMfMAKQbB3VVGIvfBpqkOYziJh19sFGS5jgoRaft164Iwj14XRWJ2Oy2QXhkUdserm8bgGehVmUoTvNDROkkm7imbdsSZ9v4GSIfGaX05RobRa9ynLY25MUyaObZMSkjYCyRN9P9p7zQGZSkOQ7PB5siJoSUdVVkInYtUH9TRNrHON1xrw7S3T7dxhvIVCtbhrYMYQZs6mCtW6YctJYN0RQ2GKhWnXp/93iSG5xpB5ffsaH+fL+fVGtm3zn7ND/D35hQDlEXRP+8mMFgzCIPLx+Ybs0GMmXzF1vFvDReatl+AAAAAElFTkSuQmCC" />
                </button></a>
        </li>
    </ul>
    <div class="row">
        <div class="col-8">
            <?php
            include 'connect_pemweb.php';
            $id = $_GET['kunjunganID'];
            $query = mysqli_query($connect, "select * from kunjungan where kunjunganID = '$id'");
            $data = mysqli_fetch_array($query);
            ?>

            <form class="mx-3" action="edit.php" method="POST">
                <input type="hidden" name="kunjunganID" value="<?php echo $data['kunjunganID'] ?>"><br>
                <!-- //nama ortu, nama anak  -->
                <label class="ms-5 pe-5" for="oarngtua">Nama Orang Tua/Wali</label>
                <label for="anak" class="px-5" style="margin-left: 6.5rem;">Nama anak </label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="orangtua" value="<?php echo $data['parent_name'] ?>" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF; margin-left : 6.5rem" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="text" name="anak" value="<?php echo $data['children_name'] ?>" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" required>
                <br>

                <!-- tanggal, umur anak  -->
                <label class="ms-5 pe-5 mt-4" for="birth_date">Tanggal Kunjungan</label>
                <label for="umur" class="px-5" style="margin-left: 8rem;">Umur Anak</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="date" value="<?php echo $data['visit_date'] ?>" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="tgl_janji" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="number" value="<?php echo $data['children_age'] ?>" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="umur" required>
                <br>

                <!-- gejala, dokter(pake radio yang bisa di scroll) -->
                <label class="ms-5 pe-5 mt-4" for="gejala">Gejala</label>
                <label for="dokter" class="px-5 pb-3" style="margin-left: 13.5rem;">Pilih Dokter</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="gejala" value="<?php echo $data['troubling_symptoms'] ?>" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF; margin-left : 6.5rem" required>
                <!-- <input class="fw-light ms-3 bg-transparent py-1" type="text" name="dokter" style="width: 25%; border: none; border-bottom: 1px solid #A2D2FF;" required> -->
                <select name="dokter" id="dokter" class="py-1 ms-4 bg-transparent" size="3" style="width: 39%; background-color: #A2D2FF;">
                    <option value="1" <?php if ($data['dokterID'] == '1') echo 'selected'; ?>>Dr. Anisa Dewi, Sp.A. - RSKIA Sadewa</option>
                    <option value="2" <?php if ($data['dokterID'] == '2') echo 'selected'; ?>>Dr. Aditya Pratama, Sp.A. - RSKIA Pratama UPN</option>
                    <option value="3" <?php if ($data['dokterID'] == '3') echo 'selected'; ?>>Dr. Siti Nurul Huda, Sp.A. - RSKIA UGM</option>
                    <option value="4" <?php if ($data['dokterID'] == '4') echo 'selected'; ?>>Dr. Maya Indriani, Sp.A. - RSKIA Hermina</option>
                    <option value="5" <?php if ($data['dokterID'] == '5') echo 'selected'; ?>>Dr. Rina Fitriani, Sp.A. - RSKIA Permata Bunda</option>
                    <option value="6" <?php if ($data['dokterID'] == '6') echo 'selected'; ?>>Dr. Putri Handayani, Sp.A. - RSKIA Fajar</option>
                    <option value="7" <?php if ($data['dokterID'] == '7') echo 'selected'; ?>>Dr. Amanda Surya, Sp.A. - RSKIA Sadewa</option>
                    <option value="8" <?php if ($data['dokterID'] == '8') echo 'selected'; ?>>Dr. Ratna Cahaya, Sp.A. - RSKIA Pratama UPN</option>
                    <option value="9" <?php if ($data['dokterID'] == '9') echo 'selected'; ?>>Dr. Nina Kusuma, Sp.A. - RSKIA UGM</option>
                    <option value="10" <?php if ($data['dokterID'] == '10') echo 'selected'; ?>>Dr. Dian Pertiwi, Sp.A. - RSKIA Hermina</option>
                    <option value="11" <?php if ($data['dokterID'] == '11') echo 'selected'; ?>>Dr. Aditya Wijaya, Sp.A. - RSKIA Permata Bunda</option>
                    <option value="12" <?php if ($data['dokterID'] == '12') echo 'selected'; ?>>Dr. Maya Putri, Sp.A. - RSKIA Fajar</option>
                </select>
                <br>

                <!-- //infor tambahan  -->
                <label class="ms-5 mt-4" for="info">Informasi Tambahan</label> <br>
                <textarea class="fw-light ms-5 bg-transparent py-1" style="border: none; border-bottom: 1px solid #A2D2FF" name="info" cols="95" rows="2" required><?php echo $data['addictional_information'] ?></textarea>
                <br>
                <center>
                    <button class="mt-3 mb-5 rounded-pill border border-0 py-2 fw-medium" style="width: 20%; background-color: #FEE440; margin-left: 55%;" type="button" name="kirim" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit </button>
                </center>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title fs-5" id="exampleModalLabel">Make Appoinment</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Klik selesai untuk mengkonfirmasi data Anda.
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Selesai</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-4">
            <img src="janjian.png" alt="" width="420px">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>