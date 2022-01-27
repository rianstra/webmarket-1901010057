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


		<a href="login.php ?>" class="btn btn-info">login akun</a>

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
							

						</td>

					</tr>
					<?php
						}
					?>

			</tbody>
		</table>
		<body>
	<div class="container">
		<h2 class="alert alert-info"> 
			login untuk membeli barang yang anda inginkan
			
		</h2>

</div>
</body>
</body>
</html>

  