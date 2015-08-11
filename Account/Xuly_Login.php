<?php
	$db = mysqli_connect("localhost","root","","rinwedding");
	session_start();
	$_SESSION['valid']= "";
	if (isset($_POST['OK'])){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$user=$_POST['TenDN'];
			$pass=$_POST['PassDN'];
			$query="SELECT * FROM TaiKhoan WHERE TenTK='".$user."' AND PassTK='".$pass."'";
			$check=mysqli_query($db, $query);
			if (empty($user) and empty($pass)) {
				$_SESSION['valid']= "Vui lòng điền thông tin.";
				header('Location:Login.php');
			}else if (mysqli_num_rows($check)==0){
				$_SESSION['valid']= "Tên đăng nhập và mật khẩu không đúng";
				header('Location:Login.php');
			}else{
					$_SESSION['namedn']=$user;
					$_SESSION['passdn']=$pass;
					header('Location:../view/lietke.php?dichvu=aocuoi');
				}	
		}else{ header('location:Login.php');}
	}else{ header('Location:dangky.php');}