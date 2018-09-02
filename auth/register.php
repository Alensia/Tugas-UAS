<?php 
include_once '../_config/koneksi.php';
$error = null;
$title = 'Data User';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO user (username, password )";
    $sql .= "VALUE ('{$username}', '{$password}')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
    die(mysqli_error($conn));
    }

    echo $sql;
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">   
    <link rel="icon" href="../_assets/logo.png">
</head>

<body>
<div style = "margin-bottom : 10px;">   
<div id="wrapper">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container"><div class="container"><div class="container"><div class="container">
<!-- <div class="container"><div class="container"><div class="container"><div class="container"><div class="container"> -->
<form action="" method="post" class="navbar-form">
<br><br><br><br><br>
<section id="contentSection">
<div class="col-lg-5">

<div class="panel panel-default">

  <div class="panel-heading">create your account</div>

  <div class="panel-body">

	<div class="row">

	  <div class="col-lg-1"></div>

	  <div class="col-lg-10">
<h1>SIGNUP</h1>
<br><br>
<!-- <div class="container"><div class="container"> -->
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div><br><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div><br><br>
            <div class="submit">
            <input type="submit" class="btn btn-large" name="submit" value="Simpan" />
            <br><br>
            Have Account <a href="login.php">Login</a> 
            <!-- </div></div></div></div></div></div> -->
</form><br>
<script src=<?=base_url('_assets/js/jquery.js')?>></script>
<script src=<?=base_url('_assets/js/bootstrap.min.js')?>></script>
</body>
</html>
