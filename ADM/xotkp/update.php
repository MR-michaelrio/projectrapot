<!DOCTYPE html>
<html>
<head>
<title>Rapot Mid</title>
<?php include 'cssjava.php'; ?>
</head>
<body>
<form action="prosesupdate.php" method="POST" width=100% style=background-color:red;>
<div style="width:100%;" class=container2>
<table border="2" align="center">
<tr>
<td width=10px>No</td>
<td>Nama</td>
<td>NIS</td>
<td align=center>ADM Pengetahuan</td>
<td align=center>Deskripsi</td>
<td align=center>ADM Keterampilan</td>
<td align=center>Deskripsi</td>
</tr>
<?php
 include 'koneksi.php';

 if (count($_POST['id']) == 0) {
  header('Location: index.php');
 }
 $no = 1;
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  $sql = "SELECT * FROM xotkp WHERE id=$id ";
  $rs = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($rs);
  
?>
<tr>
<td><input type="hidden" name="id[]" class="txtField" value="<?php echo $id; ?>"><?php echo $no++; ?></td>
<td><input type="text" name="nama[]" style="text-transform: capitalize;" class="txtField" value="<?php echo $row['nama']; ?>" disabled></td>
<td><input type="text" name="nisn[]" class="txtField" value="<?php echo $row['nisn']; ?>" disabled></td>

<td><input type="text" name="admp[]" class="txtField" value="<?php echo $row['admp']; ?>"></td>
<td><input type="text" name="desadmp[]" class="txtField" value="<?php echo $row['desadmp']; ?>"></td>
<td><input type="text" name="admk[]" class="txtField" value="<?php echo $row['admk']; ?>"></td>
<td><input type="text" name="desadmk[]" class="txtField" value="<?php echo $row['desadmk']; ?>"></td>


</tr>
<?php } ?>
</table>

<br>
<center>
<button class="btn btn-success">INSERT DATA</button>
</center>
</form>
</body>
</html>
