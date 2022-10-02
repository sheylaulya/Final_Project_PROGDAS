<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $pertanyaan = $_POST['pertanyaan'];
    $jawaban = $_POST['jawaban'];

    $sql = "UPDATE faq SET pertanyaan = '$pertanyaan', jawaban = '$jawaban' WHERE id='$id'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: faq.php');
    }else{
        header('Location: form-edit-faq.php?status=gagal');
    }
}
?>