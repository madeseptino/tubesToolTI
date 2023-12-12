<?php
    include'connect.php';

    $query = "select * from tb_pegawai";
    $sql = mysqli_query($conn, $query);
    if (!$sql) {
        die("Query failed: " . mysqli_error($conn));
    }
    $result = mysqli_fetch_assoc($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pegawai</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    </style>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar nbg-body-tertiary mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" class="brand" alt="">
                <a href="#" class="no-decoration contactUs">Contact Us</a>
            </a>
        </div>
    </nav>

    <!--Customer Table-->
    <div class="container mt-5 text-center">
        <h1>Pegawai</h1>
        <figcaption class="blockquote-footer mt-1">
            Halaman Yang Berhubungan Dengan Pegawai...
        </figcaption>
        <div>
            <a href="pegawaiInput.php" type="button" class="btn btn-primary mb-3 ">
                 <i class="fa fa-user-plus" aria-hidden="true"></i> Tambah Data
            </a>
        </div>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th class="text-center">Ubah/Hapus</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($result = mysqli_fetch_assoc($sql)){
            ?>
                    <tr>
                        <td><center>
                            <?php echo $result['nama_pegawai']; ?>
                        </td></center>
                        <td>
                            <?php echo $result['alamat']; ?>
                        </td>
                        <td class="text-center">
                            <a href="pegawaiInput.php?ubah=<?php echo $result['id_pegawai']; ?>" type="submit" class="btn btn-success" name="edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="prosesPegawai.php?hapus=<?php echo $result['id_pegawai']; ?>" type="submit" class="btn btn-danger" name="delete">
                                <i class="fa fa-trash"></i>
                            </a>
                       </td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    <br>
    <!--Footer-->
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
  </body>
</html>