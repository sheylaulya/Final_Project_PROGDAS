<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE rekomen SET nama = '$nama', harga = '$harga' ,diskon = '$diskon' 
    ,gambar = '$gambar' WHERE id='$id'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: recommendation.php');
    }else{
        header('Location: form-edit-recommendation.php?status=gagal');
    }
}
?>