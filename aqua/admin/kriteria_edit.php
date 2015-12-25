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
<?php
$id_kriteria = $_GET['id_kriteria'];
$query=mysql_query("select * from kriteria where id_kriteria='$id_kriteria'");
$dataku=mysql_fetch_array($query);
?>
			<form class="form-horizontal" action="kriteria_edit.php" method="post" role="form">
			<input type=hidden name='id_kriteria' value=<?php  echo $_GET['id_kriteria']; ?> >
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Data Kriteria</h6></div>
					<div class="panel-body">
						
						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Kriteria:</label>
							<div class="col-sm-10">
								<input type="text" name="namakriteria" value="<?php echo $dataku['namakriteria']; ?>" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Atribut:</label>
							<div class="col-sm-10">
								<input type="radio" name="atribut" value="Cost" <?php if ($dataku["atribut"]=="Cost"){?> checked="checked" <?php } ?>>
								Cost
								<input type="radio" name="atribut" value="Benefit" <?php if ($dataku["atribut"]=="Benefit"){?> checked="checked" <?php } ?>>
								Benefit
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
	$id_kriteria	= $_POST['id_kriteria'];
	$namakriteria	= $_POST['namakriteria'];
	$atribut 		= $_POST['atribut'];

	$query=mysql_query("UPDATE kriteria SET namakriteria='$namakriteria', atribut='$atribut', WHERE id_kriteria='$id_kriteria'") or die(mysql_error());
	if ($query) {
	echo "<script>window.alert('Kriteria berhasil diubah');
			window.location=(href='kriteria.php')</script>";
	}}
?>
			<!-- /right labels -->
<?php include "footer.php";?>