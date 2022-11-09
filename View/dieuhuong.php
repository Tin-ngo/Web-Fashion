<?php 
$act = isset($_GET['act']) ? $_GET['act'] : null;
switch($act){
	case 'home':
		require "home.php";
		break;
	case "cuahang":
		require "cuahang.php";
		break;
	default:
		require "home.php";
		break;
}
?>