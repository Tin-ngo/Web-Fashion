<?php 
$action = isset($_GET['act']) ? $_GET['act'] : null;
switch($action){
	case "home":
		require_once "Controller/HomeController.php";
		$obj = new HomeController();
		$obj->dataHome();
		break;
	case "cuahang":
		require_once "Controller/CuahangController.php";
		$obj = new Cuahang();
		$obj->allProduct();
		break;
	case "details":
		require_once "Controller/DetailsController.php";
		$obj = new Details();
		$obj->index();
		break;
	case "cart":
		require "Controller/CartController.php";
		$obj = new Cart();
		$obj->index();
		break;
	case "pay":
		require "Controller/PayController.php";
		$obj = new Pay();
		$obj->index();
		break;
	case 'order':
		require "Controller/PayController.php";
		$obj = new Pay();
		$obj->insert();
		break;
	default:
		require_once "Controller/HomeController.php";
		$obj = new HomeController();
		$obj->dataHome();
		break;
}

?>