<?php
include_once '_config/koneksi.php';
$artikel_id=$_GET['artikel_id'];
$sql="DELETE FROM komentar WHERE artikel_id='{$artikel_id}'";
$result= mysqli_query($conn, $sql);
header('location: komentar.php');
?>