
<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location: tampilan-awal.php');
}

$id= $_GET ['id'];

$sql = "DELETE FROM tampilan_awal WHERE id = '$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location:tampilan-awal.php'); 
}else{
    header('Location: delete-tampilan.php?status=gagal');
}
?>