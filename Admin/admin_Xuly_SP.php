<?php
	session_start();
	
	$masp = $_POST['MaSP'];
	$tensp = $_POST['TenSP'];
	$dongia = $_POST['DonGia'];
	$mota = $_POST['MoTa'];
	$hinh=$_FILES['File']['name'];
	$type=$_FILES['File']['type'];
	$dsn=('mysql:host=localhost;dbname=rinwedding');
	$db= new PDO($dsn,'root','');
	$_SESSION['baoloi']="";
	if (isset($_POST['OK'])){
		if (empty($masp) or empty($tensp) or empty($dongia)) { 
			$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Vui lòng điền đầy đủ thông tin.</h4>';
		}else if (is_numeric($masp) or is_numeric($tensp) or is_numeric($dongia)== False) {
			$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Thông tin không hợp lệ.</h4>';
		}else if (empty($hinh)){
			$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Bạn chưa chọn ảnh cho sản phẩm.</h4>';
		}else if ($type == "image/jpeg" or $type == "image/png"){
				$path="../images/php/";
				$tmp_name=$_FILES['File']['tmp_name'];
				move_uploaded_file($tmp_name,$path.$hinh);
				
				$them="INSERT INTO SanPham VALUES ('$masp','$tensp','$dongia','$hinh','$mota')";
				$check=$db->exec($them);
				if ($check==1){
					$_SESSION['baoloi']= '<h4 style="color:green;text-align:right;width: 67%;" ><span>Thêm mới thành công.</h4>';
				}else {
					$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Sản phẩm đã tồn tại.</h4>';}
				
		}else{
				$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Hình ảnh phải là JPG, PNG.</h4>';
		}
	}else if (isset($_POST['FIX']))
	{
		if ($masp !=""){
			if ($tensp!=""){
			$sua ="UPDATE SanPham SET TenSp='".$tensp."' Where MaSP='".$masp."'";
			}
			if ($dongia!=""){
			$sua ="UPDATE SanPham SET DonGia='".$dongia."' Where MaSP='".$masp."'";
			}
			if ($hinh!=""){
			$sua ="UPDATE SanPham SET Img='".$hinh."' Where MaSP='".$masp."'";
			}
			if ($mota!=""){
			$sua ="UPDATE SanPham SET MoTa='".$mota."' Where MaSP='".$masp."'";
			}				
				$sql=$db->query($sua);
				$_SESSION['baoloi']= '<h4 style="color:green;text-align:right;width: 67%;" ><span>Chỉnh sửa thành công.</h4>';
		}else{$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Bạn chưa nhập Mã Sản Phẩm cần sửa.</h4>';}
	}else{
		if ($masp !=""){
			$del ="Delete From SanPham Where MaSP='".$masp."'";
			$sql=$db->query($del);
			$_SESSION['baoloi']= '<h4 style="color:green;text-align:right;width: 67%;" ><span>Xóa thành công.</h4>';
		}else{$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 67%;" ><span>Bạn chưa nhập Mã Sản Phẩm cần xóa.</h4>';}
	}
	header('Location:admin_SP.php');
?>

