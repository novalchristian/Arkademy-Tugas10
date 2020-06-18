<?php
include 'koneksi.php';
$TABLE_NAME = 'produk';

$nama = $_POST['namaproduk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// query SQL untuk update data
$query="UPDATE $TABLE_NAME SET keterangan='$keterangan',harga='$harga',jumlah='$jumlah'  WHERE nama_produk='$nama'";

mysqli_query($conn, $query);

if (!$query) {
	die ('ERROR: Data gagal diedit pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}

echo '<script>alert("Data Berhasil Diperbarui");' ;
echo 'window.location.href = "tampil_data.php";</script>'
// mengalihkan ke halaman index.php

//header("location:tampil_data.php");
?>