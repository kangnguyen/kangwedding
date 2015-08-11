<?php
	session_start();
	if(isset($_SESSION['namedn'])==False){
		header('Location:admin_Login.php');
	}
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
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav quatrai">
										<li class="metghe"><a href="admin_index.php">Home</a></li>
										<li class="metghe"><a href="admin_XTV.php">QL Thành Viên</a></li>
										<li class="metghe"><a href="admin_SP.php">QL Sản Phẩm</a></li>
										<li class="metghe"><a href="admin_HOADON.php">QL Hóa Đơn</a></li>
										<li class="metghe"><a href="admin_ThongKe.php">Thống Kê</a></li>
										<li class="metghe">
											<a href="admin_Logout.php">Chào  <span style="color:#d310d5"><?php echo $_SESSION['namedn'];?> </span>,THOÁT</a>
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
				<div class="container fix006">
					<div class="row ad2">
							
							<div class="col-md-4 ad3">
								<h3>DANH MỤC QUẢN LÝ</h3>
								<p class="dmql"><a href="admin_XTV.php">Quản lý Thành Viên</a></p>
								<p class="dmql"><a href="admin_SP.php">Quản lý Sản Phẩm</a></p>
								<p class="dmql"><a href="admin_HOADON.php">Quản lý Đơn Hàng</a></p>
								<p class="dmql"><a href="admin_ThongKe.php">Thống Kê</a></p>
							</div>
							<div class="col-md-8" style="margin-top:10px">
								<h3>THỐNG KÊ </h3>
								<div>
										<div class="col-md-3 tk1">Mã Sản Phẩm</div>
										<div class="col-md-4 tk1" style="margin-top:0">Tên Sản Phẩm</div>
										<div class="col-md-2 tk1">SL Đã Bán</div>
										<div class="col-md-3 tk1" style="border:none">Tổng Tiền</div>
								</div>
								<?php
										$db = mysqli_connect("localhost","root","","rinwedding");
										$sql= "SELECT SanPham.MaSP,SanPham.TenSP,Sum(ChiTietHD.SoLuong),SUm(CHiTietHD.ThanhTien) FROM ChiTietHD,SanPham WHERE SanPham.MaSp=ChiTietHD.MaSP Group By ChiTietHD.MaSP Order By SUm(ChiTietHD.SoLuong) DESC";
										$query=mysqli_query($db,$sql);
										while($sanpham = mysqli_fetch_row($query)) {
											echo '<div class="row" style="margin:0">';
											echo	'<div class="col-md-3 tk2">'.$sanpham[0].'</div>';
											echo	'<div class="col-md-4 tk2" style="margin-top:0">'.$sanpham[1].'</div>';
											echo	'<div class="col-md-2 tk2">'.$sanpham[2].'</div>';
											echo	'<div class="col-md-3 tk2">'.number_format($sanpham[3]).' Vnđ</div>';
											echo '</div>';
										}	
										$sql1= "select Sum(SoLuong),Sum(ThanhTien) From ChiTietHD ";
										$query=mysqli_query($db,$sql1);
										while($sanpham = mysqli_fetch_row($query)) {	
											echo '<div class="col-md-12 tongt" style="padding:0;color:#222;margin-top:10px; border-top:5px solid #c1c1c1;padding-top:5px">';
											echo '<h5><Span>Tổng Số lượng bán được : <em style="color:red">'.$sanpham[0].'</em> Sản Phẩm </span><Span style="text-align:right">Tổng Doanh Thu : <em style="color:red">'.number_format($sanpham[1]).'</em> VNĐ</span></h5>';
											echo '</div>';
										}
								?>
								
							</div>
					</div>
				</div>
			</div><!-- End Content-->
			
		</div>
		<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/docs.min.js"></script>
		
		<script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});</script>
		<div id='bttop'><span><img src="images/top.png" width="40px" height="40px"/></span></div> <!--TOP-->
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