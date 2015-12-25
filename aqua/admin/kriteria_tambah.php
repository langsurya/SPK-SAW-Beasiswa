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

			<!-- Right labels -->
			<form class="form-horizontal" action="kriteria_tambah.php" method="post" role="form">
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Data Kriteria</h6></div>
					<div class="panel-body">
						
						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Kriteria:</label>
							<div class="col-sm-10">
								<input type="text" name="namakriteria" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Atribut:</label>
							<div class="col-sm-10">
								<input type="radio" name="atribut" value="Cost" checked>
								Cost
								<input type="radio" name="atribut" value="Benefit">
								Benefit
							</div>
						</div>

						<div class="form-action text-right">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
						</div>

					</div>
				</div>
			</form>
<?php
if (isset($_POST['simpan'])) {
	$id_kriteria	= $_POST['id_kriteria'];
	$namakriteria	= $_POST['namakriteria'];
	$atribut 		= $_POST['atribut'];

	$sql="insert into kriteria values 
	('$id_kriteria','$namakriteria','$atribut')";
	$query = mysql_query($sql) or die(mysql_error());
	if ($query) {
	echo "<script>window.alert('Kriteria berhasil ditambah');
			window.location=(href='kriteria.php')</script>";
	}}
?>
			<!-- /right label -->
<?php include "footer.php"; ?>