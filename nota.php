

<!DOCTYPE html>
<html>
<head>
	<title>Nota Apps</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="shortcut icon" href="assets/gambar/ppp.png">

<body>
<!-- <h5><?php echo date("l, d-M-Y H:i:s"); ?></h5> -->


<div class="container col-md-12 mt-4">
		<a href="tambah.php" class="btn btn-sm btn-primary ">TAMBAH NOTA</a>
		<a href="logout.php" class="btn btn-sm btn-danger "><span>LOGOUT</span></a>
		<a class="btn btn-sm btn-info float-right "><?php echo date("l, d-M-Y"); ?></a>

		<br>
		<br>
		<div class="card">
			<div class="card-header bg-success text-white ">
				DATA NOTA 

				<!-- <form action="nota.php" method="get" class="float-right mr-2">
                <input type="text" name="cari" placeholder="Cari data...">
                <input type="submit" value="Cari">
            	</form> -->
				
				<form action="nota.php" method="get" class="form-inline my-2 my-lg-0 float-right">
						<input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search..." aria-label="Search">
						<button class="btn btn-alert my-2 my-sm-0" type="submit">Cari</button>
				</form>

				
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th width="115px">Tanggal</th>
							<th>Nama Pelanggan</th>
							<th width="200px">Alamat</th>
							<th>Nama Barang</th>
							<th width="110px">Harga</th>
							<th>Satuan</th>
							<th>Qty</th>
							<th width="200px">Deskripsi</th>
							<th width="130px">Total</th>
							<th>Bayar</th>
							<th>Hutang</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						
					<?php
                        include('koneksi.php'); //memanggil file koneksi
                        if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];
                            $datas = mysqli_query($koneksi, "select * from barang WHERE pelanggan like '%".$cari."%' order by id DESC") or die(mysqli_error($koneksi));
                        }else{
                            $datas = mysqli_query($koneksi, "select * from barang order by id DESC") or die(mysqli_error($koneksi));
                        }

                        $no = 1;//untuk pengurutan nomor

                        //melakukan perulangan
                        while($row = mysqli_fetch_assoc($datas)) {
                    ?>   

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['tanggal']; ?></td>
						<td><?= $row['pelanggan']; ?></td>
						<td><?= $row['alamat']; ?></td>
						<td><?= $row['nama']; //untuk menampilkan nama ?></td>
						<td>Rp. <?= number_format($row['harga']) ; ?></td>
						<td><?= $row['satuan']; ?></td>
						<td><?= $row['qty']; ?></td>
						<td><?= $row['deskripsi']; ?></td>
						<td>Rp. <?= number_format($row['harga'] * $row['qty']) ; ?></td>
						<td>Rp. <?= number_format($row['bayar']) ; ?></td>
						<td>Rp. <?= number_format($row['harga'] * $row['qty'] - $row['bayar']) ; ?></td>

						<td>
							<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
							<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
							<a href="print.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-info" onclick="cetak(<?= $row['id']; ?>)">Cetak</a>

								<!-- <button type="button" class="btn btn-sm btn-info" onClick="window.print()">Cetak</button> -->
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- <script>
		function cetak(id){
			var cetak = window.open("print.php?id="+id, "cetak", "height=600,width=800");
			cetak.print();
		}
	</script> -->

<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>