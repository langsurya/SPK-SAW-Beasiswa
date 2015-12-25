<?php
	session_start();
	if ($_SESSION['nim'] == null || $_SESSION['password'] == null) {
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		exit;
	}
?>