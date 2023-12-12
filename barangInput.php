<?php
    include'connect.php';
?>

<!DOCTYPE html>
        <?php
            $idC = '';
            $nameC = '';
            $jenisC = '';
            $kapasitasC = '';

            if(isset($_GET['ubah'])){
                $idC = $_GET['ubah'];
                
                $query = "select * from tb_tenda where id_tenda = '$idC';";
                $sql = mysqli_query($conn, $query);
                $result = mysqli_fetch_assoc($sql);

                $nameC = $result['nama_tenda'];
                $jenisC = $result['jenis_tenda'];
                $kapasitasC = $result['kapasitas_tenda'];
        }
        ?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Barang Input</title>
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

    <!--From Input-->
    <div class="container mt-5">
        <p class="h1 text-center mb-4">Silahkan Mengisi Data Barang</p>
        <form action="prosesBarang.php" method="POST">
        <input type="hidden" value="<?php echo $idC; ?>" name="id_tenda">
        <div class="mb-3">
            <label for="..." class="form-label"><strong>Nama Tenda</strong></label>
            <input required type="text" id="..." name="nama_tenda" class="form-control" placeholder="Masukan Nama Tenda" value="<?php echo $nameC; ?>">
        </div>
        <div class="mb-3">
            <label for="..." class="form-label"><strong>Jenis Tenda</strong></label>
            <input required type="text" id="..." name="jenis_tenda" class="form-control" placeholder="Masukan Jenis Tenda" value="<?php echo $jenisC; ?>">
        </div>
        <div class="mb-3">
            <label for="..." class="form-label"><strong>Kapasitas Tenda</strong></label>
            <input required type="text" id="..." name="kapasitas_tenda" class="form-control" placeholder="Masukan Kapasitas Tenda" value="<?php echo $kapasitasC; ?>">
        </div>
        <?php
    if(isset($_GET['ubah'])){
    ?>
        <button type="submit" value="edit" class="btn btn-primary mt-2 fa fa-paper-plane" name="update">
            Edit Data
        </button>
    <?php  
    } else {
    ?>
        <button type="submit" value="add" class="btn btn-primary mt-2 fa fa-paper-plane" name="submitData">
            Kirim Data
        </button>
    <?php
    }
    ?>

    <a href="barangTable.php" class="btn btn-danger mt-2 fa fa-undo" id="..." name="...">Batal</a>
</form>

    </div>
    <br>
    <br>
    <br>
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
</body>
</html>