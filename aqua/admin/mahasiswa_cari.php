<?php
include "../inc/koneksi.php";
include "../cek-login.php";

$term = $_GET['term'];

$query = mysql_query("select * from calonbeasiswa where nama_mhs like '%".$term."%'");
$json = array();
while ($ketik = mysql_fetch_array($query)) {
	$json[] = array(
		'label' => $ketik['nama_mhs'], // text sugesti sat user mengetik di input box
		'value' => $ketik['nama_mhs'], // nilai yang akan di masukan di inputbox saat user memilih salah satu sugesti
		'id_mhs' => $ketik['id_mhs']
		);
}
header("Content-Type: text/json");
echo json_encode($json);
?>