<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in</title>
  </head>
  <body>
      <center>
        <br><br><br>
        <h1>Log in page</h1>
          <table>
            <form method="POST" action="">
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><input type="text" name="username"></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td>:</td>
                  <td><input type="text" name="pass"></td>
                </tr>
                <tr>
                  <td colspan="3"><center><input type = "submit" name = "submit"><center></td>
                </tr>
            </form>
          </table>
      </center>
  </body>
</html>

<?php
  if (isset($_POST['submit'])) {
    $db = mysqli_connect('localhost','root','','assessment2');
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $query = mysqli_query($db,"SELECT NIP,Nama FROM karyawan WHERE NIP = '".$pass."' AND Nama = '".$user."'");
    if (mysqli_fetch_array($query)) {
      session_start();
      $_SESSION['NIP'] = $pass;
      echo "<script languange = javascript>alert('Log-in Success'); document.location=('home.php');</script>";
    }else{
      echo "<script languange = javascript>alert('Username atau Password salah');</script>";
    }
  }
 ?>
