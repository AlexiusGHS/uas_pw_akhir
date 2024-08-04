<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>EDU WEB CRUD</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>List Kursus</h1><center>
    <center><a href="tambah_slider.php">+ &nbsp; List Kursus</a><center>
    <br/>
    <table>
      <thead><marquee> HIMTI PROUDLY PRESENT " WORKSHOP MASTERING CRUD DATA COLLECTION " </marquee>
        <tr>
          <th>No</th>
          <th>Judul Slider</th>
          <th>Gambar</th>
          <th>Action</th>   
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM slider ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data produk
	  
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['title_slider']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['image_slider']; ?>" style="width: 120px;"></td>
          <td>
              <a href="slider_edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="slider_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>

    <center><h1>List Artikel</h1><center>
    <center><a href="tambah_artikel.php">+ &nbsp; List Artikel</a><center>
    <br/>
    <table>
      <thead><marquee> HIMTI PROUDLY PRESENT " WORKSHOP MASTERING CRUD DATA COLLECTION " </marquee>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Jumlah Komentar</th>
          <th>Isi Artikel</th>
          <th>Action</th>  
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM artikel ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data produk
	  
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['judul']; ?></td>
          <td><?php echo $row['tanggal']; ?></td>
          <td><?php echo $row['komentar']; ?></td>
          <td><?php echo $row['isi_teks']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_artikel']; ?>" style="width: 120px;"></td>
          

          <td>
              <a href="testimoni_edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="testimoni_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>