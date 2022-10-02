
<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location: recommendation.php');
}

$id= $_GET ['id'];

$sql = "DELETE FROM rekomen WHERE id = '$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location:recommendation.php'); 
}else{
    header('Location: delete-rekom.php?status=gagal');
}
?>