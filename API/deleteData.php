<?php
	include 'conn.php';

	if(isset($_POST['deleteDataProduct'])){
		$id=$_POST['id_product'];
		$connect->query("DELETE FROM produk WHERE id=".$id);

		if ($connect){
			$_SESSION['status']="Delete Data Successfully";
			$_SESSION['status_code']="success";
			header('Location: ../index.php');
		}else {
			$_SESSION['status']="Data Not Deleted";
			$_SESSION['status_code']="error";
		}
	}
?>