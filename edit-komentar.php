<?php
  include 'header-artikel.php';
  include 'rf-admin/controller/database.php';
  ?> 
  <head>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>POST</span></h2>
            
            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12">

                <?php
                $artikel_id = $mysqli->real_escape_string($_GET['artikel_id']);
                $q_komentar = $mysqli->query("SELECT * FROM komentar WHERE artikel_id = '$artikel_id'");
                while ($komentar = $q_komentar->fetch_array()) {
              ?>

                <div style="background-color: #d8d8d8;border-radius: 3px;padding: 10px;">

                  <label class="label-control"><u><?php echo $komentar['nama']; ?></u></label>
                    <code><?php echo $komentar['email']; ?></code>

                    <div>
                      <i><?php echo date('l, d F Y', strtotime($komentar['tanggal'])); ?></i>
                    </div>

                    <div style="margin-top: 10px;"></div> 

                    <p style="text-align: justify;"><?php echo $komentar['komentar']; ?></p><br>
              </div>

                <div style="margin-bottom: 5px;">&nbsp;</div>

                <?php } ?>
                <div class="col-lg-12">

              <div class="panel panel-default">

                <div class="panel-heading">POST COMMENT</div>

                <div class="panel-body">

                  <div class="row">

                    <div class="col-lg-1"></div>

                    <div class="col-lg-10">

                      <form class="form-horizontal" action="edit.php" method="POST">
                        <div class="form-group">
                          <input class="form-control" type="text" name="nama"><?php echo $komentar['nama']?></input>
                        </div>

                        <div class="form-group">
                          <input class="form-control input-md" type="text"  name="email"  value="<?php echo $komentar['email'] ?>"/>
                        </div>

                        <div class="form-group">
                          <textarea class="form-control input-md" type="text" name="komentar"  value="<?php echo $komentar['komentar'] ?>"/></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary pull-right" value="<?php echo $artikel_id ?>"/>SUBMIT</button>

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
      </div>
      </div>
    </section>

    <?php include 'footer-artikel.php'; ?>