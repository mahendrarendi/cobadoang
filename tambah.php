<!DOCTYPE html>
<html>

<head>
	<title>Nota Apps</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Barang
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" name="tanggal" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Pelanggan</label>
						<input type="text" name="pelanggan" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>
					<div class="form-group">
						<label>Satuan</label>
						<select class="form-control" name="satuan">
							<option value="#">Satuan</option>
							<option value="kg">KG</option>
							<option value="lembar">Lembar</option>
						</select>
					</div>
					<div class="form-group">
						<label>Qty</label>
						<input type="number" name="qty" class="form-control">
					</div>
					<div class="form-group">
						<label>Bayar</label>
						<input type="number" name="bayar" class="form-control">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>
					
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
					<button class="btn btn-warning" onclick="location.href='index.php'">Kembali</button>

				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$tanggal = $_POST['tanggal'];
					$pelanggan = $_POST['pelanggan'];
					$alamat = $_POST['alamat'];
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$satuan = $_POST['satuan']; 
					$qty = $_POST['qty'];
					$bayar = $_POST['bayar'];
					$deskripsi = $_POST['deskripsi'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into barang (tanggal,pelanggan,alamat,nama,harga,satuan,qty,bayar,deskripsi)values('$tanggal','$pelanggan','$alamat','$nama', '$harga','$satuan' ,'$qty','$bayar', '$deskripsi')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='nota.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>