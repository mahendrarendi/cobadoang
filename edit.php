<!DOCTYPE html>
<html>

<head>
	<title>GILACODING</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Barang</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Barang
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from barang where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" name="tanggal" class="form-control" value="<?= $row['tanggal']; ?>">
					</div>
					<div class="form-group">
						<label>Nama Pelanggan</label>
						<input type="text" name="pelanggan" class="form-control" value="<?= $row['pelanggan']; ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?= $row['alamat']; ?>">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
					</div>

					<div class="form-group">
						<label>Satuan</label>
						<select class="form-control" name="satuan" value="<?= $row['satuan']; ?>">
							<option value="#" placeholder="satuan"></option>
							<option value="KG">KG</option>
							<option value="LEMBAR">Lembar</option>
						</select>
					</div>

					<div class="form-group">
						<label>Qty</label>
						<input type="number" name="qty" class="form-control" value="<?= $row['qty']; ?>">
					</div>

					<div class="form-group">
						<label>Bayar</label>
						<input type="number" name="bayar" class="form-control" value="<?= $row['bayar']; ?>">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
					</div>
					
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Update Data</button>
					<!-- <button class="btn btn-warning" onclick="location.href='index.php'">Kembali</button> -->
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$tanggal = $_POST['tanggal'];
					$pelanggan = $_POST['pelanggan'];
					$alamat = $_POST['alamat'];
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$satuan = $_POST['satuan'];
					$qty = $_POST['qty'];
					$bayar = $_POST['bayar'];
					$deskripsi = $_POST['deskripsi'];
					$total = $_POST['total'];

					//query mengubah barang
					mysqli_query($koneksi, "update barang set tanggal='$tanggal', pelanggan='$pelanggan',alamat='$alamat', nama='$nama', harga='$harga', satuan='$satuan', qty='$qty', bayar='$bayar', deskripsi='$deskripsi' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='nota.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>