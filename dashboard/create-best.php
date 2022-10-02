<?php

include 'koneksi.php';

if(isset($_POST['simpan'])){
    
$id = $_POST['id'];
$nama = $_POST['nama'];
$upload = $_FILES['upload']['name'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];


if($upload != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); 
    $x = explode('.', $upload); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['upload']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$upload; //menggabungkan angka acak dengan nama file sebenarnya
          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "INSERT INTO bestseller VALUES ('$id', '$nama','$nama_gambar_baru','$harga', '$deskripsi')";
                    $result = mysqli_query($connect, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($connect).
                             " - ".mysqli_error($connect));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='best.php';</script>";
                    }
  
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah-data-best.php';</script>";
              }
  } else {
     $query = "INSERT INTO bestseller VALUES ('$id', '$nama',null,'$harga', '$deskripsi')";
                    $result = mysqli_query($connect, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($connect).
                             " - ".mysqli_error($connect));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='best.php';</script>";
                    }
  }
  
}
?>