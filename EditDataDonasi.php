<?php
    error_reporting(0);
    include 'koneksi.php';

    if (isset($_GET["id_mahasiswa"])) {
        $id_mahasiswa = ($_GET["id_mahasiswa"]);

        $result = mysqli_query($koneksi, "SELECT * FROM data_donasi WHERE id_mahasiswa='$id_mahasiswa'");

        while ($row = mysqli_fetch_array($result)) {
 
        $id_mahasiswa= $row['id_mahasiswa'];
		$nama = $row['nama'];
        $nim = $row['nim'];
        $tanggal_donasi= $row['tanggal_donasi'];
        $jenis_kelamin= $row['jenis_kelamin'];
        $daerah = $row['daerah'];
        $jumlah_donasi = $row['jumlah_donasi'];
        $metode_pembayaran = $row['metode_pembayaran'];
        $jenis_donasi = $row['jenis_donasi'];
 		$foto =$row['foto'];
  
        }
    }
    else {
        header("location:index.php");
	}


?>

    </head>
    <body>
        <div class="input">
            <h2 style="text-align: center;">EDIT DATA DONASI</h2>
            <form action="ProsesEditDataDonasi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<label for="ID MAHASISWA"> ID MAHASISWA : </label><br>
                <input type="number" name="id_mahasiswa" id="id_mahasiswa" readonly value="<?php echo $id_mahasiswa; ?>" style ="margin-bottom: 15px; 
				font-size: medium; border-radius: 5px; height: 20px;"><br>
				
				<label for="nama"> NAMA : </label><br>
                <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>" style ="margin-bottom: 15px; font-size: medium; 
				border-radius: 5px; height: 20px;"><br>

                <label for="nim"> NIM : </label><br>
                <input type="text" name="nim" id="nim" value="<?php echo $nim; ?>" style ="margin-bottom: 15px; font-size: medium; 
				border-radius: 5px; height: 20px;"><br>

                <label for="tanggal_donasi"> TANGGAL DONASI : </label><br>
                <input type="date" name="tanggal_donasi" id="tanggal_donasi" value="<?php echo $tanggal_donasi; ?>" style ="margin-bottom: 15px; font-size: medium; 
				border-radius: 5px; height: 20px;"><br>

                <label for="jenis_kelamin"> JENIS KELAMIN : </label><br>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" style ="margin-bottom: 15px; font-size: medium; 
				border-radius: 5px; height: 20px;"><br>

                <label for="daerah"> DAERAH : </label><br>
                <input type="text" name="daerah" id="daerah" value="<?php echo $daerah; ?>" style ="margin-bottom: 15px; font-size: medium; 
				border-radius: 5px; height: 20px;"><br>

                <label for="jumlah_donasi"> JUMLAH DONASI : </label><br>
                <input type="int" name="jumlah_donasi" id="jumlah_donasi" value="<?php echo $jumlah_donasi; ?>" style ="margin-bottom: 15px; font-size: medium; 
				border-radius: 5px; height: 20px;"><br>

                <label for="metode_pembayaran"> METODE PEMBAYARAN : </label><br>
                <input type="text" name="metode_pembayaran" id="metode_pembayaran" value="<?php echo $metode_pembayaran; ?>" style ="margin-bottom: 15px; font-size: medium; 
				border-radius: 5px; height: 20px;"><br>

                <label for="jenis_donasi"> JENIS DONASI : </label><br>
                <input type="text" name="jenis_donasi" id="jenis_donasi" value="<?php echo $jenis_donasi; ?>" style ="margin-bottom: 15px; font-size: medium; 
				border-radius: 5px; height: 20px;"><br>
                </div>
                <label for="foto">Foto: </label>
                <input type="file" name="foto" id="foto" style=" font-size: medium;">
                <?php echo $foto;?><br>
                <br>
                <input type="submit" name="edit" id="edit" value="Edit" class="button">
            </form>
        </div>
    </body>
</html>