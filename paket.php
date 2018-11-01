<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Paket</title>
  </head>
  <body>
    <table>
      <form method="POST" action="" enctype="multipart/form-data">
        <tr>
          <td>Tanggal Datang</td>
          <td>:</td>
          <td><input type="date" name="date"></td>
        </tr>
        <tr>
          <td>Kepada</td>
          <td>:</td>
          <td><input type="text" name="sasaran"></td>
        </tr>
        <tr>
          <td>Isi Paket</td>
          <td>:</td>
          <td><input type="text" name="Isi"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit"></td>
        </tr>
      </form>
    </table>
  </body>
</html>

<?php
  if (isset($_POST['submit'])) {
    session_start();
    $
  }
?>
