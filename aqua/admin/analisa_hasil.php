<?php include "head.php"; ?>
<!-- Body -->

			<!-- Link Menu -->
			<?php include "menu.php"; ?>

			</div>
		<br />

		<div id="content">
		<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-desktop"></i> Hasil Analisa</h5>
			</div>
			<!-- /page title -->

			<!-- Hover rows datatable inside panel -->
            <div class="panel panel-default">
            	<div class="panel-heading"><h6 class="panel-title">
            				<tr align="right">
            					<th></th>
            					<th>Bobot :</th>
            					<th><?php echo "(" .$_POST['bobot_nilai_ipk']. ")"; ?></th>
            					<th><?php echo "(" .$_POST['bobot_penghasilan_ortu']. ")"; ?></th>
            					<th><?php echo "(" .$_POST['bobot_semester']. ")"; ?></th>
            					<th><?php echo "(" .$_POST['bobot_tanggungan']. ")"; ?></th>
            					<th><?php echo "(" .$_POST['bobot_usia']. ")"; ?></th>
            				</tr>
            	</h6></div>
            	<div class="datatable">
            		<table class="table table-hover">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Nama</th>
            					<th>C1. Nilai IPK (Benefit)</th>
            					<th>C2. Penghasilan Ortu (Cost)</th>
            					<th>C3. Semester (Benefit)</th>
            					<th>C4. Jumlah Tanggungan (cost)</th>
            					<th>C5. Usia (Benefit)</th>            					
            				</tr>
            			</thead>
            			<tbody>
            				<?php
            				$nomor = 0;
            				$hasil = mysql_query("select * from klasifikasi, calonbeasiswa where klasifikasi.id_mhs=calonbeasiswa.id_mhs");
            				while ($dataku = mysql_fetch_array($hasil)) {
            				?>
            				<tr>
            					<td><?php echo $nomor=$nomor+1; ?></td>
            					<td><?php echo $dataku['nama_mhs']; ?></td>
            					<td><?php echo $dataku['nilai_ipk']; ?></td>
            					<td><?php echo $dataku['penghasilan_ortu']; ?></td>
            					<td><?php echo $dataku['semester']; ?></td>
            					<td><?php echo $dataku['jml_tanggungan']; ?></td>
            					<td><?php echo $dataku['usia']; ?></td>
            				</tr>
            				<?php }	?>            				
            			</tbody>
            		</table>
            	</div>
            </div>                     				
            			
            <!-- /hover rows datatable inside panel -->
<!-- Cari nilai maximal dan minimal-->
<?php
#Cari nilai maximal
$carimax = mysql_query("SELECT max(nilai_ipk) as max1,
								max(penghasilan_ortu) as max2,
								max(semester) as max3,
								max(jml_tanggungan) as max4,
								max(usia) as max5
								FROM klasifikasi");
$max = mysql_fetch_array($carimax);
# Cari nilai minimal
$carimin = mysql_query("SELECT min(nilai_ipk) as min1,
								min(penghasilan_ortu) as min2,
								min(semester) as min3,
								min(jml_tanggungan) as min4,
								min(usia) as min5
								FROM klasifikasi");
$min = mysql_fetch_array($carimin);
?>
				<div class="panel panel-default">
				<div class="panel-heading"><h6 class="panel-title">Normalisasi</h6></div>
				<div class="datatable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>C1. Nilai IPK</th>
								<th>C2. Penghasilan Ortu</th>
								<th>C3. Semester</th>
								<th>C4. Jumlah Tanggungan</th>
								<th>C5. Usia</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$nomor=0;
							$hasil = mysql_query("select * from klasifikasi, calonbeasiswa where klasifikasi.id_mhs=calonbeasiswa.id_mhs");
							while ($dataku = mysql_fetch_array($hasil)) {
							?>
							<tr>
								<td><?php echo $nomor=$nomor+1; ?></td>
								<td><?php echo $dataku['nama_mhs']; ?></td>
								<td><?php echo round($dataku['nilai_ipk']/$max['max1'],2);?></td>
								<td><?php echo round($min['min2']/$dataku['penghasilan_ortu'],2); ?></td>
								<td><?php echo round($dataku['semester']/$max['max3'],2); ?></td>
								<td><?php echo round($min['min4']/$dataku['jml_tanggungan'],2); ?></td>
								<td><?php echo round($dataku['usia']/$max['max5'],2); ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				</div>
				<!-- /hover rows datatable inside panel -->
<?php
$bobot_nilai_ipk		= $_POST['bobot_nilai_ipk'];
$bobot_penghasilan_ortu	= $_POST['bobot_penghasilan_ortu'];
$bobot_semester			= $_POST['bobot_semester'];
$bobot_tanggungan		= $_POST['bobot_tanggungan'];
$bobot_usia				= $_POST['bobot_usia'];
?>
				<div class="panel panel-default">
				<div class="panel-heading"><h6 class="panel-title">Perangkingan</h6></div>
				<div class="datatable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Nilai</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$nomor=0;
							$hasil = mysql_query("select * from klasifikasi, calonbeasiswa where klasifikasi.id_mhs=calonbeasiswa.id_mhs");
							while ($dataku = mysql_fetch_array($hasil)) {
							?>
							<tr>
								<td><?php echo $nomor=$nomor+1; ?></td>
								<td><?php echo $dataku['nama_mhs']; ?></td>
								<td><?php echo round((($dataku['nilai_ipk']/$max['max1'])*$bobot_nilai_ipk)+
								(($min['min2']/$dataku['penghasilan_ortu'])*$bobot_penghasilan_ortu)+
								(($dataku['semester']/$max['max3'])*$bobot_semester)+
								(($min['min4']/$dataku['jml_tanggungan'])*$bobot_tanggungan)+
								(($dataku['usia']/$max['max5'])*$bobot_usia),2); ?></td>
							</tr>
							<?php }	?>
						</tbody>
					</table>
				</div>
				</div>
				<!-- /hover rows datatable inside panel -->
<?php include "footer.php"; ?>