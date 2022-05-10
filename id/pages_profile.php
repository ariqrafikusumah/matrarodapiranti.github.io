<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/logomrp.png" type="image/x-icon">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">


    <!-- Vendor -->
    <script src="https://kit.fontawesome.com/331247cafb.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <title>MRP - Home</title>
</head>

<body id="body">

    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:../../login.php?status=failed");
    }

    ?>

    <?php
    // Call Header -> Structure -> header.php
    include "structure/header.php";
    ?>

    <section class="wreaper">
        <div class="container">
            <div class="profile">
                <div class="card">
                    <div class="card-body">
                        <div class="row mr-5">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Profile Pictures" id="img-profile" width="345" height="345">
                            <div class="col ml-5 mt-5 mb-5">
                                <h1>PROFILE ACCOUNT</h1>
                                <b><label for="email">Email Account</label></b>
                                <input class="form-control" type="email" readonly name="email" id="email" value="<?php echo $_SESSION['email']; ?>">
                                <b><label for="name">Name Account</label></b>
                                <input class="form-control" type="name" readonly name="name" id="name" value="<?php echo $_SESSION['nama'] ?>">
                                <b><label for="department">Department</label></b>
                                <input class="form-control" type="text" readonly name="department" id="department" value="<?php echo $_SESSION['department'] ?>">
                                <b><label for="email">Level</label></b>
                                <input class="form-control" type="level" readonly name="level" id="level" value="<?php echo $_SESSION['level'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include "structure/footer.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>