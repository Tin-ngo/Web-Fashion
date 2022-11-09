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
		$search = isset($_GET['search']) ? $_GET['search'] : null;
		if(isset($search)){
			$obj->searchProduct($search);
		}else{
			$obj->allProduct();
		}
		break;

	default:
		require_once "Controller/HomeController.php";
		$obj = new HomeController();
		$obj->dataHome();
		break;
}

?>