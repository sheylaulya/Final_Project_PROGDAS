
<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location: best.php');
}

$id= $_GET ['id'];

$sql = "DELETE FROM bestseller WHERE id = '$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location:best.php'); 
}else{
    header('Location: delete-best.php?status=gagal');
}
?>