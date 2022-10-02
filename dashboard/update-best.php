<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $upload = $_FILES['upload']['name'];
    
    if($upload != "") {
      $ekstensi_diperbolehkan = array('png','jpg'); 
      $x = explode('.', $upload); 
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['upload']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $nama_gambar_baru = $angka_acak.'-'.$upload; 
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                    move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 

                     $query  = "UPDATE bestseller SET nama = '$nama', upload = '$nama_gambar_baru',harga= '$harga', deskripsi= '$deskripsi' ";
                      $query .= "WHERE id = '$id'";
                      $result = mysqli_query($connect, $query);
                      if(!$result){
                          die ("Query gagal dijalankan: ".mysqli_errno($connect).
                               " - ".mysqli_error($connect));
                      } else {
                        echo "<script>alert('Data berhasil diubah.');window.location='best.php';</script>";
                      }
                } else {  
                    move_uploaded_file('gambar/'.$upload);   
                    $query  = "UPDATE bestseller SET nama = '$nama', upload = '$upload',harga= '$harga', deskripsi= '$deskripsi' ";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($connect, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($connect).
                             " - ".mysqli_error($connect));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='best.php';</script>";
                    }
                }
      } else {
        $query  = "UPDATE bestseller SET nama = '$nama', upload = '$nama_gambar_baru',harga= '$harga', deskripsi= '$deskripsi' ";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($connect).
                               " - ".mysqli_error($connect));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='best.php';</script>";
        }
      }
    }
?>