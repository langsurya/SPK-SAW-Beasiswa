<?php
include '../inc/koneksi.php';

$id_mhs = $_GET['id_mhs'];
$query = mysql_query("delete from calonbeasiswa where id_mhs='$id_mhs'") or die(mysql_error());
$q = mysql_query("DELETE FROM klasifikasi WHERE id_mhs='$id_mhs'") or die(mysql_error());
if ($query) {
?>
<script language="JavaScript">
	alert('Data calon Beasiswa berhasil di hapus');
	document.location='mahasiswa.php';
</script>
<?php
}
?>