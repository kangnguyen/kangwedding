<?php
	session_start();
	
	$_SESSION['baoloi']="";
	$matk = $_POST['Uname'];
	$pass=$_POST['Upass'];
	$pass1=$_POST['Upass1'];
	$tentv = $_POST['HoTen'];
	if (isset($_POST['GTinh'])) {$sex=$_POST['GTinh'];}
	$diachi = $_POST['DiaChi'];
	$sodt=$_POST['SoDT'];
	if (isset($_POST['VaiTro'])){ $vaitro=$_POST['VaiTro'];}
	
	$dsn=('mysql:host=localhost;dbname=rinwedding');
	$db= new PDO($dsn,'root','');
	if (isset($_POST['OK']))
	{
			if (empty($matk) or empty($pass) or empty($pass1)) { 											
				$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Vui lòng điền đầy đủ thông tin</h4>';
			}else if ($pass != $pass1) {
				$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Mật Khấu không khớp. </h4>';
			
			}else{
				$them="INSERT INTO TaiKhoan VALUES ('$matk','$pass','$tentv','$sex','$diachi','$sodt','$vaitro')";
				$check=$db->exec($them);
				if ($check==1){
					$_SESSION['baoloi']= '<h4 style="color:green;text-align:right;width: 67%;" ><span>Thêm mới thành công.</h4>';
				}else {
					$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Tài khoản đã tồn tại.</h4>';}
			
			}
	}else if (isset($_POST['FIX']))
	{
		if ($matk !=""){
			if ($pass!=""){
				$sua ="UPDATE TaiKhoan SET PassTK='".$pass."' Where TenTK='".$matk."'";
			}
			if ($tentv!=""){
				$sua ="UPDATE TaiKhoan SET HoTen='".$tentv."' Where TenTK='".$matk."'";
			}
			if ($sex!=""){
				$sua ="UPDATE TaiKhoan SET GioiTinh='".$sex."' Where TenTK='".$matk."'";
			}
			if ($diachi!=""){
				$sua ="UPDATE TaiKhoan SET DiaChi='".$diachi."' Where TenTK='".$matk."'";
			}
			if ($sodt!=""){
				$sua ="UPDATE TaiKhoan SET SoDT='".$sodt."' Where TenTK='".$matk."'";
			}
			if ($vaitro!=""){
				$sua ="UPDATE TaiKhoan SET VaiTro='".$vaitro."' Where TenTK='".$matk."'";
			}
			$sql=$db->query($sua);
			$_SESSION['baoloi']= '<h4 style="color:green;text-align:right;width: 67%;" ><span>Chỉnh sửa thành công.</h4>';
		}else{$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Bạn chưa nhập Tên Tài Khoản cần sửa.</h4>';}
	}else{
		if ($matk !=""){
			$del ="Delete From TaiKhoan Where TenTK='".$matk."'";
			$sql=$db->query($del);
			$_SESSION['baoloi']= '<h4 style="color:green;text-align:right;width: 67%;" ><span>Xóa thành công.</h4>';
		}else{$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Bạn chưa nhập Tên Tài Khoản cần xóa.</h4>';}
	}
	header('Location:admin_TV.php')
?>
