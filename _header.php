<?php
require_once "_config/config.php";

// if(!isset($_SESSION['user'])) {
//     echo "<script>window.location='".base_url('auth/login.php')."';</script>";
// }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>My Blog</title>
        <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">   
        <link href="../_assets/css/simple-sidebar.css" rel="stylesheet">   
        <link rel="icon" href="../_assets/logo.png">
    </head>
        <body>
            <script src=<?=base_url('_assets/js/jquery.js')?>></script>
            <script src=<?=base_url('_assets/js/bootstrap.min.js')?>></script>
            <div id="wrapper">

<!-- Sidebar -->

<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
        <h3 style="color: white;">Welcome My Blog
        <br>
        <img src="../_assets/logo.png" width="200px"></li>
        </li><br><br><br><br><br><br>
        <li>
            <a href="<?=base_url('dashboard')?>"><i class="glyphicon glyphicon-dashboard"></i> <b> Dashboard</b></a>
        </li>
        <li>
            <a href="../artikel.php"><i class="glyphicon glyphicon-list-alt"></i> <b> Artikel</b></a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-phone"></i> Contact <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-profil"></i> Profil</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-facebook"></i> Facebook</a>
                    </li>
                 </ul>
        </li>
        <li class="active">
            <a href="../main/admin.php"><i class="glyphicon glyphicon-user"></i> Admin</a>
        </li>
        <li>
            <a href="<?=base_url('auth/logout.php')?>"><i class="glyphicon glyphicon-log-out"></i> Logout </a>
        </li>
        <li>
            <a href="../auth/logout.php"><i class="glyphicon glyphicon-book"></i> About </a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
