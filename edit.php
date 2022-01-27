<!doctype html>
<html>
<head>
    <title>edit data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="alert alert-info">edit data</h2>

    <?php
    require 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $id=$_POST['id'];
        $txtnama = $_POST['txtnama'];
        $txtdeskripsi = $_POST['txtdeskripsi'];
        $intharga = $_POST['intharga'];
        $intstok = $_POST['intstok'];

        $sql = "UPDATE barang SET 
        nama='$txtnama',deskripsi='$txtdeskripsi',harga='$intharga',stok='$intstok' WHERE id=$id";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: index1.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }else{
        $id=$_GET['id'];
        $query="SELECT * FROM barang WHERE id=$id";
        $sql=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_object($sql);

    }

    ?>

    <form action="" method="post">
        <input type="hidden" name="txtid" value="<?=$id?>">
        <div class="mb-3">
            <label>nama</label>
            <input required type="text" name="txtnama" class="form-control" value="<?=$data->nama;?>">
        </div>

        <div class="mb-3">
            <label>deskripsi</label>
            <input type="text" name="txtdeskripsi" class="form-control" value="<?=$data->deskripsi?>">
        </div>

        <div class="mb-3">
            <label>harga</label>
            <textarea name="intharga" class="form-control" cols="10" rows="1">
                <?=$data->harga;?>
            </textarea>
        </div>

        <div class="mb-3">
            <label>stok</label>
            <input type="int" name="intstok" class="form-control" value="<?=$data->stok;?>">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

</div>
</body>
</html>