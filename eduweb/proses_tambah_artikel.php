<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$jenis_kelas = $_POST['jenis_kelas'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$komentar = $_POST['komentar'];
$isi_teks = $_POST['isi_teks'];
$gambar_artikel = $_FILES['gambar_artikel']['name'];

if ($gambar_artikel != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); // ekstensi file gambar yang bisa diupload
  $x = explode('.', $gambar_artikel); // memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_artikel']['tmp_name'];
  $angka_acak = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar_artikel; // menggabungkan angka acak dengan nama file sebenarnya

  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru); // memindah file gambar ke folder gambar
    $query = "INSERT INTO artikel (jenis_kelas, judul, tanggal, komentar, isi_teks, gambar_artikel)
              VALUES ('$jenis_kelas', '$judul', '$tanggal', '$komentar', '$isi_teks', '$nama_gambar_baru')";
  } else {
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg, atau png.');window.location='tambah_artikel.php';</script>";
    exit;
  }
} else {
  $query = "INSERT INTO artikel (jenis_kelas, judul, tanggal, komentar, isi_teks, gambar_artikel)
            VALUES ('$jenis_kelas', '$judul', '$tanggal', '$komentar', '$isi_teks', NULL)";
}

$result = mysqli_query($koneksi, $query);

// periksa query apakah ada error
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
  // tampil alert dan akan redirect ke halaman tambah_artikel.php
  echo "<script>alert('Data berhasil ditambah.');window.location='tambah_artikel.php';</script>";
}
?>
