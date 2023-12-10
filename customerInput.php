<?php
    include'connect.php';

    //$query = "select * from tb_customer";
    //$sql = mysqli_query($conn, $query);
    
    ?>

<!DOCTYPE html>
        <?php
            $idC = '';
            $nameC = '';
            $jobC = '';
            $homeC = '';

            if(isset($_GET['ubah'])){
                $idC = $_GET['ubah'];
            
                $query = "select * from tb_customer where id_customer = '$idC';";
                $sql = mysqli_query($conn, $query);
                $result = mysqli_fetch_assoc($sql);

                $nameC = $result['nama'];
                $jobC = $result['pekerjaan'];
                $homeC = $result['alamat'];
                //var_dump($result);

                //die();
        }
        ?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Customer Input</title>
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
                <img src="img/Tubes.png" class="brand" alt="">
                <a href="#" class="contactUs">Contact Us</a>
            </a>
        </div>
    </nav>

    <!--From Input-->
    <div class="container mt-5">
        <p class="h1 text-center mb-4">Silahkan Mengisi Data Customer</p>
        <form action="proses.php" method="POST">
            <input type="hidden" value="<?php echo $idC; ?>" name="">
        <div class="mb-3">
            <label for="..." class="form-label"><strong>ID</strong></label>
            <input required type="number" id="..." name="id" class="form-control" placeholder="Contoh:123" value="<?php echo ($idC); ?>">
            <div class="form-text">Masukan 0-3 Character</div>
        </div>
        <div class="mb-3">
            <label for="..." class="form-label"><strong>Nama</strong></label>
            <input required type="text" id="..." name="nama" class="form-control" placeholder="Masukan Nama Anda" value="<?php echo $nameC; ?>">
        </div>
        <div class="mb-3">
            <label for="..." class="form-label"><strong>Pekerjaan</strong></label>
            <select required id="..." name="pekerjaan" class="form-select">
                <option value="">Pilih Pekerjaan Anda</option>
                <option <?php if($jobC == 'PNS'){echo "selected";} ?> value="PNS">PNS</option>
                <option <?php if($jobC == 'Swasta'){echo "selected";} ?> value="Swasta">Swasta</option>
                <option <?php if($jobC == 'Belum Bekerja'){echo "selected";} ?> value="Belum Bekerja">Belum Bekerja</option>
                <option <?php if($jobC == 'Lainnya'){echo "selected";} ?> value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="..." class="form-label"><strong>Alamat</strong></label>
            <input required type="text" id="..." name="alamat" class="form-control" placeholder="Masukan Alamat Anda" value="<?php echo $homeC; ?>">
        </div><?php
                if(isset($_GET['ubah'])){
            ?>
                <button href="customerTable.php" type="submit" value="edit" class="btn btn-primary mt-2 fa fa-paper-plane" id="..." name="submitData">
                    Edit Data
                </button>
            <?php  
                } else {
            ?>
                <button href="customerTable.php" type="submit" value="add" class="btn btn-primary mt-2 fa fa-paper-plane" id="..." name="submitData">
                    Kirim Data
                </button>
            <?php
                }
            ?>
        
        <a href="customerTable.php" class="btn btn-danger mt-2 fa fa-undo" id="..." name="...">Batal</a>
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