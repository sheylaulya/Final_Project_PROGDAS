<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nana'];
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];
    $gambar = $_POST['gambar'];

    $sql = "INSERT INTO rekomen VALUES ('$id', '$nama', '$harga', '$diskon', '$gambar')";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: recommendation.php');
    }else{
        header('Location: create-rekom.php?status=gagal');
    }
}
?>
