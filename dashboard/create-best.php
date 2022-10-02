<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    $sql = "INSERT INTO bestseller VALUES ('$id', '$nama', '$harga', '$deskripsi', '$gambar')";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: best.php');
    }else{
        header('Location: best.php?status=gagal');
    }
}
?>
