<?php
require_once "../_config/config.php";

if(isset($_SESSION['username'])) {
  echo "<script>window.location='".base_url()."';</script>";
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">   
    <link rel="icon" href="../_assets/logo.png">
</head>

<body>

<div id="wrapper">
<div class="container">
    <div align="center" style="margin-top:100px;"> 
        <?php
        if(isset($_POST['login'])){
                $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                $pass = trim(trim(mysqli_real_escape_string($con, $_POST['pass'])));
            $sql_login = mysqli_query($con, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($con));
            if(mysqli_num_rows($sql_login) > 0 ) {
                $_SESSION['user'] = $user;
                echo "<script>window.location='".base_url('main/admin.php')."';</script>";
            } else { ?>
                <div class="col-lg-5 col-lg-offset-4">
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <a href="" class="close" data-dismiss="alert" arial-label="close">&times;</a>
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <strong>Login Gagal !</strong> Username / Password Salah
                    </div>
                </div><br><br><br><br><br><br>
            <?php
            }
        }
        ?>
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container"><div class="container"><div class="container">
<div class="container"><div class="container">
<section id="contentSection">
<div class="col-lg-5">

<div class="panel panel-default">

  <div class="panel-heading">insert your account</div>

  <div class="panel-body">

	<div class="row">

	  <div class="col-lg-1"></div>

	  <div class="col-lg-10">  
        <h2>LOGIN</h2>
        <br>
        <form action="" method="post" class="navbar-form">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
            </div><br><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="pass" class="form-control" placeholder="Password" required>
            </div><br><br>
            <div class="input-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login  ">
            </div>
        </form>
        <br>
        <br>
        Don't have account <a href="register.php">register</a> 
    </div>
</div>
</div>
<script src=<?=base_url('_assets/js/jquery.js')?>></script>
<script src=<?=base_url('_assets/js/bootstrap.min.js')?>></script>
</body>
</html>
<?php
}
?>
