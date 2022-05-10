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

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <!-- Vendor -->
    <script src="https://kit.fontawesome.com/331247cafb.js" crossorigin="anonymous">
    </script>
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
    } elseif (isset($_GET['status'])){
        if ($_GET['status'] == "succes"){
            echo "
            <script>
            let timerInterval
            Swal.fire({
              title: 'Auto Saved Data!',
              html: 'I will close in <b></b> milliseconds.',
              timer: 2000,
              timerProgressBar: true,
              didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                  b.textContent = Swal.getTimerLeft()
                }, 100)
              },
              willClose: () => {
                clearInterval(timerInterval)
              }
            }).then((result) => {
              /* Read more about handling dismissals below */
              if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
              }
            }) 
            </script>";
        }
    }

    ?>

    <?php
    // Call Header -> Structure -> header.php
    include "structure/header.php";
    ?>
    <div class="container mt-5 my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="https://matrarodapiranti.com/">matrarodapiranti.com</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Input</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Data Input</h1>
                <hr></hr>
                <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Files Upload</th>
                            <th>Date Upload</th>
                            <th>Engineering/QC/Maintenance</th>
                            <th>PCD</th>
                            <th>Purchasing</th>
                            <th>Finance</th>
                            <th>General Manager</th>
                            <th>Receiving</th>
                            <th>Finishing</th>
                        </tr>
                    </thead>
                    <?php
                    include '../assets/conf/config.php';

                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_input");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo "B" . "-" . $no++ ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td>
                                    <?php
                                    if ($row['file1'] == "") {
                                        echo "<span class='badge badge-secondary text-light'>No File</span>";
                                    } else if ($row['file1']) {
                                        echo "<span class='badge badge-primary text-light'>Download</span>";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row['date']; ?></td>
                                <td class="text-center">
                                    <?php
                                    if ($row['status_1'] == "waiting") {
                                        echo "<span class='badge badge-danger text-light'>Waiting</span>";
                                    } else if ($row['status_1'] == "checked") {
                                        echo "<span class='badge badge-warning text-light'>Checked</span>";
                                    } else if ($row['status_1'] == "approved") {
                                        echo "<span class='badge badge-success text-light'>Approved</span>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if ($row['status_2'] == "waiting") {
                                        echo "<span class='badge badge-danger text-light'>Waiting</span>";
                                    } else if ($row['status_2'] == "checked") {
                                        echo "<span class='badge badge-warning text-light'>Checked</span>";
                                    } else if ($row['status_2'] == "approved") {
                                        echo "<span class='badge badge-success text-light'>Approved</span>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if ($row['status_3'] == "waiting") {
                                        echo "<span class='badge badge-danger text-light'>Waiting</span>";
                                    } else if ($row['status_3'] == "checked") {
                                        echo "<span class='badge badge-warning text-light'>Checked</span>";
                                    } else if ($row['status_3'] == "approved") {
                                        echo "<span class='badge badge-success text-light'>Approved</span>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if ($row['status_4'] == "waiting") {
                                        echo "<span class='badge badge-danger text-light'>Waiting</span>";
                                    } else if ($row['status_4'] == "checked") {
                                        echo "<span class='badge badge-warning text-light'>Checked</span>";
                                    } else if ($row['status_4'] == "approved") {
                                        echo "<span class='badge badge-success text-light'>Approved</span>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if ($row['status_5'] == "waiting") {
                                        echo "<span class='badge badge-danger text-light'>Waiting</span>";
                                    } else if ($row['status_5'] == "checked") {
                                        echo "<span class='badge badge-warning text-light'>Checked</span>";
                                    } else if ($row['status_5'] == "approved") {
                                        echo "<span class='badge badge-success text-light'>Approved</span>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if ($row['status_6'] == "waiting") {
                                        echo "<span class='badge badge-danger text-light'>Waiting</span>";
                                    } else if ($row['status_6'] == "checked") {
                                        echo "<span class='badge badge-warning text-light'>Checked</span>";
                                    } else if ($row['status_6'] == "approved") {
                                        echo "<span class='badge badge-success text-light'>Approved</span>";
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    if ($row['status_7'] == "waiting") {
                                        echo "<span class='badge badge-danger text-light'>Waiting</span>";
                                    } else if ($row['status_7'] == "checked") {
                                        echo "<span class='badge badge-warning text-light'>Checked</span>";
                                    } else if ($row['status_7'] == "approved") {
                                        echo "<span class='badge badge-success text-light'>Approved</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <?php
    // Call Footer -> Structure -> Footer.php
    include "structure/footer.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- DataTables -->
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <!-- JavaScript Data Tables -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>