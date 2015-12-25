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

			<!-- Hover rows datatable inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading" align="right"><h6 class="panel-title"><i class="fa fa-bar-chart-o"></i> Data Kriteria</h6>
				<a href="kriteria_tambah.php"><input type="submit" value="Tambah Kriteria" class="btn btn-info"></a>
				</div>
				<div class="datatable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Kriteria</th>
								<th>Atribut</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$nomor = 0;
							$hasil = mysql_query("select * from kriteria");
							while ($dataku = mysql_fetch_array($hasil)) {
							?>
								<tr>
									<td><?php echo $nomor=$nomor+1; ?></td>
									<td><?php echo $dataku['namakriteria']; ?></td>
									<td><?php echo $dataku['atribut']; ?></td>
									<td>
										<a href="kriteria_edit.php?id_kriteria=<?php echo $dataku['id_kriteria']; ?>">
										<i class='fa fa-edit'></i>
										</a>
										<a href="kriteria_hapus.php?id_kriteria=<?php echo $dataku['id_kriteria']; ?>">
										<i class='fa fa-eraser'></i>
										</a>
									</td>
								</tr>
							<?php }	?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /hover rows datatable inside panel -->
<?php include "footer.php"; ?>