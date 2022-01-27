<?php 
session_start();

if (!isset($_SESSION['login'])) {
	header('location: login.php');
	exit;
}
 ?>
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
			Selamat datang :
			
		</h2>
		<a href="tambah.php" class="btn btn-info">tambah data</a>

		<a href="logout.php" class="btn btn-secondary float-end mb-3">logout</a>


		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>nama</th>
					<th>deskripsi</th>
					<th>harga</th>
					<th>stok</th>
					<th>Aksi</th>
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
						

							
							<a href="hapus.php?id=<?= $data->id;?>">
							<input type="submit" value="hapus" onclick="confirm('yakin ingin menghapus data?') " class="btn btn-danger">
						</a>
							<a href="edit.php?id=<?= $data->id;?>">
							<input type="submit" value="edit" class="btn btn-warning">
							</a>
							</a>

						</td>

					</tr>
					<?php
						}
					?>

			</tbody>
		</table>
	


 

</div>
</body>
</body>
</html>

  