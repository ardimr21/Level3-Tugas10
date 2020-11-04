<?php

	include 'conn.php';
	
	if(isset($_POST['insertDataProduct'])){
		$nameProduct = $_POST['product-name'];
		$information = $_POST['information'];
		$price = $_POST['price'];
		$amount = $_POST['amount'];
		
		$connect->query("INSERT INTO produk (nama_produk,keterangan,harga,jumlah) VALUES ('".$nameProduct."','".$information."','".$price."','".$amount."')");

		if ($connect){
			$_SESSION['status']="Inserted Product Successfully";
			$_SESSION['status_code']="success";
			header('Location: ../index.php');
		}else {
			$_SESSION['status']="Data Product Not Inserted";
			$_SESSION['status_code']="error";
		}
	}
	

?>