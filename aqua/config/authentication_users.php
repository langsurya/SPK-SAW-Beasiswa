<?php
	//session_start();
	if ($_SESSION['username'] == null || $_SESSION['password'] == null) {
		echo "<meta http-equive='refresh' content='0;url=index.php'>";
		exit;
	}
?>