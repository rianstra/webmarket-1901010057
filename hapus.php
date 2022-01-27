<?php
require 'koneksi.php';
$id=$_GET['id'];
$query="DELETE FROM barang WHERE id=$id";
$sql= mysqli_query($koneksi,$query);
if ($sql) {
	echo "data berhasil dihapus";
	header('location:index1.php');
}else {
	echo "data gagal terhapus";
}