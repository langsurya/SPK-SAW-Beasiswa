<?php
include '../inc/koneksi.php';

$id_himpunan = $_GET['id_himpunan'];
$query = mysql_query("delete from himpunan where id_himpunan='$id_himpunan'") or die(mysql_error());
if ($query) {
?>
<script language="JavaScript">
	alert('Himpunan berhasil di hapus');
	document.location='himpunan.php';
</script>
<?php
}
?>