<?php
include 'connect.php';

if (isset($_POST['submitData'])) {
    $nameC = $_POST['nama'];
    $jobC = $_POST['pekerjaan'];
    $homeC = $_POST['alamat'];

    $query = "INSERT INTO tb_customer (nama, pekerjaan, alamat) VALUES ('$nameC', '$jobC', '$homeC');";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: customerTable.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['update'])) {
    $idC = $_POST['id_customer'];
    $nameC = $_POST['nama'];
    $jobC = $_POST['pekerjaan'];
    $homeC = $_POST['alamat'];

    $query = "UPDATE tb_customer SET nama='$nameC', pekerjaan='$jobC', alamat='$homeC' WHERE id_customer='$idC';";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: customerTable.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_GET['hapus'])) {
    $idC = $_GET['hapus'];
    $query = "DELETE FROM tb_customer WHERE id_customer = '$idC'";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: customerTable.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
