<?php 

include 'rf-admin/controller/database.php';

if (isset($_POST['input_komentar'])) {
	$artikel_id	= $mysqli->real_escape_string($_POST['input_komentar']);
	$nama		= $mysqli->real_escape_string($_POST['nama']);
	$email		= $mysqli->real_escape_string($_POST['email']);
	$komentar	= $mysqli->real_escape_string($_POST['komentar']);

	$input_komentar = $mysqli->query("INSERT INTO komentar VALUES (NULL, '$artikel_id', '$nama', '$email', '$komentar', CURRENT_TIMESTAMP)");

	echo $mysqli->error;

	if ($input_komentar === TRUE) {
		header('location:view-artikel.php?artikel_id='.$artikel_id);
	}

}