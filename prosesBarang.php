<?php
    include 'connect.php';
    
    //$idCus = $_POST['idC'];
    //$nameCus = $_POST['nameC'];
    //$jobCus = $_POST['jobC'];
    //$homeCus = $_POST['homeC'];

    //$query = mysqli_query($conn, "INSERT INTO tb_customer (id_customer, nama, pekerjaan, alamat) VALUES (null, '$idCus', '$nameCus', '$jobCus', '$homeCus')");
    //$sql = mysqli_query($conn, $query);
    //if($query){
    //    echo"berhasil hore";
    //}

    if (isset($_POST['submitData'])) {
        $idC = $_POST['id_tenda'];
        $nameC = $_POST['nama_tenda'];
        $jenisC = $_POST['jenis_tenda'];
        $capacityC = $_POST['kapasitas_tenda'];
    
        $query = "INSERT INTO tb_tenda (id_tenda, nama_tenda, jenis_tenda, kapasitas_tenda) VALUES ('$idC', '$nameC', '$jenisC', '$capacityC')";
        $result = mysqli_query($conn, $query);
    
        if ($result) {
            header("Location: customerTable.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['submitData'])) {
        if ($_POST['submitData'] == "add") {
            echo 'Tambah Data <a href="barangTable.php">[Home]</a>';
        } else if ($_POST['submitData'] == "edit") {
            echo 'Edit Data <a href="barangTable.php">[Home]</a>';
            //var_dump($_POST);
            $idC = $_POST['id_tenda'];
            $nameC = $_POST['nama_tenda'];
            $jenisC = $_POST['jenis_tenda'];
            $capacityC = $_POST['kapasitas_tenda'];

            $query = "UPDATE tb_tenda SET nama_tenda='$nameC', jenis_tenda='$jenisC', kapasitas_tenda='$capacityC' WHERE id_tenda='$idC';";

            $sql = mysqli_query($conn, $query);
        }
    }

    if (isset($_GET['hapus'])) {
        $idC = $_GET['hapus'];
        $query = "DELETE FROM tb_tenda WHERE id_tenda= '$idC'";
        $sql = mysqli_query($conn, $query);

        if($query){
            header("location: barangTable.php");
        } else {
            echo $query;
        }
    }
?>
