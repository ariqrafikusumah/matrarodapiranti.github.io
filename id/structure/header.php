<!-- Header -->
<section>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
            <div class="container">
                <img src="../assets/img/logomrp.png" alt="logos-mrp" sizes="100" />
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="pages_user.php"><span class="sr-only">(current)</span></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> <?php echo $_SESSION['email']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="pages_profile.php"><i class="fa-solid fa-id-card-clip"></i> Profile</a>
                                <a class="dropdown-item" href="pages_user.php"><i class="fa-solid fa-upload"></i> Order Equipment</a>
                                <a class="dropdown-item" href="table_native.php"><i class="fa-solid fa-file"></i> Data-Tables</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="../assets/function/function_logout.php"><i class="fa-solid fa-power-off"></i> Log-out</a>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>