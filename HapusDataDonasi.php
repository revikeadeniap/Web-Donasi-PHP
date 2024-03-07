<?php
    error_reporting(0);
    include ('koneksi.php');

    if (isset($_GET['id_mahasiswa'])) {
        $id_mahasiswa = $_GET['id_mahasiswa'];

        $file = mysqli_query($koneksi, "SELECT foto FROM data_donasi where id_mahasiswa ='$id_mahasiswa'");
        $hasil = mysqli_fetch_array($file);
        $foto_lama=$hasil['foto'];
        unlink("image/".$foto_lama);

        $query = "DELETE from data_donasi where id_mahasiswa ='$id_mahasiswa'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Data gagal ditambah; ".mysqli_errno($koneksi).mysqli_error($koneksi));
        }
        else {
            echo "<script>alert('Data berhasil dihapus !');window.location.href='index.php'</script>";
        }
    }
?>