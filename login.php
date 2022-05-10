<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logomrp.png" type="image/x-icon">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <!-- Vendor -->
    <script src="https://kit.fontawesome.com/331247cafb.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <title>MRP - Login</title>
</head>

<body id="body">

<!-- Notification Email And Password Wrong -->
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'failed')
            echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
        })
    </script>
    ";
    }
    ?>

    <!-- Header -->
    <section>
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
                <div class="container">
                    <img src="assets/img/logomrp.png" alt="logos-mrp" sizes="100" />
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href=""><i class="fa fa-home"></i> Home<span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="https://matrarodapiranti.com/"><i class="fa fa-search"></i> Website</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- Wreaper -->
    <section>
        <div class="wreaper container mt-4 my-15">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="https://matrarodapiranti.com/">matrarodapiranti.com</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Log-in</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <img src="assets/img/undraw_proud_coder_re_exuy.svg" alt="" id="img-login">
                        <div class="col">
                            <h3 id="tittle-login"><i class="btn btn-danger"></i> MRP - Login</h3>
                            <form action="assets/function/function_login.php" method="post" class="needs-validation" novalidate>
                                <div class="container">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email..." required>
                                    <div class="invalid-feedback">
                                        Please a valid Email.
                                    </div>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password..." required>
                                    <div class="invalid-feedback">
                                        Please a valid Password.
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class="fa-solid fa-right-to-bracket"></i> Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <div class="section-footer">
            <div class="container">
                <hr class="bg-light">
                Copyright &copy; <script>
                    document.write(new Date().getFullYear())
                </script> - <a href="https://matrarodapiranti.com" class="text-white"> PT. Matra Roda Piranti</a>
            </div>
        </div>
    </section>

    <!-- Validation Form Login -->
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