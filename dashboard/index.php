<?php include_once('../_header.php'); ?>

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Selamat Datang
                        <?php
                        if(isset($_SESSION['username'])) {
                            echo "";  
                            } 
                            error_reporting(0);
                        ?>
                        <?=$_SESSION['user'];?><br><br></h2>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu <i class="glyphicon glyphicon-th"></i> </a>
                    </div>
                </div>

                <!-- <img src="../img/edit2.jpg" width="200px">
                <br>
                <a href="#" class="btn"><i class="glyphicon glyphicon-facebook"> Tambah Barang </i></a> -->

<?php include_once('../_footer.php'); ?>