<?php
include 'connect.php';

if (isset($_POST['submitData'])) {
    $nameC = $_POST['nama_tenda'];
    $jenisC = $_POST['jenis_tenda'];
    $capacityC = $_POST['kapasitas_tenda'];

    $query = "INSERT INTO tb_tenda (nama_tenda, jenis_tenda, kapasitas_tenda) VALUES ('$nameC', '$jenisC', '$capacityC');";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: barangTable.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['update'])) {
    $idC = $_POST['id_tenda'];
    $nameC = $_POST['nama_tenda'];
    $jenisC = $_POST['jenis_tenda'];
    $capacityC = $_POST['kapasitas_tenda'];

    $query = "UPDATE tb_tenda SET nama_tenda='$nameC', jenis_tenda='$jenisC', kapasitas_tenda='$capacityC' WHERE id_tenda='$idC';";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: barangTable.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_GET['hapus'])) {
    $idC = $_GET['hapus'];
    $query = "DELETE FROM tb_tenda WHERE id_tenda = '$idC'";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: barangTable.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
