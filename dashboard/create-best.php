<?php 

include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$sumber = $_FILES['gambar']['tmp_name'];
    $target = 'gambar/';
    $nama_gambar = $_FILES['gambar']['name'];

$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

if($pindah){
$query = "INSERT INTO bestseller values('$id','$nama','$harga','$deskripsi','$nama_gambar')";
$hasil = mysqli_query($connect, $query);

}

if($hasil){ 
    header("location:best.php");
}else{
    echo "Penyimpanan gagal";
} 

?>