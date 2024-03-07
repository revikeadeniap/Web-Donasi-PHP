<?php
    error_reporting(0);
    include 'koneksi.php';

    if (isset($_POST['edit'])) {

        $id_mahasiswa = $_POST['id_mahasiswa'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $tanggal_donasi= $_POST['tanggal_donasi'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
        $daerah = $_POST['daerah'];
        $jumlah_donasi = $_POST['jumlah_donasi'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
        $jenis_donasi = $_POST['jenis_donasi'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $path = "image/" . $foto;

        if (empty($foto)) {
            $query = "UPDATE data_donasi set nama = '$nama', nim = '$nim', tanggal_donasi = '$tanggal_donasi', jenis_kelamin = '$jenis_kelamin', 
            daerah = '$daerah', jumlah_donasi = '$jumlah_donasi' , metode_pembayaran = '$metode_pembayaran' , jenis_donasi = '$jenis_donasi',
            where id_mahasiswa = '$id_mahasiswa'";
        }
        else {
            $file = mysqli_query($koneksi, "SELECT foto FROM data_donasi where id_mahasiswa='$id_mahasiswa'");
            $hasil = mysqli_fetch_array($file);
            $foto_lama=$hasil['foto'];
            unlink("image/".$foto_lama);

            if (move_uploaded_file($tmp, $path)) {
                $query = "UPDATE data_donasi set nama = '$nama', nim = '$nim', tanggal_donasi = '$tanggal_donasi', jenis_kelamin = '$jenis_kelamin', 
                daerah = '$daerah', jumlah_donasi = '$jumlah_donasi' , metode_pembayaran = '$metode_pembayaran', jenis_donasi = '$jenis_donasi', 
                foto = '$foto'  where id_mahasiswa = '$id_mahasiswa'";
            }
        }

        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Data gagal di ubah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
        }
        else {
            echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php'</script>";
        }
    }

?>