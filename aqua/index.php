<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/style.css" type="text/css" />

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/brain-theme.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font/css">

	<title>Login</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                

                <ul class="nav navbar-nav navbar-left-custom">
                    <li class="user dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                           
                            <span>Seleksi Pemberian Beasiswa Metode SAW</span>
                            
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

	<div id="page" align="center">
		<!-- <div id="header">
			<div id="companyname" align="left">Aplikasi Pemberian Beasiswa</div>
			<div align="right" class="links_menu" id="menu"> </div>
		</div> -->


			<!-- Login wrapper -->
			<div class="login-wrapper">
<?php
//kode php ini kita gunakan untuk menampilkan pesan error
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 4) {
		echo "<font color=red><h5>Username dan Password tidak terdaftar!</h5></font>";
	}
}
?>
				<form name="login" action="otentikasi.php" role="form" method="post">
					<div class="panel panel-default">
						<div class="panel-heading"><h6 class="panel-title"><i class="fa fa-user"></i> Admin login</h6></div>
						<div class="panel-body">
							<div class="form-group has-feedback" align="left">
								<label>Username</label>
								<input type="text" class="form-control" name="username" placeholder="Username..." required>
								<i class="fa fa-user form-control-feedback"></i>
							</div>

							<div class="form-group has-feedback" align="left">
								<label>Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password..." required>
								<i class="fa fa-lock form-control-feedback"></i>
							</div>

							<div class="row form-actions">
								<div class="col-xs-6">									
								</div>

								<div class="col-xs-6">
									<button type="submit" class="btn btn-warning pull-right"><i class="fa fa-sign-in"></i>Sign in</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				username :<b> admin<br></b>
				password : <b>admin</b>
			</div>

<!-- Footer -->
<?php 
// include "/admin/footer.php"; 
?>