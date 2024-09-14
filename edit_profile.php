<!-- Nanti tambahin navbar ya
jangan lupa benerin fw fs nya 
trs tolong buat kotaknya fit in di satu display   -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@200&family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            background-color: #A2D2FF;
            font-family: 'Catamaran';
            font-family: 'Poppins';
        }

        #edit {
            background-color: #FEF9EF;
            height: 46rem;
        }
    </style>
</head>

<body>
    <?php
    include 'connect_pemweb.php';
    $pasienID = $_GET['pasienID'];

    $query = mysqli_query($connect, "SELECT * FROM pasien WHERE pasienID='$pasienID'");
    $data = mysqli_fetch_array($query);
    ?>
    <div class="row">
        <div class="col-7 align-middle mt-5">
            <center>
                <img src="HAPPY KIDS.png" alt="" height=540px>
            </center>
        </div>
        <div class="col-5" id="edit">
            <h1 class="mt-4 fw-bold text-center">Edit Account</h1>
            <p class="text-center fs-6 fw-light">Enter your details below to edit your account</p>

            <form class="mx-3" action="proses_edit.php" method="POST">
                <label class="ms-5 mt-4" for="first_name">First Name</label>
                <label for="last_name" class="px-5" style="margin-left: 6.5rem;">Last Name</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" name="first_name" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" value="<?php echo $data['first_name'] ?>" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="text" name="last_name" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" value="<?php echo $data['last_name'] ?>" required>
                <br>
                <label class="ms-5 mt-4" for="birth_date">Date of Birth</label>
                <label for="contact" class="px-5" style="margin-left: 5.5rem;">Phone Number</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="date" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="birth_date" value="<?php echo $data['birth_date'] ?>" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="number" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" name="contact" value="<?php echo $data['contact'] ?>" required>
                <br>
                <label for="riwayat" class="ms-5 mt-4">Riwayat Penyakit</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="text" style="width: 83%; border: none; border-bottom: 1px solid #A2D2FF;" name="riwayat" value="<?php echo $data['riwayat'] ?>">
                <br>
                <label class="ms-5 mt-4" for="address">Address</label> <br>
                <textarea class="fw-light ms-5 bg-transparent py-1" style="border: none; border-bottom: 1px solid #A2D2FF" name="address" cols="55" rows="2" value="<?php echo $data['address'] ?>" required><?php echo $data['address'] ?></textarea>
                <br>
                <label class="ms-5 mt-4" for="email">Email</label>
                <label for="password" class="px-5" style="margin-left: 8.5rem;">Password</label> <br>
                <input class="fw-light ms-5 bg-transparent py-1" type="email" name="email" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" value="<?php echo $data['email'] ?>" required>
                <input class="fw-light ms-3 bg-transparent py-1" type="password" name="password" style="width: 39%; border: none; border-bottom: 1px solid #A2D2FF;" value="<?php echo $data['password'] ?>" required>
                <br>

                <center>
                    <a href="my_profile.php"><button class="mt-5 mb-5 rounded-pill border border-0 py-2 ms-3 fw-medium" style="width: 39%; background-color: #FF865E ;" type="button" name="cancel">Cancel</button></a>
                    <button class="mt-5 mb-5 rounded-pill border border-0 py-2 ms-3 fw-medium" style="width: 39%; background-color: #A2D2FF ;" type="submit" name="edit_profile">Edit</button>
                </center>

                <input type="hidden" name="pasienID" value="<?php echo $data['pasienID'] ?>"> <br>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>