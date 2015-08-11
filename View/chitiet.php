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
		<link rel="stylesheet" href="../css/common.css" type="text/css">
		<link rel="stylesheet" href="../css/php.css" type="text/css">
		<link rel="stylesheet" href="../css/animation.css" type="text/css">
		<link href="../images/favicon.ico" type="image/x-icon" rel="shortcut icon">
		<!--Zoom hình-->
		 <!-- Include jQuery. -->
        <script type="text/javascript" src="../js/jquery-1.8.1.min.js"></script>

        <!-- Include Cloud Zoom CSS. -->
        <link rel="stylesheet" type="text/css" href="../css/jetzoom.css" />

        <!-- Include Cloud Zoom script. -->
        <script type="text/javascript" src="../js/jetzoom.js"></script>

        <!-- Call quick start function. -->
        <script type="text/javascript">
            JetZoom.quickStart();
        </script>    
		<!-- -->
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
										<li class="metghe"><a href="gioi-thieu.php">Giới thiệu</a></li>
										<li class="metghe"><a href="">Album ảnh</a></li>
										<li class="metghe"><a href="lienhe.php">Liên hệ</a></li>
										<li class="dropdown active">
											<a href="" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="lietke.php?dichvu=aocuoi">Áo cưới</a></li>
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
					<div class="row">
						<div class="col-md-2 anluon">
							<a href="">DỊCH VỤ</a>
						</div>
						<div class="col-md-2 acctive suanea" style="position:relative;z-index:121">
							<a href="lietke.php?dichvu=aocuoi">ÁO CƯỚI</a>
						</div>
						<div class="col-md-2 anluon">
							<a href="">HOA CƯỚI</a>
						</div>
						<div class="col-md-2 anluon">
							<a href="">BÁNH CƯỚI</a>
						</div>
						<div class="col-md-2 anluon">
							<a href="">CHỤP NGOẠI CẢNH</a>
						</div>
						<div class="col-md-2 anluon">
							<a href="">NHẪN CƯỚI</a>
						</div>
					</div>
				</div>
			</div><!-- End MENU2-->
			
			<div id="content">
				<div class="container">
					<div class="col-md-12">&nbsp </div>
					<div class="row chitietsp">
					
						<div class="col-md-8 hinhanh-ctsp">
							<span class="metghenghee">
							<?php
								$sanpham=$_GET['code'];
								$db = mysqli_connect ("localhost","root","","rinwedding");
								$sql1 = 'Select * from Sanpham Where MaSP="'.$sanpham.'"';
								$query1 = mysqli_query($db,$sql1);
								$rowsp = mysqli_fetch_row($query1);
								$masp=$rowsp[0];
								$tensp=$rowsp[1];
								$dongia=$rowsp[2];
								$hinhanh=$rowsp[3];
								$mota=$rowsp[4];
							
								echo '<img class = "jetzoom" src = "../images/chitiet/chitiet'.$masp.'.jpg" data-jetzoom = "zoomImage: \'../images/chitiet/chitiet'.$masp.'.jpg\'" />';
							
								echo '</span>';
								echo '</div>';
								echo '<div class="col-md-4  thongtin-ctsp">';
						
							echo '<h3>'.$tensp.'</h3>';
						
							echo '<p>Kiệt tác này được làm từ chất liệu ren Chantilly cao cấp của Pháp,';
							echo 'satin sang trọng. Ngoài ra, thiết kế này đã "ngốn hết" 152 khuy đính dọc phần lưng và thêm 17 chiếc trên mỗi tay áo. ';
							echo 'Với sự kỳ công này, bộ váy đã trở thành một dấu ấn đẹp khó quên trong đời bạn.</p>';
							echo '<p><strong style="color:#222222">Giá sản phẩm trên toàn quốc :</strong><i class="glyphicon glyphicon-ok"></i></p>';
							echo '<p><strong style="color:#222222">Màu sắc : </strong> <span class="mausac" style="background:green"></span><span class="mausac" style="background:blue"></span><span class="mausac" style="background:pink"></span><span class="mausac" style="background:yellow"></span><span class="mausac" style="background:red"></span></p>';
						
							echo '<h2>'.number_format($dongia).' VNĐ</h2>';
						
							echo '<p class="thuemua"><a href="../cart/giohang2.php?item='.$masp.'" class="btn btn-primary btn-lg" role="button" style="background:#5cb85c">Thuê ngay</a></p>';
						?>
						</div>
					</div><!--END HÌNH ẢNH CHÍNH-->
					
					<div class="col-md-12" style="margin-top:20px">
						<ul class="box3-top">
							<li class="box3-act"><span class="spanthongtin">Thông Tin</span></li>
							<li><span class="spandnb">Điểm Nổi Bật</span></li>
							<li><span class="spanbinhluan">Bình Luận</span></li>
						</ul>
						<div class="box4-top">
							<img src="../images/kt.png" alt="Chứng nhận" width="650px" height="62px" style="margin:20px 0;"/>
							<p><strong>Váy cưới có phần chân hiện đại</strong>, Mẫu váy cưới phù hợp với cô dâu yêu thích sự nền nã, kín đáo. Với các điểm nhấn nhá nơi vòng eo và độ rủ váy mềm mại, 
							chiếc váy mang lại cho cô dâu sự thanh lịch, dịu dàng mà không hề đơn điệu.<br></p>
							<p><strong>Ren</strong> được coi là một trong những chất liệu phổ biến nhất để tạo nên một chiếc áo cưới lộng lẫy, tinh tế, đặc biệt là trong thời gian gần đây.<strong> Áo cưới ren</strong> gợi cho người 
							ta có chút cảm giác cổ điển, sang trọng mà vẫn rất quyến rũ. Tùy theo từng hoàn cảnh hay bối cảnh tiệc cưới mà các NTK có thể biến tấu ra rất nhiều kiểu<strong> áo cưới ren</strong> đa dạng và cuốn hút.</p>
							<p>Mùa cưới này, chất liệu ren nổi xuất hiện như một “hiện tượng” và được các NTK ứng dụng nhiều nhất cho những bộ sưu tập váy cưới của mình. Vẫn sử dụng tone màu trắng tinh khôi làm chủ đạo, những mảng ren 
							nổi được vận dụng vô cùng khéo léo cho các mẫu áo cưới ren của năm nay, từ việc làm chất liệu chính cho toàn bộ váy, hay chỉ là điểm nhấn cho cổ, lưng hoặc chân váy...</p>
							
						</div>
					</div>
					<div class="col-md-12 thongtin-ctsp" style="background:none"><h3 class="title-title-HOT" style="margin:10px 0;background:none">SẢN PHẨM CÙNG DANH MỤC</h3></div>
						<div class="col-md-12" style="background:#222222;padding:2px 0;margin-bottom:16px"> </div>
					<div class="row hangthu2">
					<?php
						$sql= "select * From Sanpham LIMIT 3";
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
					</div><!--END ROW2-->
					
					<div class="col-md-12">&nbsp </div>
					<div class="col-md-12">&nbsp </div>
				</div>
			</div><!-- End Content-->
			<footer id="footer">
				<section class="end-footer">
					<article class="dangkynhantin">
						<div class="container">
							<div class="row">
								<div class="col-md-6"><span class="dknt-title">Đăng ký ngay Email nhận tin khuyến mãi từ KANG</span></div>
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
								<p><i class="glyphicon glyphicon-chevron-up footicon"></i>Email : kangwedding@gmail.com</p>
								<p><i class="glyphicon glyphicon-chevron-up footicon"></i>Websites : kangwedding.TK</p>
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