<?php  
include "head.php";
?>

<!-- Body -->

			<!-- Link Menu -->
			<?php include "menu.php"; ?>

			</div>
		<br />

		<div id="content">

		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-desktop"></i> Halaman Admin</h5>
			</div>
			<!-- /page title -->
<?php
$id_mhs = $_GET['id_mhs'];
$query = mysql_query("select * from calonbeasiswa where id_mhs='$id_mhs'");
$dataku = mysql_fetch_array($query);
?>
			<!-- Right labels -->
			<form class="form-horizontal" action="mahasiswa_edit.php" method="post" role="form">
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Calon Beasiswa</h6></div>
					<div class="panel-body">

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Id Calon Beasiswa:</label>
							<div class="col-sm-10">
								<input type="text" name="id_mhs" value="<?php echo $dataku['id_mhs']; ?>" class="form-control" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Mahasiswa:</label>
							<div class="col-sm-10">
								<input type="text" name="nama_mhs" value="<?php echo $dataku['nama_mhs']; ?>" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Jurusan:</label>
							<div class="col-sm-10">
								<input type="text" name="jurusan" value="<?php echo $dataku['jurusan']; ?>" required class="form-control">
							</div>
						</div>

					<div class="form-action text-right">
						<input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
						<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
					</div>

				</div>
			</div>
			</form>
<?php
if (isset($_POST['ubah'])) {
	$id_mhs = $_POST['id_mhs'];
	$nama_mhs = $_POST['nama_mhs'];
	$jurusan = $_POST['jurusan'];

	$query=mysql_query("UPDATE calonbeasiswa SET nama_mhs='$nama_mhs', jurusan='$jurusan' WHERE id_mhs='$id_mhs'") or die(mysql_error());
	if ($query) {
		echo "<script>window.alert('Calon Penerima Beasiswa berhasil diubah');
				window.location=(href='mahasiswa.php')</script>";
	}}
?>
		<!-- /right labels -->
<?php include "footer.php"; ?>