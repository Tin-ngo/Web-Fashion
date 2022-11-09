<?php 
header("Content-Type:application/json; charset=utf-8'");
header("Access-Control-Allow-Origin: *");


require_once "../model/product.php";
$product_obj = new Product();

$search = isset($_GET['search']) ? $_GET['search'] : null;
if(!empty($search)){
	$data = $product_obj->search_full($search);
	if(empty($data))
		$product_obj->deliver_response(200, "Dữ liệu nhận về rỗng, không tìm thấy dữ liệu nào", null);
	else
		$product_obj->deliver_response(200, "find OK, tìm thấy dữ liệu", $data);
}else{
	$product_obj->deliver_response(400, "Yêu cầu không hợp lệ!", null);
}

//http://localhost:8080/WORK_SPACE/dacn1_fashion/RestAPI/size/read_one.php?id=19
?>