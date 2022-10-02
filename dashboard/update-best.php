<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE bestseller SET nama = '$nama', harga = '$harga' ,deskripsi = '$deskripsi' 
    ,gambar = '$gambar' WHERE id='$id'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: best.php');
    }else{
        header('Location: form-edit-best.php?status=gagal');
    }
}
?>