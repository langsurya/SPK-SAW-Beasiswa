<?php  
session_start();
	if ($_SESSION['username'] == null || $_SESSION['password'] == null) {
		echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
		exit;
	}
	include "../inc/koneksi.php";
	include "../config/authentication_users.php";
	include "../config/fungsi_indotgl.php";
	include "../config/library.php";
	include "../inc/library.php";
	$tanggal = tgl_indo(date("Y m d"));
	$jam	 = date("H:i:s");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<title>Elang Surya | Beasiswa SAW</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../images/style.css" type="text/css" />

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/brain-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font.css">

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>

	<script type="text/javascript" src="../js/plugins/charts/flot.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.orderbars.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.pie.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.time.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.animator.min.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/excanvas.min.js"></script>
	<script type="text/javascript" src="../js/plugins/charts/flot.resize.min.js"></script>

	<script type="text/javascript" src="../js/plugins/forms/uniform.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/select2.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/inputmask.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/autosize.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/inputlimit.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/listbox.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/multiselect.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/validate.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/tags.min.js"></script>

	<script type="text/javascript" src="../js/plugins/forms/uploader/plupload.full.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/uploader/plupload.queue.min.js"></script>

	<script type="text/javascript" src="../js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
	<script type="text/javascript" src="../js/plugins/forms/wysihtml5/toolbar.js"></script>

	<script type="text/javascript" src="../js/plugins/interface/jgrowl.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/datatables.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/prettify.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/fancybox.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/colorpicker.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/timepicker.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/fullcalendar.min.js"></script>
	<script type="text/javascript" src="../js/plugins/interface/collapsible.min.js"></script>

	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/application.js"></script>

	<script type="text/javascript" src="../js/charts/simple_graph.js"></script>

</head>
<!-- Body -->

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">               
            <a class="navbar-brand" href="index.php"><img src="../images/gambar2.png" alt=""></a>             
            </div>
            <div class="navbar-right">               
            <a class="navbar-brand" href="logout.php"><i class="fa fa-sign-out"></i> Sign out</a>
            </div>            
        </div>
    </div>

	<div id="page" align="center">
		<div id="header">
			<div id="companyname" align="left"></div>
			<!-- Link Menu -->