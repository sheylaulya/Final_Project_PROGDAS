<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gambar = $_POST['gambar'];

    $sql = "INSERT INTO tampilan_awal VALUES ('$id', '$nama', '$gambar')";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: tampilan-awal.php');
    }else{
        header('Location: tampilan-awal.php?status=gagal');
    }
}
?>