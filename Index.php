<?php
error_reporting(0);
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UTS_RevikeAdeniaPrahadany</title>
	<link rel="stylesheet" href="style1.css">
</head>

<body>
	<h1 style="text-align: center;">Data Donasi Mahasiswa UNS PSDKU</h1>
	<center><a href="InputDataDonasi.php">Tambah Data</a></center>
	<br>
	<table border="1" style="margin: auto;">
		<thead>
			<tr>
				<th>Id Mahasiswa</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Tanggal Donasi</th>
				<th>Jenis Kelamin</th>
				<th>Daerah</th>
				<th>Jumlah Donasi</th>
				<th>Metode Pembayaran</th>
                <th>Jenis Donasi</th>
                <th>Foto</th>
				<th>Edit</th>
				<th>Hapus</th>
			</tr>
		</thead>
		<?php $result = mysqli_query($koneksi, "SELECT * FROM data_donasi"); ?>
		<?php foreach ($result as $row) : ?>
			<tbody>
				<tr>
					<td><?php echo $row['id_mahasiswa']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['nim']; ?></td>
					<td><?php echo $row['tanggal_donasi']; ?></td>
					<td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['daerah']; ?></td>
					<td><?php echo $row['jumlah_donasi']; ?></td>
                    <td><?php echo $row['metode_pembayaran']; ?></td>
					<td><?php echo $row['jenis_donasi']; ?></td>
					<td>
						<center>
							<img src="image/<?= $row['foto']; ?>" border="0" width="70px" height="70px">
						</center>
					</td>
					<td>
						<a href="EditDataDonasi.php?id_mahasiswa=<?php echo $row['id_mahasiswa'];?>">Edit</a></center></td>
                	<td>
						<a href="HapusDataDonasi.php?id_mahasiswa=<?php echo $row['id_mahasiswa'];?>">Hapus</a></center></td>
						</tr>
			</tbody>
		<?php endforeach; ?>
	</table>
</body>

</html>
