<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title> </title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Program</h1>
      <center>
      <form method="POST" action="proses_tambah_artikel.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Jenis Program</label>
          <input type="text" name="jenis_kelas" autofocus="" required="" />
        </div>
        <div>
          <label>judul</label>
         <input type="text" name="judul" required="" />
        </div>
        <div>
          <label>Tanggal</label>
         <input type="date" name="tanggal" required="" />
        </div>
        <div>
          <label>komentar</label>
         <input type="text" name="komentar" required="" />
        </div>
        <div>
          <label>Durasi</label>
         <input type="isi teks" name="isi_teks" required="" />
        </div>
        <div>
          <label>Gambar Program</label>
         <input type="file" name="gambar_artikel" required="" />
        </div>
        <div>
         <button type="submit">Simpan Program</button>
        </div>
        </section>
      </form>
  </body>
</html>