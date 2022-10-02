<?php 

include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
$sumber = $_FILES['gambar']['tmp_name'];
    $target = 'gambar/';
    $nama_gambar = $_FILES['gambar']['name'];

$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

if($pindah){
$query = "INSERT INTO rekomen VALUES('$id','$nama','$nama_gambar','$harga','$diskon')";
$hasil = mysqli_query($connect, $query);
}

if($hasil)
{ header("location:recommendation.php");

}
else{
    echo "Penyimpanan gagal";
} 
?>