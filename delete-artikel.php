<?php
include_once '_config/koneksi.php';
$artikel_id=$_GET['artikel_id'];
$sql="DELETE FROM berita WHERE artikel_id='{$artikel_id}'";
$result= mysqli_query($conn, $sql);
header('location: option-artikel.php');
?>