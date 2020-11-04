<?php
	include('API/getData.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Arkademy</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="js/sweetalert.js"></script>
</head>
<body>
	<header class="mb-3">
		<nav id="navbar-example2" class="navbar navbar-dark bg-dark pr-5 pl-5" style="height: 100px">
			<a class="navbar-brand ml-5" href="#" style="font-size: 30px;">Arkademy</a>
			<ul class="nav nav-pills">
				<li class="nav-item mr-2">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">Tambah Produk</button>
				</li>
			</ul>
		</nav>
	</header>

	<!-- Modal Untuk Tambah Data Book -->
	<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="productModalLabel">Tambah Produk</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="./API/addData.php" method="post">
	          <div class="form-group">
	            <label for="product-name" class="col-form-label">Nama Produk:</label>
	            <input type="text" name="product-name" class="form-control" id="product-name">
	          </div>
			  <div class="form-group">
	            <label for="information" class="col-form-label">Keterangan:</label>
	            <input type="text" name="information" class="form-control" id="information-name">
	          </div>
			  <div class="form-group">
	            <label for="price" class="col-form-label">Harga:</label>
	            <input type="text" name="price" class="form-control" id="price-name">
	          </div>
			  <div class="form-group">
	            <label for="amount" class="col-form-label">Jumlah:</label>
	            <input type="text" name="amount" class="form-control" id="amount-name">
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
	        <button type="submit" name="insertDataProduct" class="btn btn-primary">Simpan</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- Modal untuk detail data produk -->
	<div class="modal fade" id="detailProduct" tabindex="-1" aria-labelledby="detailBookLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="detailProductLabel">Detail Book</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        	<div class="text-center">
	        		<img src="./assets/clothes.png" class="rounded img-fluid" style="height:250px" alt="...">
	        	</div>
	        	<div class="mr-3 ml-5">
		        	<table class="table table-borderless">
		        		<tbody>
		        			<tr>
		        				<th scope="row">ID Produk</th>
		        				<td><span id="id-product"></span></td>
		        			</tr>
		        			<tr>
		        				<th scope="row">Nama Produk</th>
		        				<td><span id="name-product"></span></td>
		        			</tr>
		        			<tr>
		        				<th scope="row">Keterangan</th>
		        				<td><span id="information"></span></td>
		        			</tr>
		        			<tr>
		        				<th scope="row">Harga</th>
		        				<td><span id="price"></span></td>
		        			</tr>
		        			<tr>
		        				<th scope="row">Jumlah</th>
		        				<td><span id="amount"></span></td>
		        			</tr>
		        		</tbody>
		        	</table>
	        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal Untuk Delete Data Produk -->
	<div class="modal fade" id="deleteProduct" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="productModalLabel">Hapus Produk</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
		  <form action="./API/deleteData.php" method="post">
	      	<div class="modal-body">
	          <input type="hidden" name="id_product" id="id-product">
			  <p>Apa kamu yakin untuk menghapus data tersebut?</p>
	      	</div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
	        <button type="submit" name="deleteDataProduct" class="btn btn-primary">Iya</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- Modal Untuk Tambah Data Book -->
	<div class="modal fade" id="updateProduct" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="productModalLabel">Edit Produk</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="./API/editData.php" method="post">
				<input type="hidden" name="id_product" id="id-product">
	          <div class="form-group">
	            <label for="product-name" class="col-form-label">Nama Produk:</label>
	            <input type="text" name="product-name" class="form-control" id="product-name">
	          </div>
			  <div class="form-group">
	            <label for="information" class="col-form-label">Keterangan:</label>
	            <input type="text" name="information" class="form-control" id="information">
	          </div>
			  <div class="form-group">
	            <label for="price" class="col-form-label">Harga:</label>
	            <input type="text" name="price" class="form-control" id="price">
	          </div>
			  <div class="form-group">
	            <label for="amount" class="col-form-label">Jumlah:</label>
	            <input type="text" name="amount" class="form-control" id="amount">
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
	        <button type="submit" name="updateDataProduct" class="btn btn-primary">Simpan</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- List -->
	<div class="container">
		<h1 class="text-center">Daftar Produk</h1>
		<div class="row mt-4 mb-2 text-center">
			<?php
			$check_book = mysqli_num_rows($queryResult)>0;
			if ($check_book) {
				while ($row = mysqli_fetch_assoc($queryResult)) {
					?>
					<div class="col-md-4 col-sm-4 mb-2 d-flex align-items-stretch">
						<div class="card">
							<img src="./assets/clothes.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title"><?php echo $row['nama_produk'];?></h5>
								<p class="card-text">Keterangan : <?php echo $row['keterangan'];?></p>
								<a class="btn btn-danger" data-toggle="modal" data-target="#deleteProduct" data-whatever="Hapus Produk" data-id=<?php echo $row['id'];?>>Hapus</a>
								<a class="btn btn-primary" data-toggle="modal" data-target="#detailProduct" data-whatever="Detail Produk" data-id=<?php echo $row['id'];?> data-name=<?php echo $row['nama_produk'];?> data-information=<?php echo $row['keterangan'];?> data-price=<?php echo $row['harga'];?> data-amount=<?php echo $row['jumlah'];?>>Detail</a>
								<a class="btn btn-primary" data-toggle="modal" data-target="#updateProduct" data-whatever="Edit Produk" data-id=<?php echo $row['id'];?> data-name=<?php echo $row['nama_produk'];?> data-information=<?php echo $row['keterangan'];?> data-price=<?php echo $row['harga'];?> data-amount=<?php echo $row['jumlah'];?>>Edit</a>
							</div>
						</div>
					</div>
					<?php
				}
			}else{
				echo "No data";
			}
			?>

		</div>
	</div>



	<?php
		if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
			?>
			<script type="text/javascript">
				swal({
					title: "<?php echo $_SESSION['status'];?>",
					icon: "<?php echo $_SESSION['status_code'];?>",
					button: "Oke",
				});
			</script>
			<?php
			unset($_SESSION['status']);
		}
	?>


	<hr>
	<footer class="container-md">
		<p>© Ardi Mardiansyah 2020</p>
	</footer>
</body>
</html>

<script type="text/javascript">
	$('#addProduct').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget)
		var modal = $(this)
		modal.find('.modal-title').text('Tambah Produk')
		// modal.find('.modal-body input').val("recipient")
	})

	$('#detailProduct').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) 
		var recipient = button.data('whatever')
		var modal = $(this)
		modal.find('.modal-title').text(recipient)
		modal.find('.modal-body input').val(recipient)

		// Inisialisasi data
		var id = button.data('id');
		var name = button.data('name');
		var information = button.data('information');
		var price = button.data('price');
		var amount = button.data('amount');

		// Masukan Data
		$('#id-product').text(id);
		$('#name-product').text(name);
		$('#information').text(information);
		$('#price').text(price);
		$('#amount').text(amount);
	})

	$('#deleteProduct').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) 
		var recipient = button.data('whatever')
		var modal = $(this)
		modal.find('.modal-title').text(recipient)
		
		var id = button.data('id');
		modal.find('#id-product').val(id);
	})

	$('#updateProduct').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) 
		var recipient = button.data('whatever')
		var modal = $(this)
		modal.find('.modal-title').text(recipient)
		// Inisialisasi data
		var id = button.data('id');
		var name = button.data('name');
		var information = button.data('information');
		var price = button.data('price');
		var amount = button.data('amount');
		// Masukan data ke input
		modal.find('#id-product').val(id);
		modal.find('#product-name').val(name);
		modal.find('#information').val(information);
		modal.find('#price').val(price);
		modal.find('#amount').val(amount);
	})

</script>

<style>
	
</style>