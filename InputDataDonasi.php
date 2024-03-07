<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INPUT DATA DONASI</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<h1 style="text-align: center;">Data Donasi Mahasiswa UNS PSDKU</h1>
	<h3 style="text-align: center;">Silahkan isi data dibawah ini!</h3>
	<form action="ProsesInputDataDonasi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
		<fieldset>
            <table>
			</tr>
			<tr>
				<td>Nama</td>
                <td>:</td>
				<td><input type="text" name="nama" id="nama" placeholder="masukkan nama..." required></td>
			</tr>
			<tr>
				<td>NIM</td>
                <td>:</td> 
				<td><input type="text" name="nim" id="nim" placeholder="masukkan nim..." required></td>
			</tr>
			<tr>
				<td>Tanggal Donasi</td>
                <td>:</td>
				<td><input type="date" name="tanggal_donasi" id="tanggal_donasi" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
                <td>:</td>
				<td><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" required>Perempuan</td>
			</tr>
			<tr>
                <td>Daerah</td>
                <td>:</td>
				<td><input type="text" name="daerah" id="daerah" placeholder="masukkan daerah..." required></td>
            </tr>
			<tr>
                <td>Jumlah Donasi</td>
                <td>:</td>
				<td><input type="int" name="jumlah_donasi" id="jumlah_donasi" placeholder="masukkan jumlah uang..." required></td>
            </tr>
			<tr>
				<td>Metode Pembayaran</td>
                <td>:</td>
				<td><select name="metode_pembayaran" id="metode_pembayaran" required>
					<option value="">--Pilih Pembayaran--</option>
					<option value="BRI">BRI</option>
					<option value="BNI">BNI</option>
					<option value="BCA">BCA</option>
					<option value="MANDIRI">MANDIRI</option>
                    <option value="DANA">DANA</option>
					<option value="OVO">OVO</option>
                    <option value="GOPAY">GOPAY</option>
				</select></td>
			</tr>
			<tr>
				<td>Jenis Donasi</td>
                <td>:</td>
				<td><input type="checkbox" name="jenis_donasi" value="Beasiswa dan Pendidikan">Beasiswa dan Pendidikan <br>
				<input type="checkbox" name="jenis_donasi" value="Bantuan Medis">Bantuan Medis <br>
				<input type="checkbox" name="jenis_donasi" value="Panti Asuhan">Panti Asuhan <br>
				<input type="checkbox" name="jenis_donasi" value="Bencana Alam" required>Bencana Alam<br> </td>
			</tr>
        	<tr>
          		<td>Foto</td>
                <td>:</td>
          		<td><input name="foto" type="file" id="foto" required></td>
			</tr>
       		 <tr>
          	<td></td>
         	<td></td>
          	<td>
			<input name="simpan" type="submit" id="simpan" value="Submit" class ='button'>
            <input name="reset" type="reset" id="reset" value="Batal" class ='button'>    
            </td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>

</html>