<?php 
session_start();
$userName = isset($_GET['userName']) ? $_GET['userName'] : null;
$idUser = isset($_GET['idUser']) ? $_GET['idUser'] : null;
if(isset($userName) && isset($idUser) && $userName!=undefined && $idUser!=undefined){
	$_SESSION['userName'] = $userName;
	$_SESSION['idUser'] = $idUser; 
	header("location: ./");
}else{
	header("location: admin/login.php");
	$_SESSION['error_login'] = "Email hoặc mật khẩu không đúng.<br> Vui lòng nhập lại!";
}
?>