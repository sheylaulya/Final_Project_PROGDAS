<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE tampilan_awal SET nama = '$nama', gambar = '$gambar' WHERE id='$id'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: tampilan-awal.php');
    }else{
        header('Location: form-edit-tampilan.php?status=gagal');
    }
}
?>