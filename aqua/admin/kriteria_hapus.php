<?php
include '../inc/koneksi.php';

$id_kriteria = $_GET['id_kriteria'];
$query = mysql_query("delete from kriteria where id_kriteria='$id_kriteria'") or die(mysql_error());
if ($query) {
?>
<script language="JavaScript">
	alert('Kriteria berhasil dihapus');
	document.location='kriteria.php';
</script>
<?php
}
?>