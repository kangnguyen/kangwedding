<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Bánh cưới - Bánh cưới đẹp nhất tại Đà Nẵng</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="../css/bootstrap-themes.min.css" type="text/css">
		<link rel="stylesheet" href="../css/common.css" type="text/css">
		<link rel="stylesheet" href="../css/php.css" type="text/css">
		<link href="../images/favicon.ico" type="image/x-icon" rel="shortcut icon">
	</head>
	<body>
		<div id="wrapper">
			<div class="navbar-wrapper">
					<div class="keodai"></div>
					<div class="container">
						<div class="navbar navbar-inverse navbar-static-top" role="navigation">
							<div class="container">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand chinhsua1" href="../index.php"><span class="logofixx" style="color:#d310d5;font-size: 50pt;text-shadow: 2px 4px 9px;">R</span>inwedding</a>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="lapkhoangtrong">
			</div>
			
			
			<div id="content">
				<div class="container fix006">
					<div class="col-md-6 ad1">
						<div style="width:100%;height:100%;background:#222;transform:rotate(8deg);position:absolute;box-shadow:0 0 5px rgba(0,0,0,0.25)">
							<div class="formdn1">
								<h2>ĐĂNG NHẬP</h2>
								<form action="admin_Xuly_Login.php" method="POST">
									<p><span class="uname">Tên đăng nhập</span><input type="text" name="TenDN" class="input1" placeholder="DEMO : admin" ></input></p>
									<p><span class="uname">Mật khẩu</span><input type="password" name="PassDN" class="input1" placeholder="DEMO : 123456" ></input></p>
									<p style="color:red;text-align:right">
									<?php
										if(empty($_SESSION['valid'])==False){
											echo $_SESSION['valid'];
											$_SESSION['valid']= "";
										}
									?></p>
									<p class ="bsub" style="margin-top:20px;text-align:right"><input type="submit" name="OK" value="Đăng Nhập" ></input>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Content-->
			
		</div>
				
	</body>

</html>