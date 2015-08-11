<?php

	$mahd=$_POST['MaHD'];
	$tinhtrang=$_POST['TinhTrang'];
	$dsn=('mysql:host=localhost;dbname=rinwedding');
	$db= new PDO($dsn,'root','');
	$capnhat= "UPDATE HoaDon SET TinhTrang='".$tinhtrang."' Where MaHD='".$mahd."'";
	$sql=$db->query($capnhat);
	header('Location:admin_HOADON.php');
?>
