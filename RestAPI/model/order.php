<?php 
require_once('model.php');
class Order extends Model 
{
	var $table = "orders";
	var $contens = "idOrder";

	public function delete_details($idOrder){
		// $query = "DELETE FROM orders WHERE idOrder = $idOrder;
		// 			DELETE FROM orderdetails WHERE idOrder = $idOrder;";
		$query = "DELETE orders, orderdetails FROM orders
					INNER JOIN orderdetails ON orders.idOrder = orderdetails.idOrder
					WHERE orders.idOrder = $idOrder";

		$status = $this->conn->query($query);
		if($status == true){
			setcookie('msg', 'xóa thành công', time()+2);
		}else{
			setcookie('msg', 'Xóa không thành công', time()+2);
		}

		//header('Location: ?mod=',$this->table);
		return $status;
	}

	public function read_details($idOrder){
		$query = "SELECT * FROM orders 
					INNER JOIN orderdetails ON orders.idOrder = orderdetails.idOrder
					INNER JOIN user ON orders.idUser = user.idUser
					INNER JOIN product ON orderdetails.idProduct = product.idProduct
					 WHERE orders.idOrder = ".$idOrder;
		$result = $this->conn->query($query);
		$data = array();
		while($row = $result->fetch_assoc()){
			$data[] = $row;
		}
		return $data;
	}

	public function update_status($idOrder, $new_status){
		$query = "UPDATE orders SET status = $new_status WHERE idOrder = $idOrder";
		$status = $this->conn->query($query);
		return $status;
	}
}
?>