<?php include 'header-artikel.php'; ?>
<?php include_once '../_config/koneksi.php';
if(!isset($_SESSION['user'])) {
	   echo "<script>window.location='".base_url('auth/login.php')."';</script>";
     }
?>
<div class="col-lg-12">

              <div class="panel panel-default">

                <div class="panel-heading">POST ARTIKEL</div>

                <div class="panel-body">

                  <div class="row">

                    <div class="col-lg-1"></div>

                    <div class="col-lg-10">

                      <form class="form-horizontal" action="input-komentar.php" method="POST">

                        <div class="form-group">
                          <input class="form-control input-md" type="text" placeholder="Nama" name="nama" required="true">
                        </div>

                        <div class="form-group">
                          <input class="form-control input-md" type="text" placeholder="Email" name="email" required="true">
                        </div>

                        <div class="form-group">
                          <textarea class="form-control input-md" type="text" placeholder="komentar" name="komentar" required="true"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary pull-right" value="<?php echo $artikel_id; ?>" name="input_komentar">SUBMIT</button>

                      </form>

                      <div class="col-lg-1"></div>

                    </div>

                  </div>
                  
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

  </section>

  <?php include 'footer-artikel.php'; ?>