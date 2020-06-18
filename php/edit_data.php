<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>EDIT DATA</title>
</head>
<body>

	<h2>EDIT DATA</h2>
 
	<?php
	include 'koneksi.php';
    $table_name = 'produk';
	
	$nama = $_GET['nama_produk'];
	$data = mysqli_query($conn,"select * from $table_name where nama_produk ='$nama'");

	while($d = mysqli_fetch_array($data)){
		?>
		<div class="container card">
        <h2>EDIT DATA <?php echo $d['nama_produk']; ?></h2>
        <form action="update.php" method="POST">
            <input type="text" name="namaproduk" value="<?php echo $d['nama_produk']; ?>">
            <h3>Keterangan</h3>
            <input type="text" placeholder="Keterangan" name="keterangan" value="<?php echo $d['keterangan']; ?>" >
            <h3>Harga</h3>
            <input type="text" placeholder="masukkan Harga Barang" name="harga" value="<?php echo $d['harga']; ?>">
            <h3>Jumlah</h3>
            <input type="number" placeholder="Jumlah Barang" name="jumlah" value="<?php echo $d['jumlah']; ?>">
            <input class="submit" type="submit" value="PERBARUI">
        </form>
		<?php 
	}
	?>
</body>
</html>