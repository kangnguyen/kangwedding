<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Rin Wedding Áo cưới Đà Nẵng</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywword" content="Kangwedding, Kangwedding cung cấp các dịch vụ cưới hỏi, Áo Cưới,Áo cưới Đà nẵng, Áo cưới đẹp nhất, áo cưới mới nhất 2014, Hoa cưới,Bánh Cưới, nhẫn Cưới, chụp hình cưới, chụp hình ngoại cảnh, dịch vụ cưới hỏi tốt nhất tại đà nẵng">
		<meta name="description" content="Áo cưới Rin Wedding - Nơi những cô Dâu trở thành những công chúa đẹp tựa trong mơ... :D ">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap-themes.min.css" type="text/css">
		<link rel="stylesheet" href="css/common2.css" type="text/css">
		<link rel="stylesheet" href="css/php.css" type="text/css">
		<link rel="stylesheet" href="css/animation.css" type="text/css">
		<link rel="stylesheet" href="css/slider.css" type="text/css">
		<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon">
		<!--SLIDER-->
		<link rel="stylesheet" href="css/mini.css" type="text/css">
		<link rel="stylesheet" href="css/mini2.css" type="text/css">
		<!-- -->
				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-52842694-1', 'auto');
				  ga('send', 'pageview');

				</script>
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
									<h1 style="margin:0;padding:0;line-height:0;z-index:6;position:relative"><a class="navbar-brand chinhsua1" href="index.php"><span class="logofixx" style="color:#03a3e1;font-size: 50pt;text-shadow: 2px 4px 9px;">K</span>ang wedding</a></h1>
									
									
								</div>
								<div class="navbar-collapse collapse">
									<div class="shopcart">
										<a href="Cart/Showgh.php" class="phpcart"><span class="glyphicon glyphicon-shopping-cart" style="font-size:15pt;vertical-align: -3px;"></span><span style="color:red">
										<?php 
											if (empty($_SESSION['dem'] )==False){
												echo $_SESSION['dem'] ;
											}else {echo '0';}
										?> 
											</span>- Sản phẩm
										</a>
										<?php
										if (isset($_SESSION['namedn'])==False){
											echo '<div class="logine"><a href="Account/Login.php">Đăng nhập</a></div>';
										}else {echo '<h4 style="color:#03a3e1">'.$_SESSION['namedn'].', <a style="color:#fff" href="Account/Logout.php"> Thoát</a></h4>';}
										?>
									</div>
									<ul class="nav navbar-nav quatrai">
										<li class="active"><a href="index.php">Home</a></li>
										<li class="metghe"><a href="view/gioi-thieu.php">Giới thiệu</a></li>
										<li class="metghe"><a href="">Album ảnh</a></li>
										<li class="metghe"><a href="view/lienhe.php">Liên hệ</a></li>
										<li class="dropdown">
											<a href="" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="view/lietke.php?dichvu=aocuoi">Áo cưới</a></li>
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
			 <!-- SLIDER ================================================== -->
			<div id="slider">			
						<iframe src="Slider/slider.html" scrolling="no" style="width:100%;height:550px;border:0"> </iframe>
			</div>
			
			<!-- END SLIDER -->
			<div class="menu2" style="border-top: 5px solid #000;padding-bottom:15px">
				<div class="container">
					<div class="row chinhsua78">
						<div class="col-md-3">
							<h5>WELCOME TO</h5>
							<h2><span style="color:#03a3e1;font-size: 60pt;text-shadow: 2px 4px 9px;">K</span>angwedding</h2>
						</div>
						<div class="col-md-9">
							<p><span style="color:#03a3e1">Kang wedding </span>luôn sáng tạo trong từng khung hình cưới, đa dạng trong từng bộ sưu tập áo cưới, nhiệt tình trong cách làm việc nên nhanh chóng 
							trở thành địa chỉ quen thuộc của các cô dâu chú rể. Đến với Rin Wedding, các cô dâu còn được tư vấn lựa chọn những bộ áo cưới thật hiện đại, 
							sang trọng nhưng vẫn tô điểm thêm vẻ đẹp tươi tắn, tràn đầy hạnh phúc nhờ sự khéo léo hài hòa trong cách trang điểm cô dâu và làm tóc cưới.
							</p>
						</div>
					</div>
					<div class="col-md-12" style="margin-bottom:30px"><p style="padding:1px;background:#03a3e1;margin:auto; width: 50%;"></p></div>
					<div class="row chinhsua88">
						<div class="col-md-3 fix001" style="text-align: center;">
							<a href="view/gioi-thieu.php">	
								<i class="glyphicon glyphicon-heart"></i>
								<h4>ÁO CƯỚI ĐÀ NẴNG</h4>
								<p>Rin wedding là gì? Bạn muốn biết chúng tôi là ai? Làm gì ?</p>
							</a>
						</div>
						<div class="col-md-3 fix001" style="text-align: center;">
							<a href="">	
								<i class="glyphicon glyphicon-camera"></i>
								<h4>ALBUM ẢNH CƯỚI</h4>
								<p>Tổng hợp những bộ ảnh cưới đẹp nhất của các cặp đôi đã sử dụng dịch vụ tại Rin weddig.</p>
							</a>
						</div>
						<div class="col-md-3 fix001" style="text-align: center;">
							<a href="view/lietke.php?dichvu=aocuoi">	
								<i class="glyphicon glyphicon-briefcase"></i>
								<h4>DỊCH VỤ CƯỚI</h4>
								<p>Các dịch vụ được cung cấp bởi Kangwedding: <span style="color:#03a3e1">Áo cưới</span>, <span style="color:#03a3e1">Hoa cưới</span>, <span style="color:#03a3e1">Bánh cưới</span> ...</p>
							</a>
						</div>
						<div class="col-md-3 fix001" style="text-align: center;">
							<a href="view/lienhe.php">	
								<i class="glyphicon glyphicon-phone"></i>
								<h4>LIÊN HỆ</h4>
								<p>Hãy liên hệ với chúng tôi cho mọi nhu cầu của bạn.</p>
							</a>
						</div>
					</div>
				</div>
			</div><!-- End MENU2-->
			
				<section class="end-footer" style="box-shadow:none;background:#222;border-bottom:5px solid #000">
					<article class="container" id="xongkhoe">
						<header class="col-md-12">
							<h3 class="aocuoine"></h3>
						</header>
						
						<section class="col-md-12">
							<div style="width:10%;float:left" class="anluon"> 
								
								<br> 
								<audio autoplay="autoplay" id="audio1">
									<source src="mp3/mp3_1.MP3" type="audio/mp3">
								</audio>
							</div> 
							<script> 
							var myVideo = document.getElementById("audio1"); 

							function playPause() { 
								if (myVideo.paused) {
									myVideo.play(); 
									document.getElementById("doihinh").src="images/volume.png";}
								else {
									myVideo.pause(); 
									document.getElementById("doihinh").src="images/volume1.png";}
							} 
							</script> 
							<p class="designby" style="border:none;border-top:2px solid #fff;width:100%">Design By - NGUYỄN CÔNG THÀNH - PD00867 - PT09303</p>
						</section>
					</article>
				</section>
			</footer>
		</div>
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/docs.min.js"></script>
		<script type="text/javascript" src="js/mini.js"></script>
		<script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});</script>
		<div id='bttop'><span><img src="images/top.png" style="width:40px;height:40px" alt="TOP"/></span></div> <!--TOP-->

	</body>

</html>