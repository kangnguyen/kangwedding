<?php  session_start() ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Áo Cưới - Áo cưới đẹp nhất - Áo Cưới Mới nhất - Áo cưới Đà nẵng</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="../css/bootstrap-themes.min.css" type="text/css">
		<link rel="stylesheet" href="../css/common.css" type="text/css">
		<link rel="stylesheet" href="../css/php.css" type="text/css">
		<link rel="stylesheet" href="../css/animation.css" type="text/css">
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
											echo '<div class="logine"><a href="../account/Login.php">Đăng nhập</a></div>';
										}else {echo '<h4 style="color:#03a3e1">'.$_SESSION['namedn'].', <a style="color:#fff" href="../account/Logout.php"> Thoát</a></h4>';}
										?>
									</div>
									<ul class="nav navbar-nav quatrai">
										<li class="metghe"><a href="../index.php">Home</a></li>
										<li class="metghe"><a href="../view/gioi-thieu.php">Giới thiệu</a></li>
										<li class="metghe"><a href="">Album ảnh</a></li>
										<li class="metghe"><a href="../view/lienhe.php">Liên hệ</a></li>
										<li class="dropdown active">
											<a href="" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="lietke.php?dichvu=aocuoi">Áo cưới</a></li>
												<li><a href="lietke.php?dichvu=nhancuoi">Nhẫn cưới</a></li>
												<li><a href="lietke.php?dichvu=hoacuoi">Hoa cưới</a></li>
												<li><a href="lietke.php?dichvu=banhcuoi">Bánh cưới</a></li>
												<li><a href="lietke.php?dichvu=chuphinh">Chụp hình cưới</a></li>
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
			<div class="menu2 tranglietke" style="margin-top:40px">
				<div class="container">
					<div class="row">
						<div class="col-md-2 anluon">
							<a href="">DỊCH VỤ</a>
						</div>
						<div class="col-md-2 acctive suanea" style="position:relative;z-index:121">
							<a href="lietke.php?dichvu=aocuoi">ÁO CƯỚI</a>
						</div>
						<div class="col-md-2 anluon">
							<a href="lietke.php?dichvu=hoacuoi">HOA CƯỚI</a>
						</div>
						<div class="col-md-2 anluon">
							<a href="lietke.php?dichvu=banhcuoi">BÁNH CƯỚI</a>
						</div>
						<div class="col-md-2 anluon">
							<a href="lietke.php?dichvu=chuphinh">CHỤP NGOẠI CẢNH</a>
						</div>
						<div class="col-md-2 anluon">
							<a href="lietke.php?dichvu=nhancuoi">NHẪN CƯỚI</a>
						</div>
					</div>
				</div>
			</div><!-- End MENU2-->
			
			<div id="content">
				<div class="container fix006">
					<div class="col-md-12">&nbsp </div>
					<div class="row fix005">
					<?php
						$db = mysqli_connect("localhost","root","","rinwedding");
						$sql= "select * From Sanpham";
						$query=mysqli_query($db,$sql);
						while($sanpham = mysqli_fetch_row($query)) {
							echo	'<div class="col-md-4" style="margin-bottom:10px">';
							echo		'<div class="bg-sp">';
							echo			'<img src="../images/php/'.$sanpham[3].'" width="320px"  height= "376px"/>';
							echo			'<span class="title-sp">';
							echo				'<h4>'.$sanpham[1].'</h4>';
							echo				'<span>'.$sanpham[4].'</span>';
							echo			'</span>';
							echo			'<span class="title-sp tit2-sp">';
							echo				'<h4 style="font-size:20px">'.number_format($sanpham[2]).' VNĐ</h4>';
							echo				'<a href="../cart/giohang.php?item='.$sanpham[0].'"><h3><em class="glyphicon glyphicon-plus adm1"></em> Giỏ hàng</h3></a>';
							echo				'<a href="chitiet.php?code='.$sanpham[0].'"><i> <img src="../images/b2.png"/></i></a>';
							echo			'</span>';
							echo		'</div>';
							echo	'</div>';
						}		
					?>
					</div><!--END ROW1-->
					
					<div class="col-md-12 cholui">&nbsp </div>
					<div class="col-md-12 cholui">&nbsp </div>
				</div>
			</div><!-- End Content-->
			<footer id="footer">
				<section class="end-footer">
					<article class="dangkynhantin">
						<div class="container">
							<div class="row">
								<div class="col-md-6"><span class="dknt-title">Đăng ký ngay Email nhận tin khuyến mãi từ Kang wedding</span></div>
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" class="form-control">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button" style="padding:3px 10px 4px"><i class="glyphicon glyphicon-envelope" style="font-size:20px"></i></button>
										</span>
									</div><!-- /input-group -->
								</div><!-- /.col-lg-6 -->
							</div>
						</div>
					</article>
					<article class="container" id="xongkhoe">
						<header class="col-md-12">
							<h3 class="aocuoine" style="width:100%;height:50px"></h3>
						</header>
						<section class="row anluon">
							<article class="col-md-4">
								<h3 class="endfix"><span class="xoaytiepp"><span class="xoaytiepp1">KANG</span></span></h3>
								<a href="gioi-thieu.php"><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Về chúng tôi !</p></a>
								<a href=""><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Các dịch vụ .</p></a>
								<a href="lienhe.php"><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Sự kiện các mùa .</p></a>
							</article>
							<article class="col-md-4">
								<h3 class="endfix"><span class="xoaytiepp"><span class="xoaytiepp1">DỊCH VỤ</span></span></h3>
								<a href=""><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Chụp hình cưới - Chụp ngoại cảnh.</p></a>
								<a href="lietke.php?dichvu=aocuoi"><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Áo cưới - Áo chú rễ - Áo cô dâu</p></a>
								<a href=""><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Bánh cưới nhiều tầng .</p></a>
								<a href=""><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Nhẫn cưới.</p></a>
								<a href=""><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Hóa cưới tình yêu .</p></a>
							</article>
							<article class="col-md-4">
								<h3 class="endfix"><span class="xoaytiepp"><span class="xoaytiepp1">LIÊN HỆ</span></span></h3>
								<p><i class="glyphicon glyphicon-chevron-up footicon"></i>Địa chỉ : 470 Hoàng Diệu - Đà Nẵng.</p>
								<h3 style="background:none;font-size:30pt;color:#D2FF00;font-weight:700;margin-bottom: 15px;margin-left: 20px;">0935 890 427</h3>
								<p><i class="glyphicon glyphicon-chevron-up footicon"></i>Email : Kangwedding@gmail.com</p>
								<p><i class="glyphicon glyphicon-chevron-up footicon"></i>Websites : Kangwedding.TK</p>
							</article>
						</section>
						<footer class="col-md-12">
							<p class="designby">Design By - NGUYỄN CÔNG THÀNH - PD00867 - PT09303</p>
						</footer>
					</article>
				</section>
			</footer>
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