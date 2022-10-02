<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$upload = $_FILES['upload'];

if (strlen($upload)>0) {
    //upload Photo
    if (is_uploaded_file($_FILES['upload']['tmp_name'])) {
        move_uploaded_file ($_FILES['upload']['tmp_name'], "dashboard/gambar/".$upload);
    }
}
$query = "INSERT INTO bestseller values('$id','$nama','$harga','$deskripsi','$upload')";
$hasil = mysqli_query($connect, $query);

if($hasil){ 
    header("location:best.php");
}else{
    echo "Penyimpanan gagal";
} 

?>