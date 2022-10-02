<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $upload = $_FILES['upload']['name'];

    //cek dulu jika merubah gambar produk jalankan coding ini
    if($upload != "") {
      $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $x = explode('.', $upload); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['upload']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $nama_gambar_baru = $angka_acak.'-'.$upload; //menggabungkan angka acak dengan nama file sebenarnya
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                    move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                        
                      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                     $query  = "UPDATE bestseller SET nama = '$nama', upload = '$nama_gambar_baru',harga= '$harga', deskripsi= '$deskripsi' ";
                      $query .= "WHERE id = '$id'";
                      $result = mysqli_query($connect, $query);
                      // periska query apakah ada error
                      if(!$result){
                          die ("Query gagal dijalankan: ".mysqli_errno($connect).
                               " - ".mysqli_error($connect));
                      } else {
                        //tampil alert dan akan redirect ke halaman index.php
                        //silahkan ganti index.php sesuai halaman yang akan dituju
                        echo "<script>alert('Data berhasil diubah.');window.location='best.php';</script>";
                      }
                } else {  
                    move_uploaded_file('gambar/'.$upload);   
                    $query  = "UPDATE bestseller SET nama = '$nama', upload = '$upload',harga= '$harga', deskripsi= '$deskripsi' ";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($connect, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($connect).
                             " - ".mysqli_error($connect));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='best.php';</script>";
                    }
                }
      } else {
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE bestseller SET nama = '$nama', upload = '$nama_gambar_baru',harga= '$harga', deskripsi= '$deskripsi' ";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        // periska query apakah ada error
        if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($connect).
                               " - ".mysqli_error($connect));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
          //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil diubah.');window.location='best.php';</script>";
        }
      }
    }
?>