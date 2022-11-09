<?php 
/**
 * 
 */
require_once "Controller.php";
class Cuahang extends Controller
{
	
	function __construct()
	{
		// code...
	}

	public function allProduct(){
		$allCategory = $this->Get_All("http://localhost:8080/WORK_SPACE/dacn1_fashion/RestAPI/category/read.php");
		$allProduct = $this->Get_All("http://localhost:8080/WORK_SPACE/dacn1_fashion/RestAPI/product/read.php");

		require "View/index.php";
	}

	public function searchProduct($key){
		$allCategory = $this->Get_All("http://localhost:8080/WORK_SPACE/dacn1_fashion/RestAPI/category/read.php");
		$allProduct = $this->Find("http://localhost:8080/WORK_SPACE/dacn1_fashion/RestAPI/product/find.php?search=".$key);

		require "View/index.php";
	}
}
?>