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
    include '../assets/conf/config.php';
    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:../../login.php?status=failed");
    } else if (isset($_GET['status'])) {
        if ($_GET['status'] == 'succes')
            echo "
        <script> 
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
          
          Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
          })
        </script>
        ";
    }

    ?>

    <?php
    // Call Header -> Structure -> header.php
    include "structure/header.php";
    ?>
    <div class="container my-5 mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="https://matrarodapiranti.com/">matrarodapiranti.com</a></li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>
    </div>
    <section class="wreaper">
        <div class="wreaper">
            <form action="../assets/function/function_upload.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <img src="../assets/img/undraw_os_upgrade_re_r0qa.svg" alt="" id="img-user-upload">
                                <div class="col">
                                    <h3 id="tittle-login"><i class="btn btn-danger"></i> Order Equipment</h3>
                                    <hr>
                                    <b><label for="email">E-mail :</label></b>
                                    <i class="fa fa-mail"></i><input type="email" class="form-control-plaintext" name="email" id="email" value="<?php echo $_SESSION['email']; ?>" readonly>
                                    <hr>
                                    <b><label for="file"> Files Upload Here :</label></b>
                                    <input type="file" class="form-control" name="file1" id="file" required>
                                    <div class="caption text-secondary" for="file">
                                        File format : .xlm , .pdf , .docs , .xlms , .doc
                                    </div>
                                    <hr>
                                    <b><label for="date">Date :</label></b>
                                    <input type="date" class="form-control" name="date" id="date" required>
                                    <div class="caption text-secondary" for="file">
                                        Format : days/month/years
                                    </div>
                                    <br>
                                    <input type="text" class="form-control" name="input_id" id="input_id" value="" hidden>
                                    <input type="text" class="form-control" name="user_id" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" hidden>
                                    <input type="text" class="form-control" name="status_1" id="status_1" value="waiting" hidden>
                                    <input type="text" class="form-control" name="status_2" id="status_2" value="waiting" hidden>
                                    <input type="text" class="form-control" name="status_3" id="status_3" value="waiting" hidden>
                                    <input type="text" class="form-control" name="status_4" id="status_4" value="waiting" hidden>
                                    <input type="text" class="form-control" name="status_5" id="status_5" value="waiting" hidden>
                                    <input type="text" class="form-control" name="status_6" id="status_6" value="waiting" hidden>
                                    <input type="text" class="form-control" name="status_7" id="status_7" value="waiting" hidden>
                                    <br>
                                    <button type="submit" class="btn btn-danger" name="submit" id="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php
    include "structure/footer.php";
    ?>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>