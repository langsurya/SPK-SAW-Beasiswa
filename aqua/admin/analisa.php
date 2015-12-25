<?php include "head.php"; ?>
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
            <form class="form-horizontal" action="analisa_hasil.php" method="post" role="form">
            	<div class="panel panel-default">
            		<div class="panel-heading"><h6 class="panel-title"><i class="fa fa-pencil"></i> Analisa Penerimaan Beasiswa</h6></div>
            		<div class="panel-body">
            			
            			<div class="form-group">
            				<label class="col-sm-3 control-label text-right">C1. Nilai IPK:</label>
            				<div class="col-sm-8">
            					<select name='bobot_nilai_ipk' class="required select">
            						<option value="1">Sangat Rendah</option>
            						<option value="2">Rendah</option>
            						<option value="3">Cukup</option>
            						<option value="4">Tinggi</option>
            						<option value="5">Sangat Tinggi</option>
            					</select>
            				</div>
            			</div>

            			<div class="form-group">
            				<label class="col-sm-3 control-label text-right">C2. Penghasilan Ortu:</label>
            				<div class="col-sm-8">
            					<select name='bobot_penghasilan_ortu' class="required select">
            						<option value="1">Sangat Rendah</option>
            						<option value="2">Rendah</option>
            						<option value="3">Cukup</option>
            						<option value="4">Tinggi</option>
            						<option value="5">Sangat Tinggi</option>
            					</select>
            				</div>
            			</div>

            			<div class="form-group">
            				<label class="col-sm-3 control-label text-right">C3. Semester:</label>
            				<div class="col-sm-8">
            					<select name='bobot_semester' class="required select">
            						<option value="1">Sangat Rendah</option>
            						<option value="2">Rrendah</option>
            						<option value="3">Cukup</option>
            						<option value="4">Tinggi</option>
            						<option value="5">Sangat Tinggi</option>
            					</select>
            				</div>
            			</div>

            			<div class="form-group">
            				<label class="col-sm-3 control-label text-right">C4. Jumlah Tanggungan:</label>
            				<div class="col-sm-8">
            					<select name='bobot_tanggungan' class="required select">
            						<option value="1">Sangat Rendah</option>
            						<option value="2">Rrendah</option>
            						<option value="3">Cukup</option>
            						<option value="4">Tinggi</option>
            						<option value="5">Sangat Tinggi</option>
            					</select>
            				</div>
            			</div>

            			<div class="form-group">
            				<label class="col-sm-3 control-label text-right">C5. Usia:</label>
            				<div class="col-sm-8">
            					<select name='bobot_usia' class="required select">
            						<option value="1">Sangat Rendah</option>
            						<option value="2">Rrendah</option>
            						<option value="3">Cukup</option>
            						<option value="4">Tinggi</option>
            						<option value="5">Sangat Tinggi</option>
            					</select>
            				</div>
            			</div>

            			<div class="form-action text-right">
            				<input type="submit" name="simpan" value="Proses" class="btn btn-primary">
            				<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
            			</div>

            		</div>
            	</div>
            </form>

            <!-- /right labels -->
        <?php include "footer.php"; ?>