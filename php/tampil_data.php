<?php
include 'koneksi.php';

$table_name = 'produk';

$sql = 'SELECT * 
		FROM `' . $table_name . '`';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table border="1">
		<thead>
			<tr>
				<th>&nbsp; NAMA PRODUK&nbsp;</th>
				<th>&nbsp; KETERANGAN &nbsp;</th>
				<th>&nbsp; HARGA &nbsp;</th>
				<th>&nbsp; JUMLAH &nbsp;</th>
				<th colspan = "2">Menu Tindakan</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['nama_produk'].'</td>
			<td>'.$row['keterangan'].'</td>
			<td>'.$row['harga'].'</td>
			<td>'.$row['jumlah'].'</td>
			<td><a href="proses_hapus_data.php?nama_produk='.$row['nama_produk'].'">Hapus</a></td>
			<td><a href="edit_data.php?nama_produk='.$row['nama_produk'].'">Edit</a></td>
		</tr>';
}
echo '
	</tbody>
</table>';

//<td><a href="delete1.php?nim= <?php echo .$row[nim].; ">Delete2</td>
// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
?>
<html>
<a href="input_data.php"> <button type="submit" value="simpan">Tambah Data</button></a>
</html>