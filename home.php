<!DOCTYPE html>
<?php
  session_start();
  $db = mysqli_connect('localhost','root','','assessment2');
  $query = "SELECT * FROM paket";
  $view = mysqli_query($db,$query);
  $NIP = $_SESSION['NIP'];
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
  </head>
  <body>
    <center>
      <br><br>
      <h2><?php echo "Welcome".$NIP ?></h2>
      <h1>Menu</h1>
      <table border = "2">
        <tr>
          <form action="POST">
          <td><input type="submit" name="Penghuni" value="Tambah Data Penghuni"></td>
          <td><input type="submit" name="Paket" value="Paket"></td>
        </form>
        </tr>
      </table>
        <br>
      <table border="2">
        <tr bgcolor = "blue">
          <td colspan="9"><center><h3>List Paket</h3></center></td>
        </tr>
        <tr bgcolor="gray">
          <td><center>ID</center></td>
          <td><center>Isi Paket</center></td>
          <td><center>Kepada</center></td>
          <td><center>Penerima</center></td>
          <td><center>Tanggal didatang</center></td>
          <td><center>Tanggal diambil</center></td>
          <td colspan="2"><center>Action</center></td>
        </tr>
        <?php while ($data = mysqli_fetch_array($view)){?>
        <tr>
          <td><?php echo $data['ID'];?></td>
          <td><?php echo $data['isi_paket'];?></td>
          <td><?php echo $data['sasaran'];?></td>
          <td><?php echo $data['penerima'];?></td>
          <td><?php echo $data['tanggal_datang'];?></td>
          <td><?php echo $data['tanggal_ambil'];?></td>
          <td><?php echo "<a href=home.php?IdDel=".$data['ID'].">Delete</a>"; $ID = $data['ID'];?></a></td>
          <td><?php echo "<a href=home.php?IdUp=".$data['ID'].">Update</a>"; $ID = $data['ID'];?></a></td>
        </tr>
        <?php } ?>
      </table>
    </center>
  </body>
</html>

<?php

  if (isset($_POST['Paket'])) {
      $_SESSION['NIP'] = $NIP;
      header("Location:paket.php");
  }

  if (isset($_POST['Penghuni'])) {
      $_SESSION['NIP'] = $NIP;
      header("Location:Penghuni.php");
  }

	if (isset($_GET['IdDel'])) {
		$ID = $_GET['ID'];
		$delete = "DELETE FROM data where ID = '$ID'";
		$query = mysqli_query($db,$delete);
		if ($query) {
		header("Location:home.php");
		}
	}

	if (isset($_GET['IdUp'])) {
		$NIM = $_GET['IdUp'];
		$_SESSION['ID'] = $ID;
		header("Location:Edit.php");
	}

	if (isset($_POST['back'])) {
    session_destroy();
		header("Location:home.php");
	}
?>
