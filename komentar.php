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
              $q_komentar = $mysqli->query("SELECT * FROM komentar ORDER BY artikel_id DESC");
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
                    <td>
                        <a class="btn btn-primary" onclick="return confirm('Yakin akan menghapus data?');"
                          href="delete-komentar.php?artikel_id=<?php echo $komentar['artikel_id'];?>">Delete</a>

                  </td>
              </div>

                <div style="margin-bottom: 5px;">&nbsp;</div>

                <?php } ?>

              </div>

            </div>
            
          </div>
        </div>
      </div>
      </div>
    </section>

    <?php include 'footer-artikel.php'; ?>