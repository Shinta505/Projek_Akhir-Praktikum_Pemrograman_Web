<?php
session_start();
if (empty($_SESSION['adminID'])) {
    header("location:login_admin.php?pesan=gamasuk");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #FEF9EF; color: #213555;">

    <ul class="nav justify-content-between bg-transparent mt-3 mb-3" style="margin-left: 11rem; margin-right: 2rem;">
        <li class="nav-item">
            <h1 class="fs-1 fw-bold">Tambah Dokter</h1>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5" style="color : #213555;" href="find_doctor_admin.php"><button class="navbar-toggler border border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALRJREFUSEvt1k0KQVEYxvHfLVmDlFIWwJaEFSgDSzGwDetgYmYmyyDlinPvpXuuEwNn/D7P//3q7WQSvyyxvxDQxgIT9CPge8yxybUhYI1xhPGj5IBBFeCEDobYRYDON8098bCCQkBNSBQgF71i5Yn+JqBOl6Iq+AOeOvCVNf3PoHQGddpSFvv2FiUHxF7TQmLhNT2iixG2Tcu46kPACrMPGFfOoIUlpug1AFUCGniWS5P/Ki4oZCgZWZQthAAAAABJRU5ErkJggg==" />
                </button></a>
        </li>
    </ul>
    <div class="row">
        <div class="col-8">
            <form class="mx-3" action="input_doctor.php" method="POST">
                <!-- Nama Dokter  -->
                <label class="ms-5 mt-4" for="nama">Nama Lengkap</label>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="nama" style="border: none; border-bottom: 1px solid #A2D2FF; padding-right: 15rem;" required>
                <br>
                <!-- Spesialis  -->
                <label class="ms-5 pe-5 mt-4" for="kualifikasi">Spesialis</label>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="kualifikasi" style="border: none; border-bottom: 1px solid #A2D2FF; " required>
                <br>
                <!-- Lokasi Dokter  -->
                <label class="ms-5 pe-5 mt-4" for="lokasi">Lokasi Kerja</label>
                <select name="lokasi" id="lokasi" class="border border-none p-2">
                    <option value="#">-Pilih Berdasarkan Lokasi-</option>
                    <option value="RSKIA Sadewa">Sadewa</option>
                    <option value="RSKIA Pratama UPN">Pratama UPN</option>
                    <option value="RSKIA UGM">UGM</option>
                    <option value="RSKIA Hermina">Hermina</option>
                    <option value="RSKIA Permata Bunda">Permata Bunda</option>
                    <option value="RSKIA Fajar">Fajar</option>
                </select>
                <br>
                <!-- Biaya Dokter  -->
                <label class="ms-5 pe-5 mt-4" for="biaya">Biaya</label>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="biaya" style="border: none; border-bottom: 1px solid #A2D2FF; " required>
                <br>
                <!-- Link Foto  -->
                <label class="ms-5 pe-5 mt-4" for="foto">Foto Dokter</label>
                <input class="fw-light bg-transparent py-1" type="text" name="foto" style="border: none; border-bottom: 1px solid #A2D2FF; " required>
                <br>


                <button class="ms-5 mt-5 mb-5 rounded-pill border border-0 py-2 fw-medium" style="width: 20%; background-color: #FEE440; " type="button" name="kirim" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title fs-5" id="exampleModalLabel">Tambah Artikel</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Klik selesai untuk mengkonfirmasi dokter tersebut.
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