<?php 
class Controller{
	function __construct(){

	}

	public function Get_All($url){
		//Resourse Address        
		//$url = "http://localhost:8080/WORK_SPACE/dacn1_fashion/RestAPI/category/read.php";

	    //Khởi tạo curl với url đã cho       
		$client = curl_init($url);

	    // CURLOPT_RETURNTRANSFER: để khi gửi yêu cầu bằng curl_exec trả về chuỗi chứ không xuất ra màn hình
	    // tùy chọn để chuyển url thành gì
	    // cấu hình thông số cho curl
		curl_setopt($client,CURLOPT_RETURNTRANSFER,1);

	    //get response from resource
	    // được gọi sau khi đặt tùy chọn cho url
	    // thực thi curl
		$response = curl_exec($client);

	    //echo $response;

	    //decode        
		$result = json_decode($response, TRUE);

		// copy mảng $result sang $data nhưng không lấy cái status 
		$data = array();
		foreach($result as $key=>$value){
			if(is_numeric($key)){
				$data[] = $value;
			}
		}

		// ngắt curl - giải phóng
		curl_close($client);
		
		//var_dump($data);

		// hiển thị dữ liệu
		// foreach($data as $key=>$value){
		// 	echo $value['categoryName'];
		// }
		return $data;
	}


	public function Find($url){
		$client = curl_init($url);
		curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($client); 
		$result = json_decode($response, TRUE);

		$data = array();
		foreach($result as $key=>$value){
			if(is_numeric($key)){
				$data[] = $value;
			}
		}
		//var_dump($data);
		// ngắt curl - giải phóng
		curl_close($client);
		return $data;
	}

	
}
?>