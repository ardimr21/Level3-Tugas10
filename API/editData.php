<?php

	include 'conn.php';
	
	if(isset($_POST['updateDataProduct'])){
		$id=$_POST['id_product'];
		$productName = $_POST['product-name'];
		$information = $_POST['information'];
		$price = $_POST['price'];
		$amount= $_POST['amount'];

		$connect->query("UPDATE produk SET id='".$id."', nama_produk='".$productName."', keterangan='".$information."', harga='".$price."', jumlah='".$amount."' WHERE id=". $id);
		if ($connect){
			$_SESSION['status']="Update Data Successfully";
			$_SESSION['status_code']="success";
			header('Location: ../index.php');
		}else {
			$_SESSION['status']="Data Not Update";
			$_SESSION['status_code']="error";
		}
	}

	
	

?>