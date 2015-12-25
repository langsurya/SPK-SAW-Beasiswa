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
			<form class="form-horizontal" action="himpunan_tambah.php" method="post" role="form">
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Himpunan</h6></div>
					<div class="panel-body">
						
						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Kriteria:</label>
							<div class="col-sm-2">
								<select name='id_kriteria' data-placeholder="Pilih Kriteria..." class="required select">
									<option></option>";
									<?php
										$query = "SELECT * FROM kriteria order by id_kriteria asc";
										$hasil = mysql_query($query);
										while ($data = mysql_fetch_array($hasil)) 
										{
											echo "<option value='".$data['id_kriteria']."'>".$data['namakriteria']."</option>";
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Himpunan</label>
							<div class="col-sm-10">
								<input type="text" name="namahimpunan" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nilai:</label>
							<div class="col-sm-10">
								<input type="text" name="nilai" required class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Keterangan</label>
							<div class="col-sm-10">
								<input type="text" name="keterangan" required class="form-control">
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
				$namahimpunan	= $_POST['namahimpunan'];
				$nilai 			= $_POST['nilai'];
				$keterangan 	= $_POST['keterangan'];

				$sql="insert into himpunan values 
				('','$id_kriteria','$namahimpunan','$nilai','$keterangan')";
				$query= mysql_query($sql) or die(mysql_error());
				if ($query) {
				echo "<script>window.alert('Himpunan berhasil ditambah');
						window.location=(href='himpunan.php')</script>";
				}}
			?>
						<!-- /right labels -->
<?php include "footer.php"; ?>