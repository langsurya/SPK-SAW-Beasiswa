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
			$id_himpunan=$_GET['id_himpunan'];
			$query=mysql_query("select * from himpunan where id_himpunan='$id_himpunan'");
			$dataku=mysql_fetch_array($query);
			?>
			<!-- Right labels -->
			<form class="form-horizontal" action="himpunan_edit.php" method="post" role="form">
			<input type=hidden name='id_himpunan' value=<?php echo $_GET['id_himpunan']; ?> >
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Himpunan</h6></div>
					<div class="panel-body">
						
						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Kriteria:</label>
							<div class="col-sm-2">
								<select name='id_kriteria' data-placeholder="Pilih Kriteria..." class="required select">
									<option value='' selected>-- Pilih Kriteria --</option>
									<?php
									$query = "SELECT * FROM kriteria order by id_kriteria asc";
									$hasil = mysql_query($query);
									while ($data = mysql_fetch_array($hasil)) 
									{
										if ($dataku['id_kriteria']==$data['id_kriteria']) {
										echo "<option value='$data[id_kriteria]' selected='$dataku[id_kriteria]'>".$data['namakriteria']."</option>";
										}else{
										echo "<option value='$data[id_kriteria]'>".$data['namakriteria']."</option>";
										}
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Himpunan:</label>
							<div class="col-sm-10">
								<input type="text" name="namahimpunan" value="<?php echo $dataku['namahimpunan'];?>" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nilai:</label>
							<div class="col-sm-10">
								<input type="text" name="nilai" value="<?php echo $dataku['nilai'];?>" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Keterangan:</label>
							<div class="col-sm-10">
								<input type="text" name="keterangan" value="<?php echo $dataku['keterangan']; ?>" required class="form-control">
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
				$id_himpunan	= $_POST['id_himpunan'];
				$id_kriteria	= $_POST['id_kriteria'];
				$namahimpunan	= $_POST['namahimpunan'];
				$nilai 			= $_POST['nilai'];
				$keterangan 	= $_POST['keterangan'];

				$query=mysql_query("UPDATE himpunan SET id_kriteria='$id_kriteria', namahimpunan='$namahimpunan', nilai='$nilai', keterangan='$keterangan' WHERE id_himpunan='$id_himpunan'") or die(mysql_error());
				if ($query) {
				echo "<script>window.alert('Himpunan berhasil diubah');
						window.location=(href='himpunan.php')</script>";
				}}
			?>
				<!-- /right labels -->
	<?php include "footer.php"; ?>