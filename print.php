<!DOCTYPE html>
<html>
<head>
    <title>Cetak Nota-<?php echo $d['pelanggan']; ?></title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="shortcut icon" href="assets/gambar/ppp.png">

<body>
    <?php
        include('koneksi.php');
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'") or die(mysqli_error($koneksi));
        while($d = mysqli_fetch_assoc($data)){
    ?>

    <img src="assets/gambar/ppp.png" alt="logo" style="float:left; width:100px; height:100px;">

    <p align="center" style="font-size: 22px; font-weight: bold;"><b>PT JAGO KALANG GROUP</b></p>
    <p align="center" style="font-size: 22px; font-weight: bold;"><b>Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145 </b></p>
    <p align="center" style="font-size: 22px; font-weight: bold;"><b> Telp 085648492585</b></p>
    <hr style="border-top: 2px solid black;">
    <hr style="border-top: 2px solid black;">

    <br>

    <h5><b>Tanggal</b> &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp : <?php echo $d['tanggal']; ?></h5>
    <h5><b>Nama Pelanggan</b> : <?php echo $d['pelanggan']; ?></h5>
    <h5><b>Alamat</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : <?php echo $d['alamat']; ?></h5>

    <div class="card-body">
        <table class="table table-bordered solid black">
            <thead>
                <tr>
                    <h5><th>Nama Barang</th></h5>
                    <h5><th>Harga</th></h5>
                    <h5><th>Satuan</th></h5>
                    <h5><th>Qty</th></h5>
                    <!-- <th>Deskripsi</th> -->
                    <h5><th>Total</th></h5>
                    <h5><th>Bayar</th></h5>
                    </tr>
            </thead>
            <tbody>
                
                <tr>
                    <h5><td><?= $d['nama']; ?></td></h5>
                    <h5><td>Rp. <?= number_format($d['harga']) ; ?></td></h5>
                    <h5><td><?= $d['satuan']; ?></td></h5>
                    <h5><td><?= $d['qty']; ?></td></h5>
                    <!-- <td><?= $d['deskripsi']; ?></td> -->
                    <h5><td>Rp. <?= number_format($d['harga']*$d['qty']) ; ?></td></h5>
                    <h5><td>Rp. <?= number_format($d['bayar']) ; ?></td></h5>

                </tr>
               
            </tbody>
        </table>
    </div>
    <h5><b>Catatan : </b><?= $d['deskripsi']; ?></h5>
			<br>
            <br>
            <br>
			<br>
            <br>
			<br>
            <br>
			<br>

    <!-- <span style="text-align:left">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Penjualan &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </span>
	<span style="text-align:center">Pelanggan &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
	<span style="text-align:right">Disetujui</span> -->

    <span style="text-align:left; font-size: 22px; font-weight: bold;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Penjual &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
    <span style="text-align:center; font-size: 22px; font-weight: bold;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  Pelanggan &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
    <span style="text-align:right; font-size: 22px; font-weight: bold;">Disetujui</span>

	<br>
			<br>
			<br>
			<br>
			<br>
	<span style="text-align:left">  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp_____________________ &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
	<span style="text-align:center">____________________ &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </span>
	<span style="text-align:right">_____________________ </span>


    



    <?php } ?>
    <script>
        window.print();
    </script>
</body>
</html>