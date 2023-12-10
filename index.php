<?php
    include'connect.php';

    $query = "select * from tb_customer";
    $sql = mysqli_query($conn, $query);
    //var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .mainNavbar{
            background-color: rgb(40, 40, 40);
        }
        .brand{
            width: 180px;
            position: relative;
        }
        .contactUs{
            color: white;
            position: absolute;
            right: 30px;
        }
        .box{
            padding : 30px;
            background : #000;
            margin : 10px 0px;
            text-align : center;
        }
        .no-decoration{
            text-decoration : none;
        }
    </style>
</head>
<body>               
    <nav class="navbar nbg-body-tertiary mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/Tubes.png" class="brand" alt="">
                <a href="#" class="no-decoration contactUs">Contact Us</a>
            </a>
        </div>
    </nav>
    <section class="jumbotron text-center mt-5">
        <img src="img/pp.png" alt="" width="100px" class=" rounded-circle">
        <h5 class="mt-3">Your Name</h5>
    </section>

<section class="p-5">
    <div class="container mt-5">
        <div class="row text-center g-4">
                <div class="col-md-6 col-lg-3 col-xl-4">
                    <div class="card bg-danger text-light">
                        <div class="card-body text-centre">
                            <img src="img/cst.png" width="50px">
                            <h4 class="card-tittle mb-2">Customer</h4>
                            <a href="customerTable.php" class="no-decoration btn btn-light">ADD</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-4">
                    <div class="card bg-warning text-light">
                        <div class="card-body text-centre">
                            <img src="img/pgw.png" width="50px">
                            <h4 class="card-tittle mb-2">Pegawai</h4>
                            <a href="" class="no-decoration btn btn-light">ADD</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-4">
                    <div class="card bg-success text-light">
                        <div class="card-body text-centre">
                            <img src="img/brg.png" width="50px">
                            <h4 class="card-tittle mb-2">Barang</h4>
                            <a href="" class="no-decoration btn btn-light">ADD</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-6">
                    <div class="card bg-primary text-light">
                        <div class="card-body text-centre">
                            <img src="img/trk.png" width="50px">
                            <h4 class="card-tittle mb-2">Transaksi</h4>
                            <a href="" class="no-decoration btn btn-light">ADD</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-6">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-centre">
                            <img src="img/kmb.png" width="50px">
                            <h4 class="card-tittle mb-2">Pengembalian</h4>
                            <a href="" class="no-decoration btn btn-light">ADD</a>
                        </div>
                    </div>
                </div>             
        </div>
    </div>
</section>

<footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Alamat</h5>
                    <p>Jimbaran</p>
                </div>
                <div class="col-md-6">
                    <h5>Kontak</h5>
                    <p>Email: sewatenda@gmail.com</p>
                    <p>No. Telp: +62 123456789</p>
                </div>
            </div>
        </div>
        <p class="mt-3">&copy; 2023 Sewa Tenda. All Rights Reserved.</p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>