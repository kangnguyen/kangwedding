<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sign UP</title>
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
									<a class="navbar-brand chinhsua1" href="../index.php"><span class="logofixx" style="color:#03a3e1;font-size: 50pt;text-shadow: 2px 4px 9px;">K</span>ang wedding</a>
								</div>
								<div class="navbar-collapse collapse">
									<div class="shopcart">
										<a href="../cart/Showgh.php" class="phpcart"><span class="glyphicon glyphicon-shopping-cart" style="font-size:15pt;vertical-align: -3px;"></span><span style="color:red">
										<?php 
											if (empty($_SESSION['dem'] )==False){
												echo $_SESSION['dem'] ;
											}else {echo '0';}
										?> 
											</span>- Sản phẩm
										</a>
										<?php
										if (isset($_SESSION['namedn'])==False){
											echo '<div class="logine"><a href="Login.php">Đăng nhập</a></div>';
										}else {echo '<h4 style="color:#03a3e1">'.$_SESSION['namedn'].', <a style="color:#fff" href="Logout.php"> Thoát</a></h4>';}
										?>
									</div>
									<ul class="nav navbar-nav quatrai">
										<li class="metghe"><a href="../index.php">Home</a></li>
										<li class="metghe"><a href="../view/gioi-thieu.php">Giới thiệu</a></li>
										<li class="metghe"><a href="">Album ảnh</a></li>
										<li class="metghe"><a href="../view/lienhe.php">Liên hệ</a></li>
										<li class="dropdown ">
											<a href="" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <b class="caret"></b></a>
											<ul class="dropdown-menu" style="transform:rotate(0deg);z-index:12">
												<li><a href="../view/lietke.php?dichvu=aocuoi">Áo cưới</a></li>
												<li><a href="">Nhẫn cưới</a></li>
												<li><a href="">Hoa cưới</a></li>
												<li><a href="">Bánh cưới</a></li>
												<li><a href="">Chụp hình cưới</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="lapkhoangtrong">
			</div>
			
			
			<div id="content">
				<div class="container fix006" style=" margin-bottom: 70px;position:relative;z-index:10">
					<div class="col-md-7 ad1" style="height:560px">
						<div style="width:100%;height:100%;background:#222;transform:rotate(8deg);position:absolute;box-shadow:0 0 5px rgba(0,0,0,0.25)">
							<div class="formdn1">
								<h2 style="width:32%">ĐĂNG KÝ</h2>
									
									<form action="XL_DangKy.php" method="POST" enctype="multipart/form-data" class="formsp">
										
										<p class="ad4 ad45"><span>Tên Đăng Nhập(<em style="color:red">*</em>)</span><input type="text" name="Uname" ></input></p>
										<p class="ad4 ad45"><span>Mật Khẩu (<em style="color:red">*</em>)</span><input type="password" name="Upass"></input></p>
										<p class="ad4 ad45"><span>Xác nhận MK (<em style="color:red">*</em>)</span><input type="password" name="Upass1"></input></p>
										<p class="ad4 ad45"><span>Họ Tên </span><input type="text" name="HoTen"></input></p>
										<p class="ad4 ad45"><span>Giới Tính </span><em class="fixradi">Nam<input type="radio" name="GTinh" value="1" checked></input></em><em class="fixradi">Nữ<input type="radio" name="GTinh" value="0" ></input></em></p>
										<p class="ad4 ad45"><span>Địa Chỉ</span><input type="text" name="DiaChi"></input></p>
										<p class="ad4 ad45"><span>Số Điện Thoại</span><input type="text" name="SoDT"></input></p>
										<?php 
											if (empty($_SESSION['baoloi'])==False){
												echo $_SESSION['baoloi'];
												$_SESSION['baoloi']="";
											}
										?>
										<p class ="bsub" style="margin-top:20px;text-align:right"><input type="reset" name="DK" value="Nhập Lại" style="background:#fff;color:#222;margin-right:7px;width: 150px;"></input><input style="width: 150px;" type="submit" name="OK" value="Đăng Ký" ></input></p>
									</form>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Content-->
			
		</div>
		<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/docs.min.js"></script>
		
		<script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});</script>
		<div id='bttop'><span><img src="../images/top.png" width="40px" height="40px"/></span></div> <!--TOP-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-52842694-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>

</html>