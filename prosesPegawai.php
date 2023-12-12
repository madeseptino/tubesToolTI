<?php
include 'connect.php';

if (isset($_POST['submitData'])) {
    $nameC = $_POST['nama_pegawai'];
    $homeC = $_POST['alamat'];

    $query = "INSERT INTO tb_pegawai (nama_pegawai, alamat) VALUES ('$nameC', '$homeC');";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: pegawaiTable.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['update'])) {
    $idC = $_POST['id_Pegawai'];
    $nameC = $_POST['nama_pegawai'];
    $homeC = $_POST['alamat'];

    $query = "UPDATE tb_pegawai SET nama_pegawai='$nameC', alamat='$homeC' WHERE id_pegawai='$idC';";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: pegawaiTable.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_GET['hapus'])) {
    $idC = $_GET['hapus'];
    $query = "DELETE FROM tb_pegawai WHERE id_pegawai = '$idC'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: pegawaiTable.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
