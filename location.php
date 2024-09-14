<?php
session_start();
include 'connect_pemweb.php';
$gmail =  $_SESSION["email"];
if (empty($_SESSION['email'])) {
    header("location:location_nologin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@200&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Catamaran';
            font-family: 'Poppins';
            background-color: #A2D2FF;
        }

        .btn {
            background-color: #FEE440;
        }

        .card {
            background-color: #FEF9EF;
            height: 600px;
        }

        .card-text {
            font-size: 15px;
        }
    </style>
</head>

<body class="fw-light">
    <ul class="nav justify-content-end p-4 py-1 fw-normal" style="background-color : #FEE440; font-size: 18px;">
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
            <a class="nav-link fs-5 mx-3" style="color : #213555" href="location.php">Location</a>
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
                                <button class="btn px-4 rounded-pill fw-semibold fs-5" style="background-color : #A2D2FF;  width: 360px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Logout">Logout</button>
                            </li>
                    </div>
                </center>
            </div>
        </li>
    </ul>
    <center>
        <div class="container text-start mt-3 row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="row mx-3 mt-3 mb-0">
                        <div class="col-sm-5">
                            <img src="RSKIA_Sadewa.jpg" class="card-img-top" alt="" style="width: 155px; height: 172px;">
                        </div>
                        <div class="col-sm-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15812.711246534618!2d110.39776525541991!3d-7.7709611999999915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a598d120f72d1%3A0xfcd3c8da6c4176b!2sRSKIA%20Sadewa!5e0!3m2!1sid!2sid!4v1700813036625!5m2!1sid!2sid" style="border:0; width: 155px; height: 172px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <h4 class="card-title" style="color: #4F709C;">Rumah Sakit Anak Sadewa</h4>
                        <p class="card-text">Jalan Babarsari Blok TB 16 No.13B, Tambak Bayan, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaxJREFUSEu11TtIV2EYx/GPUwpG4BQ2mBAIgUVzRC1Cl6nCQYgmkVokEZq60uwQQRCNgYNENBRB0BBCLQ5uqaXk4Cw0GXbjiXPo8HJumv93OZxznuf5nuf2O106fLo6HF8TYB8u4yyO4zB+4ysW8QYvsF31oXWAc3icBa1L9Auu4V2ZURXgHu7uoHy/cBMzqU8Z4D7u7CB40fQGHhYfpIALeFUTPLePPpSdyOQUPuQvi4BefMbB/wCE6zKG88YXAdezptZVpymD3PciXsZNEfAa5xtq3xbwFBMpYAP9ewSIHTmRArYQi9WmRLFoAzWGm+hLAd+wvwEwmG1xXOdxqMI+Yh1IAUsYagBEGU9iPdvwjxVT9wlHU8AsxlosWBFyJMskHe1nuJoCriBetDkBOY1VxMSMJ06jeJ4CehCp1TWvGCcgc5hKgq/gGL6ngLgfwds2KVTYhFScycr216RM7G7hwS4hk3hU9K2S69sIVW36IeWxfmI6VdKqDHKnUNYnNbOe28UPJ5r8vizrpi/sxqVMo6JxMQAh1WtYyPoVovajqqRNgF224p9bxwF/AHpHSxka6Vc7AAAAAElFTkSuQmCC" />
                            Senin-Minggu Buka 24 Jam
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXpJREFUSEvF1DFIVXEUx/HP28SgQHTQwS0SQQcRB7fAjBCXJjfBRdGo0UB0SRKHxmqUlgLbGgJxUsTFQRAcosXA1cUQRBLlL/fBvz/v6rv3KR64y//e8/3d3/mfcyruOCp3zHcvAkH0LR7jDf424jJ18BCreJ5Bt/EUZ2VFUoE99CSwH3iJ8zIiqcBFDmQFE7chcILmHNAc3hcVSR3sozsH8hMjjQp8w1gNyC8M4bBRgSl8TiC7eIajovDwfVqiTvxJQF0IDkpFrUkObTka0RbwrhS9hoPA6cdOBDzNzkIDxNGOD1jDl7wfyNtFHzEdJR1gGL+zszZsIpQvxCLma4nkCTRhAwNRUpiRJXzPnt4E+Amv8N+wXrdNW7GFJwXq/xXj+FfNuWldP8r+NrRpvRGczNQrUG3l19mayFsjsfhytu6vzm5yECeGi51FGMYHOXbW8SLevEUEqswWTGIQfejIXoRhDE1xHIuXEaj3LgqXqBC4yCWXAleTLgETkTUZXHhRFwAAAABJRU5ErkJggg==" />
                            Telp 0274-489-118
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXNJREFUSEu11L9L1lEUx/GXQ4MNQugiQfgDCSKQIEMUW4OGFicHlxYHB0Focm8KamhqNCjwD3Bw9BfUoBCii1CgYEuNBUUUB77feHj8fr/3Po88Z72f+3mfc+45t0+Po6/H/nIAt7CAx5gsEjrEJt7jvCnJJsAA3uJJg8FfbOApflTp6gDX8QF3M1sY2jn8btfXAdaxmGleyl5iNQdwB0dUvk+ZULSmPX5hBBetB1UVvMZyTfZNgLiyhucpwCnGuwTs4GEKENPQ3yJKjXJru75jMAUI0Y0uAd8wlAJ8xFSXLdrHbApwlUd+gWcpQGQfVTQtZtWYhn4CMST/o+4BD3Cvw0XbwqOcRQvN/aKK1ASVflFRfCvHuYDQvcJKZhVvsNTU06qza9jFgwTkE6bxs1NA6GOmA3K7BvIZM/hal0ROj4exh9E2ky/Ft3DWVGEOIO7fxDbGCrNYqPmmzEtoLqBs1zucFP/+n5wB6ASQ43dJ03PAP698PBnYj2J1AAAAAElFTkSuQmCC" />
                            <a href="https://maps.app.goo.gl/SozF8kN3JLFBAW7x7" class="text-decoration-none text-black">Titik Lokasi</a>
                        </p>
                        <?php $lokasi = "RSKIA Sadewa"; ?>
                        <a href="coba.php?lokasi=<?php echo $lokasi; ?>" class="btn py-3 mt-1 text-center" style="width: 100%;">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK1JREFUSEvtlUEKhDAMRZ/nGBAGF3obL+NmbqAX8iBu3ImC91AGrIpjJtrSEWG6bZOX/KRJgOcTePaPBhimAKR32v3vASmQA4mldDWQAaWx36beAw9L58asASIJYDR1ZCzSbzNQi6aQP+wvA3iX6DKAkVRrhll6qQZSBvcEHJ1X66xPSeQdsBfZv8iu/0wedh0QOrpvgac0rt8LpwBiS0gFvL4tHEu/spnW487AEZ/cJhlt4Ql+AAAAAElFTkSuQmCC" />
                            Buat Janji Temu
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row mx-3 mt-3 mb-0">
                        <div class="col-sm-5">
                            <img src="Klinik_UPN.jpg" class="card-img-top" alt="" style="width: 155px; height: 172px;">
                        </div>
                        <div class="col-sm-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.251441153738!2d110.40503217392036!3d-7.763137376991948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59baac03fed9%3A0xa3e3439fa7190661!2sKlinik%20Pratama%20UPN%20%22Veteran%22!5e0!3m2!1sid!2sid!4v1700813122599!5m2!1sid!2sid" style="border:0; width: 155px; height: 172px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <h4 class="card-title" style="color: #4F709C;">Rumah Sakit Anak Pratama UPN</h4>
                        <p class="card-text">Jl. Pintu Selatan UPN Gorongan, Ngropoh, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283</p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaxJREFUSEu11TtIV2EYx/GPUwpG4BQ2mBAIgUVzRC1Cl6nCQYgmkVokEZq60uwQQRCNgYNENBRB0BBCLQ5uqaXk4Cw0GXbjiXPo8HJumv93OZxznuf5nuf2O106fLo6HF8TYB8u4yyO4zB+4ysW8QYvsF31oXWAc3icBa1L9Auu4V2ZURXgHu7uoHy/cBMzqU8Z4D7u7CB40fQGHhYfpIALeFUTPLePPpSdyOQUPuQvi4BefMbB/wCE6zKG88YXAdezptZVpymD3PciXsZNEfAa5xtq3xbwFBMpYAP9ewSIHTmRArYQi9WmRLFoAzWGm+hLAd+wvwEwmG1xXOdxqMI+Yh1IAUsYagBEGU9iPdvwjxVT9wlHU8AsxlosWBFyJMskHe1nuJoCriBetDkBOY1VxMSMJ06jeJ4CehCp1TWvGCcgc5hKgq/gGL6ngLgfwds2KVTYhFScycr216RM7G7hwS4hk3hU9K2S69sIVW36IeWxfmI6VdKqDHKnUNYnNbOe28UPJ5r8vizrpi/sxqVMo6JxMQAh1WtYyPoVovajqqRNgF224p9bxwF/AHpHSxka6Vc7AAAAAElFTkSuQmCC" />
                            Senin-Minggu Buka 24 Jam
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXpJREFUSEvF1DFIVXEUx/HP28SgQHTQwS0SQQcRB7fAjBCXJjfBRdGo0UB0SRKHxmqUlgLbGgJxUsTFQRAcosXA1cUQRBLlL/fBvz/v6rv3KR64y//e8/3d3/mfcyruOCp3zHcvAkH0LR7jDf424jJ18BCreJ5Bt/EUZ2VFUoE99CSwH3iJ8zIiqcBFDmQFE7chcILmHNAc3hcVSR3sozsH8hMjjQp8w1gNyC8M4bBRgSl8TiC7eIajovDwfVqiTvxJQF0IDkpFrUkObTka0RbwrhS9hoPA6cdOBDzNzkIDxNGOD1jDl7wfyNtFHzEdJR1gGL+zszZsIpQvxCLma4nkCTRhAwNRUpiRJXzPnt4E+Amv8N+wXrdNW7GFJwXq/xXj+FfNuWldP8r+NrRpvRGczNQrUG3l19mayFsjsfhytu6vzm5yECeGi51FGMYHOXbW8SLevEUEqswWTGIQfejIXoRhDE1xHIuXEaj3LgqXqBC4yCWXAleTLgETkTUZXHhRFwAAAABJRU5ErkJggg==" />
                            Telp 0274-489-118
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXNJREFUSEu11L9L1lEUx/GXQ4MNQugiQfgDCSKQIEMUW4OGFicHlxYHB0Focm8KamhqNCjwD3Bw9BfUoBCii1CgYEuNBUUUB77feHj8fr/3Po88Z72f+3mfc+45t0+Po6/H/nIAt7CAx5gsEjrEJt7jvCnJJsAA3uJJg8FfbOApflTp6gDX8QF3M1sY2jn8btfXAdaxmGleyl5iNQdwB0dUvk+ZULSmPX5hBBetB1UVvMZyTfZNgLiyhucpwCnGuwTs4GEKENPQ3yJKjXJru75jMAUI0Y0uAd8wlAJ8xFSXLdrHbApwlUd+gWcpQGQfVTQtZtWYhn4CMST/o+4BD3Cvw0XbwqOcRQvN/aKK1ASVflFRfCvHuYDQvcJKZhVvsNTU06qza9jFgwTkE6bxs1NA6GOmA3K7BvIZM/hal0ROj4exh9E2ky/Ft3DWVGEOIO7fxDbGCrNYqPmmzEtoLqBs1zucFP/+n5wB6ASQ43dJ03PAP698PBnYj2J1AAAAAElFTkSuQmCC" />
                            <a href="https://maps.app.goo.gl/Q9J1amXdtLuR3RmN8" class="text-decoration-none text-black">Titik Lokasi</a>
                        </p>
                        <?php $lokasi = "RSKIA Pratama UPN"; ?>
                        <a href="coba.php?lokasi=<?php echo $lokasi; ?>" class="btn py-3 mt-1 text-center" style="width: 100%;">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK1JREFUSEvtlUEKhDAMRZ/nGBAGF3obL+NmbqAX8iBu3ImC91AGrIpjJtrSEWG6bZOX/KRJgOcTePaPBhimAKR32v3vASmQA4mldDWQAaWx36beAw9L58asASIJYDR1ZCzSbzNQi6aQP+wvA3iX6DKAkVRrhll6qQZSBvcEHJ1X66xPSeQdsBfZv8iu/0wedh0QOrpvgac0rt8LpwBiS0gFvL4tHEu/spnW487AEZ/cJhlt4Ql+AAAAAElFTkSuQmCC" />
                            Buat Janji Temu
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row mx-3 mt-3 mb-0">
                        <div class="col-sm-5">
                            <img src="RS_Hermina.jpg" class="card-img-top" alt="" style="width: 155px; height: 172px;">
                        </div>
                        <div class="col-sm-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506007.6119292157!2d109.85599037343749!3d-7.770254199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5a2220ab04b7%3A0xa58fe89efa26396e!2sRumah%20Sakit%20Hermina%20Yogya!5e0!3m2!1sid!2sid!4v1700813177686!5m2!1sid!2sid" style="border:0; width: 155px; height: 172px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <h4 class="card-title" style="color: #4F709C;">Rumah Sakit Anak Hermina</h4>
                        <p class="card-text">Jl. Selokan Mataram, RT.06/RW.50, Meguwo, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282</p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaxJREFUSEu11TtIV2EYx/GPUwpG4BQ2mBAIgUVzRC1Cl6nCQYgmkVokEZq60uwQQRCNgYNENBRB0BBCLQ5uqaXk4Cw0GXbjiXPo8HJumv93OZxznuf5nuf2O106fLo6HF8TYB8u4yyO4zB+4ysW8QYvsF31oXWAc3icBa1L9Auu4V2ZURXgHu7uoHy/cBMzqU8Z4D7u7CB40fQGHhYfpIALeFUTPLePPpSdyOQUPuQvi4BefMbB/wCE6zKG88YXAdezptZVpymD3PciXsZNEfAa5xtq3xbwFBMpYAP9ewSIHTmRArYQi9WmRLFoAzWGm+hLAd+wvwEwmG1xXOdxqMI+Yh1IAUsYagBEGU9iPdvwjxVT9wlHU8AsxlosWBFyJMskHe1nuJoCriBetDkBOY1VxMSMJ06jeJ4CehCp1TWvGCcgc5hKgq/gGL6ngLgfwds2KVTYhFScycr216RM7G7hwS4hk3hU9K2S69sIVW36IeWxfmI6VdKqDHKnUNYnNbOe28UPJ5r8vizrpi/sxqVMo6JxMQAh1WtYyPoVovajqqRNgF224p9bxwF/AHpHSxka6Vc7AAAAAElFTkSuQmCC" />
                            Senin-Sabtu 08:00-14:30 WIB
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXpJREFUSEvF1DFIVXEUx/HP28SgQHTQwS0SQQcRB7fAjBCXJjfBRdGo0UB0SRKHxmqUlgLbGgJxUsTFQRAcosXA1cUQRBLlL/fBvz/v6rv3KR64y//e8/3d3/mfcyruOCp3zHcvAkH0LR7jDf424jJ18BCreJ5Bt/EUZ2VFUoE99CSwH3iJ8zIiqcBFDmQFE7chcILmHNAc3hcVSR3sozsH8hMjjQp8w1gNyC8M4bBRgSl8TiC7eIajovDwfVqiTvxJQF0IDkpFrUkObTka0RbwrhS9hoPA6cdOBDzNzkIDxNGOD1jDl7wfyNtFHzEdJR1gGL+zszZsIpQvxCLma4nkCTRhAwNRUpiRJXzPnt4E+Amv8N+wXrdNW7GFJwXq/xXj+FfNuWldP8r+NrRpvRGczNQrUG3l19mayFsjsfhytu6vzm5yECeGi51FGMYHOXbW8SLevEUEqswWTGIQfejIXoRhDE1xHIuXEaj3LgqXqBC4yCWXAleTLgETkTUZXHhRFwAAAABJRU5ErkJggg==" />
                            Telp 0224-465-765
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXNJREFUSEu11L9L1lEUx/GXQ4MNQugiQfgDCSKQIEMUW4OGFicHlxYHB0Focm8KamhqNCjwD3Bw9BfUoBCii1CgYEuNBUUUB77feHj8fr/3Po88Z72f+3mfc+45t0+Po6/H/nIAt7CAx5gsEjrEJt7jvCnJJsAA3uJJg8FfbOApflTp6gDX8QF3M1sY2jn8btfXAdaxmGleyl5iNQdwB0dUvk+ZULSmPX5hBBetB1UVvMZyTfZNgLiyhucpwCnGuwTs4GEKENPQ3yJKjXJru75jMAUI0Y0uAd8wlAJ8xFSXLdrHbApwlUd+gWcpQGQfVTQtZtWYhn4CMST/o+4BD3Cvw0XbwqOcRQvN/aKK1ASVflFRfCvHuYDQvcJKZhVvsNTU06qza9jFgwTkE6bxs1NA6GOmA3K7BvIZM/hal0ROj4exh9E2ky/Ft3DWVGEOIO7fxDbGCrNYqPmmzEtoLqBs1zucFP/+n5wB6ASQ43dJ03PAP698PBnYj2J1AAAAAElFTkSuQmCC" />
                            <a href="https://maps.app.goo.gl/ZEigV1a2Y8kAyaYT8" class="text-decoration-none text-black">Titik Lokasi</a>
                        </p>
                        <?php $lokasi = "RSKIA Hermina"; ?>
                        <a href="coba.php?lokasi=<?php echo $lokasi; ?>" class="btn py-3 mt-1 text-center" style="width: 100%;">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK1JREFUSEvtlUEKhDAMRZ/nGBAGF3obL+NmbqAX8iBu3ImC91AGrIpjJtrSEWG6bZOX/KRJgOcTePaPBhimAKR32v3vASmQA4mldDWQAaWx36beAw9L58asASIJYDR1ZCzSbzNQi6aQP+wvA3iX6DKAkVRrhll6qQZSBvcEHJ1X66xPSeQdsBfZv8iu/0wedh0QOrpvgac0rt8LpwBiS0gFvL4tHEu/spnW487AEZ/cJhlt4Ql+AAAAAElFTkSuQmCC" />
                            Buat Janji Temu
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-start my-5 row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="row mx-3 mt-3 mb-0">
                        <div class="col-sm-5">
                            <img src="RS_UGM.jpg" class="card-img-top" alt="" style="width: 155px; height: 172px;">
                        </div>
                        <div class="col-sm-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31627.463008145623!2d110.31423701083983!3d-7.743824699999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5893cad9576f%3A0xc1a837b495c90bd!2sRumah%20Sakit%20Akademik%20UGM%20Yogyakarta!5e0!3m2!1sid!2sid!4v1700813252142!5m2!1sid!2sid" style="border:0; width: 155px; height: 172px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <h4 class="card-title" style="color: #4F709C;">Rumah Sakit Anak UGM</h4>
                        <p class="card-text">Jl. Kabupaten, Kranggahan I, Trihanggo, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55291</p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaxJREFUSEu11TtIV2EYx/GPUwpG4BQ2mBAIgUVzRC1Cl6nCQYgmkVokEZq60uwQQRCNgYNENBRB0BBCLQ5uqaXk4Cw0GXbjiXPo8HJumv93OZxznuf5nuf2O106fLo6HF8TYB8u4yyO4zB+4ysW8QYvsF31oXWAc3icBa1L9Auu4V2ZURXgHu7uoHy/cBMzqU8Z4D7u7CB40fQGHhYfpIALeFUTPLePPpSdyOQUPuQvi4BefMbB/wCE6zKG88YXAdezptZVpymD3PciXsZNEfAa5xtq3xbwFBMpYAP9ewSIHTmRArYQi9WmRLFoAzWGm+hLAd+wvwEwmG1xXOdxqMI+Yh1IAUsYagBEGU9iPdvwjxVT9wlHU8AsxlosWBFyJMskHe1nuJoCriBetDkBOY1VxMSMJ06jeJ4CehCp1TWvGCcgc5hKgq/gGL6ngLgfwds2KVTYhFScycr216RM7G7hwS4hk3hU9K2S69sIVW36IeWxfmI6VdKqDHKnUNYnNbOe28UPJ5r8vizrpi/sxqVMo6JxMQAh1WtYyPoVovajqqRNgF224p9bxwF/AHpHSxka6Vc7AAAAAElFTkSuQmCC" />
                            Senin-Minggu Buka 24 Jam
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXpJREFUSEvF1DFIVXEUx/HP28SgQHTQwS0SQQcRB7fAjBCXJjfBRdGo0UB0SRKHxmqUlgLbGgJxUsTFQRAcosXA1cUQRBLlL/fBvz/v6rv3KR64y//e8/3d3/mfcyruOCp3zHcvAkH0LR7jDf424jJ18BCreJ5Bt/EUZ2VFUoE99CSwH3iJ8zIiqcBFDmQFE7chcILmHNAc3hcVSR3sozsH8hMjjQp8w1gNyC8M4bBRgSl8TiC7eIajovDwfVqiTvxJQF0IDkpFrUkObTka0RbwrhS9hoPA6cdOBDzNzkIDxNGOD1jDl7wfyNtFHzEdJR1gGL+zszZsIpQvxCLma4nkCTRhAwNRUpiRJXzPnt4E+Amv8N+wXrdNW7GFJwXq/xXj+FfNuWldP8r+NrRpvRGczNQrUG3l19mayFsjsfhytu6vzm5yECeGi51FGMYHOXbW8SLevEUEqswWTGIQfejIXoRhDE1xHIuXEaj3LgqXqBC4yCWXAleTLgETkTUZXHhRFwAAAABJRU5ErkJggg==" />
                            Telp 0274-453-0404
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXNJREFUSEu11L9L1lEUx/GXQ4MNQugiQfgDCSKQIEMUW4OGFicHlxYHB0Focm8KamhqNCjwD3Bw9BfUoBCii1CgYEuNBUUUB77feHj8fr/3Po88Z72f+3mfc+45t0+Po6/H/nIAt7CAx5gsEjrEJt7jvCnJJsAA3uJJg8FfbOApflTp6gDX8QF3M1sY2jn8btfXAdaxmGleyl5iNQdwB0dUvk+ZULSmPX5hBBetB1UVvMZyTfZNgLiyhucpwCnGuwTs4GEKENPQ3yJKjXJru75jMAUI0Y0uAd8wlAJ8xFSXLdrHbApwlUd+gWcpQGQfVTQtZtWYhn4CMST/o+4BD3Cvw0XbwqOcRQvN/aKK1ASVflFRfCvHuYDQvcJKZhVvsNTU06qza9jFgwTkE6bxs1NA6GOmA3K7BvIZM/hal0ROj4exh9E2ky/Ft3DWVGEOIO7fxDbGCrNYqPmmzEtoLqBs1zucFP/+n5wB6ASQ43dJ03PAP698PBnYj2J1AAAAAElFTkSuQmCC" />
                            <a href="https://maps.app.goo.gl/zskBKAqmqwuCcDFTA" class="text-decoration-none text-black">Titik Lokasi</a>
                        </p>
                        <?php $lokasi = "RSKIA UGM"; ?>
                        <a href="coba.php?lokasi=<?php echo $lokasi; ?>" class="btn py-3 mt-1 text-center" style="width: 100%;">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK1JREFUSEvtlUEKhDAMRZ/nGBAGF3obL+NmbqAX8iBu3ImC91AGrIpjJtrSEWG6bZOX/KRJgOcTePaPBhimAKR32v3vASmQA4mldDWQAaWx36beAw9L58asASIJYDR1ZCzSbzNQi6aQP+wvA3iX6DKAkVRrhll6qQZSBvcEHJ1X66xPSeQdsBfZv8iu/0wedh0QOrpvgac0rt8LpwBiS0gFvL4tHEu/spnW487AEZ/cJhlt4Ql+AAAAAElFTkSuQmCC" />
                            Buat Janji Temu
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row mx-3 mt-3 mb-0">
                        <div class="col-sm-5">
                            <img src="RSKIA_Permata_Bunda.jpg" class="card-img-top" alt="" style="width: 155px; height: 172px;">
                        </div>
                        <div class="col-sm-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.71098476263!2d110.39721321108746!3d-7.82038489216779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5713f41d3c6f%3A0x2aee4558e974a12d!2sRSKIA%20Permata%20Bunda!5e0!3m2!1sid!2sid!4v1700865371410!5m2!1sid!2sid" style="border:0; width: 155px; height: 172px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <h4 class="card-title" style="color: #4F709C;">Rumah Sakit Anak Permata Bunda</h4>
                        <p class="card-text">Jl. Ngeksigondo No.56, Prenggan, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55172</p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaxJREFUSEu11TtIV2EYx/GPUwpG4BQ2mBAIgUVzRC1Cl6nCQYgmkVokEZq60uwQQRCNgYNENBRB0BBCLQ5uqaXk4Cw0GXbjiXPo8HJumv93OZxznuf5nuf2O106fLo6HF8TYB8u4yyO4zB+4ysW8QYvsF31oXWAc3icBa1L9Auu4V2ZURXgHu7uoHy/cBMzqU8Z4D7u7CB40fQGHhYfpIALeFUTPLePPpSdyOQUPuQvi4BefMbB/wCE6zKG88YXAdezptZVpymD3PciXsZNEfAa5xtq3xbwFBMpYAP9ewSIHTmRArYQi9WmRLFoAzWGm+hLAd+wvwEwmG1xXOdxqMI+Yh1IAUsYagBEGU9iPdvwjxVT9wlHU8AsxlosWBFyJMskHe1nuJoCriBetDkBOY1VxMSMJ06jeJ4CehCp1TWvGCcgc5hKgq/gGL6ngLgfwds2KVTYhFScycr216RM7G7hwS4hk3hU9K2S69sIVW36IeWxfmI6VdKqDHKnUNYnNbOe28UPJ5r8vizrpi/sxqVMo6JxMQAh1WtYyPoVovajqqRNgF224p9bxwF/AHpHSxka6Vc7AAAAAElFTkSuQmCC" />
                            Senin-Minggu Buka 24 Jam
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXpJREFUSEvF1DFIVXEUx/HP28SgQHTQwS0SQQcRB7fAjBCXJjfBRdGo0UB0SRKHxmqUlgLbGgJxUsTFQRAcosXA1cUQRBLlL/fBvz/v6rv3KR64y//e8/3d3/mfcyruOCp3zHcvAkH0LR7jDf424jJ18BCreJ5Bt/EUZ2VFUoE99CSwH3iJ8zIiqcBFDmQFE7chcILmHNAc3hcVSR3sozsH8hMjjQp8w1gNyC8M4bBRgSl8TiC7eIajovDwfVqiTvxJQF0IDkpFrUkObTka0RbwrhS9hoPA6cdOBDzNzkIDxNGOD1jDl7wfyNtFHzEdJR1gGL+zszZsIpQvxCLma4nkCTRhAwNRUpiRJXzPnt4E+Amv8N+wXrdNW7GFJwXq/xXj+FfNuWldP8r+NrRpvRGczNQrUG3l19mayFsjsfhytu6vzm5yECeGi51FGMYHOXbW8SLevEUEqswWTGIQfejIXoRhDE1xHIuXEaj3LgqXqBC4yCWXAleTLgETkTUZXHhRFwAAAABJRU5ErkJggg==" />
                            Telp 0274-376-092
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXNJREFUSEu11L9L1lEUx/GXQ4MNQugiQfgDCSKQIEMUW4OGFicHlxYHB0Focm8KamhqNCjwD3Bw9BfUoBCii1CgYEuNBUUUB77feHj8fr/3Po88Z72f+3mfc+45t0+Po6/H/nIAt7CAx5gsEjrEJt7jvCnJJsAA3uJJg8FfbOApflTp6gDX8QF3M1sY2jn8btfXAdaxmGleyl5iNQdwB0dUvk+ZULSmPX5hBBetB1UVvMZyTfZNgLiyhucpwCnGuwTs4GEKENPQ3yJKjXJru75jMAUI0Y0uAd8wlAJ8xFSXLdrHbApwlUd+gWcpQGQfVTQtZtWYhn4CMST/o+4BD3Cvw0XbwqOcRQvN/aKK1ASVflFRfCvHuYDQvcJKZhVvsNTU06qza9jFgwTkE6bxs1NA6GOmA3K7BvIZM/hal0ROj4exh9E2ky/Ft3DWVGEOIO7fxDbGCrNYqPmmzEtoLqBs1zucFP/+n5wB6ASQ43dJ03PAP698PBnYj2J1AAAAAElFTkSuQmCC" />
                            <a href="https://maps.app.goo.gl/2Se3w6oNJVuSisx4A" class="text-decoration-none text-black">Titik Lokasi</a>
                        </p>
                        <?php $lokasi = "RSKIA Permata Bunda"; ?>
                        <a href="coba.php?lokasi=<?php echo $lokasi; ?>" class="btn py-3 mt-4 text-center" style="width: 100%;">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK1JREFUSEvtlUEKhDAMRZ/nGBAGF3obL+NmbqAX8iBu3ImC91AGrIpjJtrSEWG6bZOX/KRJgOcTePaPBhimAKR32v3vASmQA4mldDWQAaWx36beAw9L58asASIJYDR1ZCzSbzNQi6aQP+wvA3iX6DKAkVRrhll6qQZSBvcEHJ1X66xPSeQdsBfZv8iu/0wedh0QOrpvgac0rt8LpwBiS0gFvL4tHEu/spnW487AEZ/cJhlt4Ql+AAAAAElFTkSuQmCC" />
                            Buat Janji Temu
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="row mx-3 mt-3 mb-0">
                        <div class="col-sm-5">
                            <img src="RSKIA_Fajar.jpg" class="card-img-top" alt="" style="width: 155px; height: 172px;">
                        </div>
                        <div class="col-sm-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15811.289211392777!2d110.34120676977534!3d-7.808627699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srumah%20sakit%20anak%20terdekat!5e0!3m2!1sid!2sid!4v1700865495301!5m2!1sid!2sid" style="border:0; width: 155px; height: 172px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="card-body mx-3">
                        <h4 class="card-title" style="color: #4F709C;">Rumah Sakit Anak Fajar</h4>
                        <p class="card-text">Jl. Bugisan No.6-8, Patangpuluhan, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55251</p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaxJREFUSEu11TtIV2EYx/GPUwpG4BQ2mBAIgUVzRC1Cl6nCQYgmkVokEZq60uwQQRCNgYNENBRB0BBCLQ5uqaXk4Cw0GXbjiXPo8HJumv93OZxznuf5nuf2O106fLo6HF8TYB8u4yyO4zB+4ysW8QYvsF31oXWAc3icBa1L9Auu4V2ZURXgHu7uoHy/cBMzqU8Z4D7u7CB40fQGHhYfpIALeFUTPLePPpSdyOQUPuQvi4BefMbB/wCE6zKG88YXAdezptZVpymD3PciXsZNEfAa5xtq3xbwFBMpYAP9ewSIHTmRArYQi9WmRLFoAzWGm+hLAd+wvwEwmG1xXOdxqMI+Yh1IAUsYagBEGU9iPdvwjxVT9wlHU8AsxlosWBFyJMskHe1nuJoCriBetDkBOY1VxMSMJ06jeJ4CehCp1TWvGCcgc5hKgq/gGL6ngLgfwds2KVTYhFScycr216RM7G7hwS4hk3hU9K2S69sIVW36IeWxfmI6VdKqDHKnUNYnNbOe28UPJ5r8vizrpi/sxqVMo6JxMQAh1WtYyPoVovajqqRNgF224p9bxwF/AHpHSxka6Vc7AAAAAElFTkSuQmCC" />
                            Senin-Minggu Buka 24 Jam
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXpJREFUSEvF1DFIVXEUx/HP28SgQHTQwS0SQQcRB7fAjBCXJjfBRdGo0UB0SRKHxmqUlgLbGgJxUsTFQRAcosXA1cUQRBLlL/fBvz/v6rv3KR64y//e8/3d3/mfcyruOCp3zHcvAkH0LR7jDf424jJ18BCreJ5Bt/EUZ2VFUoE99CSwH3iJ8zIiqcBFDmQFE7chcILmHNAc3hcVSR3sozsH8hMjjQp8w1gNyC8M4bBRgSl8TiC7eIajovDwfVqiTvxJQF0IDkpFrUkObTka0RbwrhS9hoPA6cdOBDzNzkIDxNGOD1jDl7wfyNtFHzEdJR1gGL+zszZsIpQvxCLma4nkCTRhAwNRUpiRJXzPnt4E+Amv8N+wXrdNW7GFJwXq/xXj+FfNuWldP8r+NrRpvRGczNQrUG3l19mayFsjsfhytu6vzm5yECeGi51FGMYHOXbW8SLevEUEqswWTGIQfejIXoRhDE1xHIuXEaj3LgqXqBC4yCWXAleTLgETkTUZXHhRFwAAAABJRU5ErkJggg==" />
                            Telp 0823-3251-0100
                        </p>
                        <p class="card-text"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXNJREFUSEu11L9L1lEUx/GXQ4MNQugiQfgDCSKQIEMUW4OGFicHlxYHB0Focm8KamhqNCjwD3Bw9BfUoBCii1CgYEuNBUUUB77feHj8fr/3Po88Z72f+3mfc+45t0+Po6/H/nIAt7CAx5gsEjrEJt7jvCnJJsAA3uJJg8FfbOApflTp6gDX8QF3M1sY2jn8btfXAdaxmGleyl5iNQdwB0dUvk+ZULSmPX5hBBetB1UVvMZyTfZNgLiyhucpwCnGuwTs4GEKENPQ3yJKjXJru75jMAUI0Y0uAd8wlAJ8xFSXLdrHbApwlUd+gWcpQGQfVTQtZtWYhn4CMST/o+4BD3Cvw0XbwqOcRQvN/aKK1ASVflFRfCvHuYDQvcJKZhVvsNTU06qza9jFgwTkE6bxs1NA6GOmA3K7BvIZM/hal0ROj4exh9E2ky/Ft3DWVGEOIO7fxDbGCrNYqPmmzEtoLqBs1zucFP/+n5wB6ASQ43dJ03PAP698PBnYj2J1AAAAAElFTkSuQmCC" />
                            <a href="https://maps.app.goo.gl/4s2uRCjb22ed1PCK9" class="text-decoration-none text-black">Titik Lokasi</a>
                        </p>
                        <?php $lokasi = "RSKIA Fajar"; ?>
                        <a href="coba.php?lokasi=<?php echo $lokasi; ?>" class="btn py-3 mt-4 text-center" style="width: 100%;">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK1JREFUSEvtlUEKhDAMRZ/nGBAGF3obL+NmbqAX8iBu3ImC91AGrIpjJtrSEWG6bZOX/KRJgOcTePaPBhimAKR32v3vASmQA4mldDWQAaWx36beAw9L58asASIJYDR1ZCzSbzNQi6aQP+wvA3iX6DKAkVRrhll6qQZSBvcEHJ1X66xPSeQdsBfZv8iu/0wedh0QOrpvgac0rt8LpwBiS0gFvL4tHEu/spnW487AEZ/cJhlt4Ql+AAAAAElFTkSuQmCC" />
                            Buat Janji Temu
                        </a>
                    </div>
                </div>
            </div>
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