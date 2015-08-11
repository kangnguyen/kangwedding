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
	$vaitro=0;
	
	$dsn=('mysql:host=localhost;dbname=rinwedding');
	$db= new PDO($dsn,'root','');
	
			if (empty($matk) or empty($pass) or empty($pass1)) { 											
				$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 100%;" ><span>Vui lòng điền đầy đủ thông tin</h4>';
			}else if ($pass != $pass1) {
				$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 100%;" ><span>Mật Khấu không khớp. </h4>';
			
			}else{
				$them="INSERT INTO TaiKhoan VALUES ('$matk','$pass','$tentv','$sex','$diachi','$sodt','$vaitro')";
				$check=$db->exec($them);
				if ($check==1){
					$_SESSION['namedn']=$matk;
					header('Location:../index.php');
					exit();
				}else {
					$_SESSION['baoloi']= '<h4 style="color:red;text-align:right;width: 100%;" ><span>Tài khoản đã tồn tại.</h4>';}
			
			}
	
	header('Location:dangky.php')
?>
