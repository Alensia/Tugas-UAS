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
                  $content  = $mysqli->query("SELECT * FROM berita ORDER BY artikel_id DESC");
                  while ($c_content = $content->fetch_array()) {
                ?>

                <div style="background-color: #d8d8d8;border-radius: 3px;padding: 10px;">

                  <a href="view-artikel.php?artikel_id=<?php echo $c_content['artikel_id']; ?>">
                    <h3><?php echo $c_content['title']; ?></h3>
                  </a>

                  <code><?php echo date('l, d F Y', strtotime($c_content['tanggal'])); ?></code>

                  <div style="margin-bottom: 5px;">&nbsp;</div>

                  <p style="text-align: justify;"><?php echo substr($c_content['content'],0, 250); ?></p>
                  <td>
                        <a class="btn btn-primary" onclick="return confirm('Yakin akan menghapus data?');"
                          href="delete-artikel.php?artikel_id=<?php echo $c_content['artikel_id'];?>">Delete</a>

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