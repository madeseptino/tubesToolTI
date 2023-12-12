<?php
    include 'connect.php';
    
    //$idCus = $_POST['idC'];
    //$nameCus = $_POST['nameC'];
    //$jobCus = $_POST['jobC'];
    //$homeCus = $_POST['homeC'];

    //$query = mysqli_query($conn, "INSERT INTO tb_pegawai (id_pegawai, nama, pekerjaan, alamat) VALUES (null, '$idCus', '$nameCus', '$jobCus', '$homeCus')");
    //$sql = mysqli_query($conn, $query);
    //if($query){
    //    echo"berhasil hore";
    //}

    if (isset($_POST['submitData'])) {
        $idC = $_POST['id'];
        $nameC = $_POST['nama'];
        $homeC = $_POST['alamat'];
    
        $query = "INSERT INTO tb_pegawai (id_pegawai, nama_pegawai, alamat) VALUES ('$idC', '$nameC', '$homeC')";
        $result = mysqli_query($conn, $query);
    
        if ($result) {
            header("Location: pegawaiTable.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['submitData'])) {
        if ($_POST['submitData'] == "add") {
            echo 'Tambah Data <a href="pegawaiTable.php">[Home]</a>';
        } else if ($_POST['submitData'] == "edit") {
            echo 'Edit Data <a href="pegawaiTable.php">[Home]</a>';
            //var_dump($_POST);
            $idC = $_POST['id'];
            $nameC = $_POST['nama'];
            $homeC = $_POST['alamat'];

            $query = "UPDATE tb_pegawai SET nama_pegawai='$nameC', alamat='$homeC' WHERE id_pegawai='$idC';";

            $sql = mysqli_query($conn, $query);
        }
    }

    if (isset($_GET['hapus'])) {
        $idC = $_GET['hapus'];
        $query = "DELETE FROM tb_pegawai WHERE id_pegawai = '$idC'";
        $sql = mysqli_query($conn, $query);

        if($query){
            header("location: pegawaiTable.php");
        } else {
            echo $query;
        }
    }
?>
