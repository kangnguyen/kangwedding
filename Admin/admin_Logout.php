<?php
	session_start();
	session_unset();
	session_destroy();
	header('Location:admin_Login.php')

?>