<?php
error_reporting(0);
include 'koneksi.php';

global $koneksi;

if (isset($_POST['simpan'])) {

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

  if (move_uploaded_file($tmp, $path)) {
    $query = "INSERT INTO data_donasi VALUES ('', '$nama', '$nim', '$jenis_kelamin', '$tanggal_donasi', '$daerah', 
    '$jumlah_donasi', '$metode_pembayaran', '$jenis_donasi', '$foto')";
    $result = mysqli_query($koneksi, $query);

    
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));

    } else {
      echo "<script>alert('Data Berhasil Ditambah');window.location.href='index.php'</script> ";
    }
  }
}
