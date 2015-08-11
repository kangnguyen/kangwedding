<?php  session_start() ;

?>
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
									<img src="../images/ad.gif" alt="" style="position:absolute;top:-21px ;left:-7px;z-index:5;width:200px;height:80px">
									<img class="anluon" src="../images/buom3.gif" alt="" style="position:absolute;top:-27px ;left:135px;z-index:55;width:310px">
									<a class="navbar-brand chinhsua1" href="../index.php"><span class="logofixx" style="color:#d310d5;font-size: 50pt;text-shadow: 2px 4px 9px;">R</span>inwedding</a>
								</div>
								<div class="navbar-collapse collapse">
									<div class="shopcart">
										<a href="Showgh.php" class="phpcart"><span class="glyphicon glyphicon-shopping-cart" style="font-size:15pt;vertical-align: -3px;"></span><span style="color:red">
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
										}else {echo '<h4 style="color:#d310d5">'.$_SESSION['namedn'].', <a style="color:#fff" href="../account/Logout.php"> Thoát</a></h4>';}
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
			<div class="menu2 tranglietke" style="margin-top:40px">
				<div class="container">
					
				</div>
			</div><!-- End MENU2-->
			
			<div id="content">
				<div class="container fix006">
					<div class="col-md-12">&nbsp </div>
					<div class="col-md-12 phpgh">
						<div class="col-md-12 tieudegh"><h2>Chi tiết Giỏ hàng</h2></div>
						<div class="col-md-12 content-gh">
							<div class="col-md-6 giohang1">Tên Sản Phẩm</div>
							<div class="col-md-2 giohang1">Số Lượng</div>
							<div class="col-md-2 giohang1">Thành Tiền</div>
							<div class="col-md-2 giohang1">Ghi Chú</div>
							<div class="col-md-2"></div>
						</div>
						<?php
							$tongtien=0;
							//Duyệt qua mảng Giỏ
							$kiemtra=1;
							if(isset($_SESSION['cart']))
							{
								foreach($_SESSION['cart'] as $masp=>$soluong)
								{
									$_SESSION['sl']=$soluong;
									if(isset($masp))
									{
										   $kiemtra=2;
									}
								}
							}
							if ($kiemtra == 2)
							{	
									foreach($_SESSION['cart'] as $masp=>$soluong){
										 $item[]=$masp;
									}
									$str=implode("','",$item);
									$db = mysqli_connect("localhost","root","","rinwedding");
									$sql= "Select * From SanPham Where MaSP IN ('".$str."')";
									$query=mysqli_query($db,$sql);
									while($sanpham = mysqli_fetch_row($query)) 
									{
										
										echo '<div class="col-md-12 content-gh">';
										echo	'<div class="col-md-6 giohang3">';
										echo		'<div class="col-md-4" style="padding-left:0"><img src="../images/php/'.$sanpham[3].'" alt="" width="100%"></div>';
										echo		'<div class="col-md-8">';
										echo			'<h3>'.$sanpham[1].'</h3>';
										echo			'<p>'.$sanpham[4].'</p>';
										echo		'</div>';
										echo	'</div>';
										echo	'<div class="col-md-2 giohang2">X '.$_SESSION['cart'][$sanpham[0]].'</div>';
										echo	'<div class="col-md-2 giohang2">'.number_format($_SESSION['cart'][$sanpham[0]] * $sanpham[2]).'</div>';
										echo	'<div class="col-md-2 xoasp"><a href="delcart.php?item='.$sanpham[0].'"><img src="../images/delete.png" alt="">óa sản phẩm</a></div>';
										echo '</div>';
										$tongtien += $_SESSION['cart'][$sanpham[0]] * $sanpham[2];													
									}
									echo'<div class="col-md-12 tongtien"><h4>Tổng tiền : '.number_format($tongtien).'VNĐ</h4></div>';
									$_SESSION['tongtien']=$tongtien;
							}else{
									echo '<div class="col-md-12"><h2 style="text-align:center;padding:20px ;font-size:13pt;color:red">Chưa có sản phẩm nào trong Giỏ hàng.</h2></div>';
									$_SESSION['dem']=0;
								}
								
						?>
						<div class="col-md-6 thanhtoan"><a href="../view/lietke.php?dichvu=aocuoi"><input type="button" value="Tiếp tục Shopping"></a></div>
						<div class="col-md-6 thanhtoan" style="text-align:right"><a href="delcart1.php?item=0"><input type="button" value="Thanh toán ngay"></a></div>
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
								<div class="col-md-6"><span class="dknt-title">Đăng ký ngay Email nhận tin khuyến mãi từ RINWEDDING</span></div>
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
							<h3 class="aocuoine">ÁO CƯỚI RINWEDDING - MỘT NGÀY CHO TRĂM NĂM</h3>
						</header>
						<section class="row anluon">
							<article class="col-md-4">
								<h3 class="endfix"><span class="xoaytiepp"><span class="xoaytiepp1">RINWEEDING</span></span></h3>
								<a href="gioi-thieu.php"><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Về chúng tôi !</p></a>
								<a href=""><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Các dịch vụ .</p></a>
								<a href="lienhe.php"><p><i class="glyphicon glyphicon-chevron-up footicon"></i>Sự kiện các mùa .</p></a>
								<img src="../images/logo2.png" style="width:250px" alt="LOGO" />
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
								<h3 style="background:none;font-size:30pt;color:#D2FF00;font-weight:700;margin-bottom: 15px;margin-left: 20px;">0987 09 09 90</h3>
								<p><i class="glyphicon glyphicon-chevron-up footicon"></i>Email : Rinwedding@gmail.com</p>
								<p><i class="glyphicon glyphicon-chevron-up footicon"></i>Websites : RINWEDDING.TK</p>
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