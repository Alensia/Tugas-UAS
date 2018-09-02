<?php include_once('../_header.php');	
include_once '../_config/koneksi.php';
error_reporting(E_ALL);
$title= 'Tambah';
if (isset($_POST['submit'])) {
	$judul=$_POST['title'];
	$deskripsi=$_POST['deskripsi'];
	$content=$_POST['content'];
	$tanggal=$_POST['tanggal'];

	$sql='INSERT INTO berita (title, deskripsi, content, tanggal)';
	$sql .="VALUE ('{$judul}', '{$deskripsi}', '{$content}', '{$tanggal}')";
	$result=mysqli_query($conn, $sql);
	if ( !$result) {
	 	die(mysqli_error($conn));
	 } 
	 header('location:../artikel.php');
}
?>
<section id="contentSection">
<div class="col-lg-12">

<div class="panel panel-default">

  <div class="panel-heading">ADD ARTIKEL</div>

  <div class="panel-body">

	<div class="row">

	  <div class="col-lg-1"></div>

	  <div class="col-lg-10">

		<form method="post" action="admin.php" enctype="multipart/form-data">
			<div class="form group">
			<input class="form-control input-md" type="text" name="title" placeholder="Judul Artikel " />
			</div>
			<div class="form group">
			<textarea class="form-control input-md" name="content" cols="80" rows="20" placeholder="isi berita"></textarea> 
			</div>
			<div class="form group">
			<input class="form-control input-md" type="date" name="tanggal">
			</div>
			<div class="submit">
			<input type="submit" class="btn btn-large "name="submit" value="Simpan" />
			</div>
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
<?php include_once('../_footer.php'); ?>