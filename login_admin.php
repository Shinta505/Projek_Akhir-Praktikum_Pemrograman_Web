<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
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

<body style="background-color: #A2D2FF;">
  <center>
    <div class="row">
      <div class="col-7 align-middle">
        <nav class="navbar" style="background-color: #A2D2FF;">
          <a class="nav-link fs-5 mx-3" style="color : #213555;" href="home_nologin.php"><button class="navbar-toggler border border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAgRJREFUaEPtmTtKBEEQQN8G5oooKmJiYmjoBRRF8AIqBgrinsAjeAE/iIiIHkEUTDU2MRHM/CGiHsBAKeiVdezpz071zi5MJxtMf97rqh6qZ2t0eat1OT+VQNkRTBmBJWAT+Aa2gNMUsqkENoCdDHAd2NWWSCFgg29wq0toC7jgk0hoCsjubgemiFoktATydn7GCJ0BPSnOhIaADf4LmAcuDfQ0kESiqEAIfGPjk0gUEYiBTybRqkAr8EkkWhEoAq8uESugAa8qESOgCa8mESqQAl5FIkQgJXxhCZ9AO+ALSbgE8mqbOeAisOaJ7TYLnFsG5dZOeQKuqtIXtVjobH+5ANmaVcIGswwcOyjKEhAkYTtpZrPBfAK9HSrwAoz4BO6B8Q4VuAMmfAILwB4wnCNRVgo9AeumLP9FC4HJHirbmCHgAJgC+j2n+B24BtaAN0vfkPVUBQT+BpDfmPYATAIfmUFtF5C3wmIMeVPffZMWzcPbLvDsOC8+L4nCWNkRiNox86XO9SKJmk/jEEctWAlk8q2KQEBK+Iq17CZGpWQVgSoC/Pubq0qhpIcuIOXUIyBl7J9LhK8+UHwua4+65gt5Cx0BK4pQMVMdAqtFBQaAW2AwZmWFvo+m3Jb7Q24LiYAMlhRqXFj6FOBcUwjwlSmzX31rhQr45inteSVQ2tabhbs+Aj9vdJoxTW8r5QAAAABJRU5ErkJggg==" />
            </button></a>
          <a class="navbar-brand fw-semibold" href="#"></a>
        </nav>
        <img src="HAPPY KIDS.png" alt="" height=540px>
      </div>
      <div class="col-5" style="background-color: #FEF9EF; height: 40rem;">
        <nav class="navbar">
          <a class="navbar-brand fw-semibold" href="#"></a>
          <a class="nav-link fs-5 mx-3 mt-2" style="color : #213555;" href="login.php"><button class="btn mt-1 py-2 px-2 fw-semibold text-center" style="background-color : #A2D2FF; font-size: 16px; width: 80px;"> Pasien </button>
          </a>
        </nav>
        <!-- <button class="btn mt-1 py-0 fw-semibold text-center" style="background-color : #FF865E; font-size: 16px; width: 80px;" data-bs-toggle="modal" data-bs-target="#exampleBatal"> Batalkan </button> -->
        <h1 class="mt-3 fw-bold">Hello Admin ✮⋆˙</h1>
        <p>Please enter your detail (Admin)</p>

        <div class="fst-italic">
          <?php
          //  tolong ini dibuat jadi gambar aja  
          if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
              echo "Login gagal! Username dan Password salah!";
            } else if ($_GET['pesan'] == "logout") {
              echo "Anda telah berhasil logout";
            } else if ($_GET['pesan'] == "belum_login") {
              echo "Anda harus login untuk mengakses halaman tersebut.";
            } else if ($_GET['pesan'] == "hapus") {
              echo "Anda telah menghapus akun tersebut";
            } else if ($_GET['pesan'] == "gamasuk") {
              echo "Silahkan Login untuk membuat Jadwal Kunjungan";
            }
          }
          ?>
        </div>

        <form action="check_status_admin.php" method="POST" class="m-5 p-5 pt-2 mt-0 mb-4">
          <div class="row mb-3">
            <label for="inputUsername3" class="col-sm-2 fw-medium col-form-label mt-2">Username</label>
            <input type="text" class="bg-transparent py-1" style="border: none; border-bottom: 2px solid #A2D2FF;" id="inputUsername3" name="username" required>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 fw-medium col-form-label">Password</label>
            <input type="password" class="bg-transparent py-1" id="inputPassword3" style="border: none; border-bottom: 2px solid #A2D2FF;" name="pass" required>
          </div>
          <button type="submit" class="btn mt-5 px-4 rounded-pill fw-semibold fs-5" style="background-color : #FEE440; width: 360px;">Log in</button>

        </form>
      </div>
    </div>

  </center>
</body>

</html>