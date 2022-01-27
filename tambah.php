
<!doctype html>
<html>
<head>
    <title>Tambah barang</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h2 class="alert alert-info">Tambah barang</h2>

    <?php
    require 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $txtnama = $_POST['txtnama'];
        $txtdeskripsi = $_POST['txtdeskripsi'];
        $intharga = $_POST['intharga'];
        $intstok = $_POST['intstok'];

        $sql = "INSERT INTO barang VALUES (NULL, '$txtnama', '$txtdeskripsi', '$intharga', '$intstok')";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: index1.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }
    ?>

    <form action="" method="post">

        <div class="mb-3">
            <label>nama</label>
            <input required type="text" name="txtnama" class="form-control">
        </div>

        <div class="mb-3">
            <label>deskripsi</label>
            <input type="text" name="txtdeskripsi" class="form-control">
        </div>

        <div class="mb-3">
            <label>harga</label>
            <textarea name="intharga" class="form-control" cols="10" rows="1"></textarea>
        </div>

        <div class="mb-3">
            <label>stok</label>
            <input type="int" name="intstok" class="form-control">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

</div>
</body>
</html>