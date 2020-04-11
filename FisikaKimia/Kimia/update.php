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
<td align=center>Kimia Pengetahuan</td>
<td align=center>Deskripsi</td>
<td align=center>Kimia Keterampilan</td>
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
  $sql = "SELECT * FROM xrpl WHERE id=$id ";
  $rs = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($rs);
  
?>
<tr>
<td><input type="hidden" name="id[]" class="txtField" value="<?php echo $id; ?>"><?php echo $no++; ?></td>
<td><input type="text" name="nama[]" style="text-transform: capitalize;" class="txtField" value="<?php echo $row['nama']; ?>" disabled></td>
<td><input type="text" name="nisn[]" class="txtField" value="<?php echo $row['nisn']; ?>" disabled></td>

<td><input type="text" name="kimiap[]" class="txtField" value="<?php echo $row['kimiap']; ?>"></td>
<td><input type="text" name="deskimiap[]" class="txtField" value="<?php echo $row['deskimiap']; ?>"></td>
<td><input type="text" name="kimiak[]" class="txtField" value="<?php echo $row['kimiak']; ?>"></td>
<td><input type="text" name="deskimiak[]" class="txtField" value="<?php echo $row['deskimiak']; ?>"></td>


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
