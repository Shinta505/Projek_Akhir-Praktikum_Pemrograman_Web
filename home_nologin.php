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
      font-family: 'Poppins';
      color: #213555;
    }
  </style>
</head>

<body style="background-color : #FEF9EF; color : #213555">
  <ul class="nav justify-content-end p-4 py-1" style="background-color : #A2D2FF; font-size: 18px;">
    <div class="col-5 justify-content-start">
      <li>
        <!-- gimana biar dia ke pojok kiri -->
        <h2 class="fw-semibold fst-italic"> <img src="logo_rs.png" alt="" width=44px>FamCare </h2>
      </li>
    </div>
    <li class="nav-item">
      <a class="nav-link fs-5 mx-3" style="color : #4F709C;" aria-current="page" href="home.php">Home</a>
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
              <li class="nav-item mt-1 pt-1">
                <h5 class="pb-4 fw-normal">Silahkan Login terlebih dahulu</h5>
                <a href="login.php">
                  <button class="btn px-4 rounded-pill fw-semibold fs-5" style="background-color : #FEE440;  width: 360px;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" value="login">Login</button>
                </a>
              </li>
          </div>
        </center>
      </div>
    </li>
  </ul>

  <div class=" m-4 ">
    <div class="row">
      <div class="col-5 ms-5 ps-5">
        <img src="Home_pic.png" alt="">
      </div>
      <div class="col-6 mt-3">
        <center>
          <h3 class="fs-1 fw-bold mb-5">Rumah Sakit Anak Hebat</h3>
          <p style="text-align: justify">
            Kami berkomitmen memberi layanan kesehatan prima dengan menghadirkan layanan kesehatan terdepan yang didukung oleh teknologi medis dan sistem informasi rumah sakit digital terkini. Kami percaya, komitmen ini akan menjamin layanan yang lebih baik dan lebih cepat, baik untuk diagnosis, maupun tindakan korektif.
            Komitmen ini juga tercermin dari konsistensi kami mengimplementasikan standar akreditasi nasional di seluruh rumah sakit di bawah naungan Rumah Sakit Anak Hebat.
            Selain itu, kami juga berupaya berkontribusi untuk masyarakat melalui program tanggung jawab sosial perusahaan yang berfokus pada empat pilar, yaitu kesehatan, lingkungan, pendidikan, dan bantuan sosial.
          </p>
        </center>
        <div class="text-center mt-5 mb-4">
          <div class="row">
            <div class="col">
              <a href="find_doctor.php">
                <button class="btn px-4 fw-semibold fs-6" style="background-color : #A2D2FF; width: 300px;" type="submit" value="Logout">Find A Doctor</button>
              </a>
            </div>
            <div class="col">
              <a href="location.php">
                <button class="btn px-4 fw-semibold fs-6" style="background-color : #A2D2FF; width: 300px;" type="submit" value="Logout">Location</button>
              </a>
            </div>
          </div>
        </div>
        <a href="make_appoinment.php">
          <button class="btn px-4 fw-semibold fs-6" style="background-color : #A2D2FF; width: 644px;" type="submit" value="Logout">Make An Appointment</button>
        </a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>