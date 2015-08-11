<?php session_start() ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>KANG - Áo cưới đà nẵng</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="../css/bootstrap-themes.min.css" type="text/css">
		<link rel="stylesheet" href="../css/common2.css" type="text/css">
		<link rel="stylesheet" href="../css/php.css" type="text/css">
		<link href="../images/favicon.ico" type="image/x-icon" rel="shortcut icon">
		<!-- JQUERY UI-->
			<link rel="stylesheet" type="text/css" href="../js/jquery-ui/themes/base/jquery.ui.all.css">
			<script src="../js/jquery-ui/jquery-1.10.2.js"></script>
			<script src="../js/jquery-ui/ui/jquery.ui.core.js"></script>
			<script src="../js/jquery-ui/ui/jquery.ui.widget.js"></script>
			<script src="../js/jquery-ui/ui/jquery.ui.datepicker.js"></script>
			<script type="text/javascript">
				$(function() {
					$( "#datepicker" ).datepicker();
				});
			</script>
		<!-- END JQUERY UI-->
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
										<li class="active"><a href="../view/lienhe.php">Liên hệ</a></li>
										<li class="dropdown">
											<a href="" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <b class="caret"></b></a>
											<ul class="dropdown-menu">
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
			<div class="menu2 tranglienhe" style="margin-top:40px">
				<div class="container">
					<div class="row">
						<div class="col-md-2 anluon" >
							<a href="../index.php">HOME</a>
						</div>
						<div class="col-md-2 anluon " style="position:relative;z-index:121">
							<a href="../view/gioi-thieu.php">GIỚI THIÊU</a>
						</div>
						<div class="col-md-2  acctive suanea cholui">
							<a href="../view/lienhe.php">LIÊN HỆ</a>
						</div>
						<div class="col-md-6 anluon">
							<a href="#" style="color:#222">CHƯA CÓ GÌ</a>
						</div>
					</div>
				</div>
			</div><!-- End MENU2-->
			
			<div id="content">
				<div class="container lienhe">
					<div class="col-md-12">&nbsp </div>
					<div class="col-md-6 formlienhe col-md-push-6">
						<h2 class="title-title-HOT">LIÊN HỆ - <span style="color:#03a3e1;display:inline">KANG</span></h2>
						<p style="font-weight:600">Hãy liên hệ ngay với chúng tôi để lưu giữ những khoảnh khoắc đẹp trong ngày cưới của bạn. Mọi nhu cầu của bạn là niềm vui của chúng tôi. Chúng tôi sẽ hồi đáp trong 24h.</p>
						<p class="tt-lhne"><i class="glyphicon glyphicon-send"></i><strong>  470 Hoàng Diệu - Đà Nẵng</strong></p>
						<p class="duongline"></p>
						<p class="tt-lhne"><i class="glyphicon glyphicon-earphone"></i><strong>0987 09 09 90</strong></p>
						<p class="duongline"></p>
						<p class="tt-lhne"><i class="glyphicon glyphicon-earphone"></i><strong>0935 89 04 27</strong></p>
						<p class="duongline"></p>
						<p class="tt-lhne"><i class="glyphicon glyphicon-envelope"></i><strong>Kangwedding@gmail.com</strong></p>
						<p class="duongline"></p>
						<p class="tt-lhne"><i class="glyphicon glyphicon-home"></i><strong>Kangwedding.TK</strong></p>
						<p style="text-align:left;font-weight:600">Xin chân thành cảm ơn quý khách đã tin tưởng và sử dụng dịch vụ của chúng tôi! (<span style="color:red;display:inline-block">PHỤC VỤ 24/24</span>)</p>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<p class="lh-luuy"> Mọi thông tin liên hệ quý khách vui lòng điền theo mẫu dưới đây !
						<em> " Lưu ý : Mọi thông tin đều bắt buộc "</em></p>
						<form action="" method="post" autocomplete="on">
							<ul class="form-ul">
								<li class="formli linm">
										<p class="tinhchinh" id="bd-hoten">
												<input id="hoten" class="inputt" type="text" placeholder="Tên của bạn ..." onblur="kthoten()" maxlength="30" />
												<i class="icon-valid" id="icon-hoten"></i>
										</p>
										<span id="tbao-hoten" class="thongbao1 rsss">Bạn chưa nhập họ tên .</span>
								</li>
								<li class="formli linm1" style="width:46%;min-width:227px">
										<p class="tinhchinh" id="bd-ngaysinh">
												<input id="datepicker" type="text" class="inputt" placeholder="Ngày sinh ..." onblur="ktngaysinh()"/>
												<i id="icon-date" class="icon-valid"></i>
										</p>
										<span id="tbao-date" class="thongbao1">Ngày sinh của bạn là ?</span>
								</li>
								<li class="formli linm1" style="width:50%;min-width:227px;float:right">
										<p class="tinhchinh" style="background:none;border:none" id="bd-sex">
												<input class="ckc-sex" type="radio" name="gioitinh"  value="1" onblur="kiemtragioitinh()"/>
												<i class="name-sex"> Nam </i>
												<input  class="ckc-sex" type="radio" name="gioitinh"  value="0" onblur="kiemtragioitinh()"/> 
												<i class="name-sex"> Nữ </i>
												<i id="icon-sex" class="icon-valid"></i>
										</p>
										<span id="tbao-gioitinh" class="thongbao1">Bạn chưa chọn giới tính .</span>
								</li>
								<li class="formli linm3"style="width:46%;min-width:227px;clear:both">
										<p class="tinhchinh" id="bd-dienthoai">
												<input id="dienthoai" type="text" class="inputt" placeholder="Số điện thoại ..." onblur="kiemtradt()"/>
												<i id="icon-dienthoai" class="icon-valid"></i>
										</p>
										<span id="tbao-dienthoai" class="thongbao1">Bạn chưa nhập số điện thoại .</span>
								</li>
								<li class="formli linm3"style="width:50%;min-width:227px;float:right">
										<p class="tinhchinh" id="bd-mail">
												<input id="emailne" type="text" class="inputt" placeholder="Email của bạn ..." onblur="kiemtramail()"/>
												<i id="icon-mail" class="icon-valid"></i>
										</p>
										<span id="tbao-mail" class="thongbao1">Bạn chưa nhập Email .</span>
								</li>
								<li class="formli linm2">
										<p class="tinhchinh" id="bd-diachi">
												<input id="diachi" type="text" class="inputt" placeholder="Tiêu đề cần liên hệ ..." onblur="kiemtradiachi()"/>
												<i id="icon-diachi" class="icon-valid"></i>
										</p>
										<span id="tbao-diachi" class="thongbao1">Bạn chưa nhập tiêu đề cần liên hệ .</span>
								</li>
								<li class="formli linm5"><textarea placeholder="Nội dung bạn muốn liên hệ với chúng tôi..."  ></textarea></li>
								
								<li class="formli fmli2" style="overflow:hidden">
										<input class="sb-f" type="button" onclick="kiemtra()" value="Gửi đi" /> 
										<input class="sb-f ff2" type="reset" value="Nhập lại" onclick="nhaplai()" />
								</li>
							</ul>
						</form>
					</div>
					
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
								<a href=""><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Áo cưới - Áo chú rễ - Áo cô dâu</p></a>
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
							<p class="designby" style="width:100%">Design By - NGUYỄN CÔNG THÀNH - PD00867 - PT09303</p>
						</footer>
					</article>
				</section>
			</footer>
		</div>
		<script type="text/javascript" src="../js/validate.js"></script>
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