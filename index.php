
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>penjualan</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h2 class="alert alert-info"> 
			Selamat datang di tokodia:
			
		</h2>


		<a href="login.php ?>" class="btn btn-info">login admin</a>

		<a href="buatakun.php ?>" class="btn btn-info">buat akun</a>

		
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>nama</th>
					<th>deskripsi</th>
					<th>harga</th>
					<th>stok</th>
					
				</tr>
			</thead>

			<tbody>
				<?php
				require 'koneksi.php';
				$query = "	select * from barang";
				$sql = mysqli_query($koneksi, $query);
				$no = 1;
				while ($data = mysqli_fetch_object($sql)) {
					?>

					<tr>
						<td> <?php echo $no++ ?> </td>
						<td> <?= $data->nama; ?> </td>
						<td> <?= $data->deskripsi; ?> </td>
						<td> <?= $data->harga; ?> </td>
						<td> <?= $data->stok; ?> </td>
						<td>

							<a href="transaksi.php?>?id=<?= $data->id;?>">
							<input type="submit" value="langsung beli" onclick="confirm('yakin ingin membeli') " class="btn btn-danger">
							</a>
							

						</td>

					</tr>
					<?php
						}
					?>

			</tbody>
		</table>
			
		</h2>
<body>
<div class="container">
    <h2 class="alert alert-info">Tulis pesanan</h2>

		<form action="" method="post">

        <div class="mb-3">
            <label>nama</label>
            <input required type="text" name="txtauthor" class="form-control">
        </div>

        <div class="mb-3">
            <label>jumlah</label>
            <input type="text" name="txttitle" class="form-control">
        </div>

       
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
	</div>

</div>
</body>
</body>
</html>

  