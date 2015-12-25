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
			<script type="text/javascript" src="../js/jquery-1.9.0.js"></script>
            <script type="text/javascript" src="../js/jquery-ui-1.10.0.custom.js"></script>          
            <!-- Right labels -->
            <form class="form-horizontal" action="klasifikasi_tambah.php" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title">Klasifikasi</h6></div>
                    <div class="panel-body">

                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">Nama Mahasiswa:</label>
                        <div class="col-sm-3">
                            <input type=text name='nama_mhs' id='nama_mhs' required>
                            <input type=hidden name='id_mhs' id='id_mhs' required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">Nilai IPK:</label>
                        <div class="col-sm-3">
                            <select name='nilai_ipk' data-placeholder="Pilih Nilai IPK..." class="required select">
                                <option></option>";
                                <?php
                                $query = "SELECT * FROM himpunan where id_kriteria='1' order by id_himpunan asc";
                                $hasil = mysql_query($query);
                                while ($data = mysql_fetch_array($hasil)) 
                                {
                                    echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">Penghasilan Ortu:</label>
                        <div class="col-sm-4">
                            <select name='penghasilan_ortu' data-placeholder="Pilih Penghasilan Ortu..." class="required select">
                                <option></option>
                                <?php
                                $query = "SELECT * FROM himpunan where id_kriteria='2' order by id_himpunan asc";
                                $hasil = mysql_query($query);
                                while ($data = mysql_fetch_array($hasil)) 
                                {
                                    echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">Semester:</label>
                        <div class="col-sm-3">
                            <select name='semester' data-placeholder="Pilih Semester..." class="required select">
                                <option></option>
                                <?php
                                    $query = "SELECT * FROM himpunan where id_kriteria='3' order by id_himpunan asc";
                                    $hasil = mysql_query($query);
                                    while ($data = mysql_fetch_array($hasil)) 
                                    {
                                        echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">Jumlah Tanggungan:</label>
                        <div class="col-sm-3">
                            <select name="jml_tanggungan" data-placehoder="Pilih Tanggungan..." class="required select">
                                <option></option>
                                <?php
                                    $query = "SELECT * FROM himpunan where id_kriteria='4' order by id_himpunan asc";
                                    $hasil = mysql_query($query);
                                    while ($data = mysql_fetch_array($hasil)) 
                                    {
                                        echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label text-right">Usia:</label>
                        <div class="col-sm-3">
                            <select name='usia' data-placeholder="Pilih Sikap..." class="required select">
                                <option></option>
                                <?php
                                    $query = "SELECT * FROM himpunan where id_kriteria='5' order by id_himpunan asc";
                                    $hasil = mysql_query($query);
                                    while ($data = mysql_fetch_array($hasil)) 
                                    {
                                        echo "<option value='".$data['nilai']."'>".$data['namahimpunan']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-action text-right">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        <input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
                    </div>

                </div>
            </div>
        </form>
        <script type="text/javascript">
        $(document).ready(function(){
            var ac_config = {
                source: "mahasiswa_cari.php",
                select: function(event, ui){
                    $("#nama_mhs").val(ui.item.nama_mhs);
                    $("#id_mhs").val(ui.item.id_mhs);
                },
                minLength:1
            };
            $("#nama_mhs").autocomplete(ac_config);
        });
        </script>
<?php
if (isset($_POST['simpan'])) {
    $id_mhs     = $_POST['id_mhs'];
    $nilai_ipk  = $_POST['nilai_ipk'];
    $penghasilan_ortu = $_POST['penghasilan_ortu'];
    $semester   = $_POST['semester'];
    $jml_tanggungan = $_POST['jml_tanggungan'];
    $usia       = $_POST['usia'];

    $sql = "insert into klasifikasi values
    ('','$id_mhs','$jml_tanggungan','$nilai_ipk','$penghasilan_ortu','$semester','$usia')";
    $query = mysql_query($sql) or die(mysql_error());
    if ($query) {        
    echo "<script>window.alert('Klasifikasi berhasil di tambah');
            window.location=(href='klasifikasi.php')</script>";
    }}
?>
            <!-- /right lebels -->
<?php include "footer.php" ?>