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
<td width=10px rowspan=2>No</td>
<td rowspan=2>Nama</td>
<td rowspan=2>NIS</td>
<td colspan=15 align=center>Praktik Kerja Lapangan</td>
<td colspan=6 align=center>Kegiatan Ekstrakulikuler</td>
<td colspan=6 align=center>Prestasi</td>
<td colspan=3 align=center>Ketidak Hadiran</td>
<td rowspan=2 align=center>Catatan Walikelas</td>
<td rowspan=2 align=center>Keputusan</td>
<td rowspan=2 align=center>Sikap</td>
</tr>
<tr>
<td align=center>Mitra Dudi</td>
<td align=center>Lokasi</td>
<td align=center>Lama dan Waktu Pelaksanaan</td>
<td align=center>Nilai</td>
<td align=center>Keterangan</td>

<td align=center>Mitra Dudi</td>
<td align=center>Lokasi</td>
<td align=center>Lama dan Waktu Pelaksanaan</td>
<td align=center>Nilai</td>
<td align=center>Keterangan</td>

<td align=center>Mitra Dudi</td>
<td align=center>Lokasi</td>
<td align=center>Lama dan Waktu Pelaksanaan</td>
<td align=center>Nilai</td>
<td align=center>Keterangan</td>

<td align=center>Kegiatan Ekstrakulikuler</td>
<td align=center>Keterangan</td>
<td align=center>Kegiatan Ekstrakulikuler</td>
<td align=center>Keterangan</td>
<td align=center>Kegiatan Ekstrakulikuler</td>
<td align=center>Keterangan</td>

<td align=center>Prestasi</td>
<td align=center>Keterangan</td>
<td align=center>Prestasi</td>
<td align=center>Keterangan</td>
<td align=center>Prestasi</td>
<td align=center>Keterangan</td>

<td align=center>Sakit</td>
<td align=center>Izin</td>
<td align=center>Alfa</td>


</tr>
<?php
 include '../koneksi.php';

 if (count($_POST['id']) == 0) {
  header('Location: index.php');
 }
 $no = 1;
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  $sql = "SELECT * FROM xirpl WHERE id=$id ";
  $rs = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($rs);
  
?>
<tr>
<td><input type="hidden" name="id[]" class="txtField" value="<?php echo $id; ?>"><?php echo $no++; ?></td>
<td><input type="text" name="nama[]" style="text-transform: capitalize;" class="txtField" value="<?php echo $row['nama']; ?>" disabled></td>
<td><input type="text" name="nisn[]" class="txtField" value="<?php echo $row['nisn']; ?>" disabled></td>

<td><input type="text" name="dudia[]" class="txtField" value="<?php echo $row['dudia']; ?>"></td>
<td><input type="text" name="lokasia[]" class="txtField" value="<?php echo $row['lokasia']; ?>"></td>
<td><input type="text" name="lamaa[]" class="txtField" value="<?php echo $row['lamaa']; ?>"></td>
<td><input type="text" name="nilaidudia[]" class="txtField" value="<?php echo $row['nilaidudia']; ?>"></td>
<td><textarea name="ketdudia[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['ketdudia']; ?></textarea></td>

<td><input type="text" name="dudib[]" class="txtField" value="<?php echo $row['dudib']; ?>"></td>
<td><input type="text" name="lokasib[]" class="txtField" value="<?php echo $row['lokasib']; ?>"></td>
<td><input type="text" name="lamab[]" class="txtField" value="<?php echo $row['lamab']; ?>"></td>
<td><input type="text" name="nilaidudib[]" class="txtField" value="<?php echo $row['nilaidudib']; ?>"></td>
<td><textarea name="ketdudib[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['ketdudib']; ?></textarea></td>

<td><input type="text" name="dudic[]" class="txtField" value="<?php echo $row['dudic']; ?>"></td>
<td><input type="text" name="lokasic[]" class="txtField" value="<?php echo $row['lokasic']; ?>"></td>
<td><input type="text" name="lamac[]" class="txtField" value="<?php echo $row['lamac']; ?>"></td>
<td><input type="text" name="nilaidudic[]" class="txtField" value="<?php echo $row['nilaidudic']; ?>"></td>
<td><textarea name="ketdudic[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['ketdudic']; ?></textarea></td>

<td><input type="text" name="eskula[]" class="txtField" value="<?php echo $row['eskula']; ?>"></td>
<td><textarea name="deskripsia[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['deskripsia']; ?></textarea></td>
<td><input type="text" name="eskulb[]" class="txtField" value="<?php echo $row['eskulb']; ?>"></td>
<td><textarea name="deskripsib[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['deskripsib']; ?></textarea></td>
<td><input type="text" name="eskulc[]" class="txtField" value="<?php echo $row['eskulc']; ?>"></td>
<td><textarea name="deskripsic[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['deskripsic']; ?></textarea></td>

<td><input type="text" name="presa[]" class="txtField" value="<?php echo $row['presa']; ?>"></td>
<td><textarea name="ketpresa[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['ketpresa']; ?></textarea></td>
<td><input type="text" name="presb[]" class="txtField" value="<?php echo $row['presb']; ?>"></td>
<td><textarea name="ketpresb[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['ketpresb']; ?></textarea></td>
<td><input type="text" name="presc[]" class="txtField" value="<?php echo $row['presc']; ?>"></td>
<td><textarea name="ketpresc[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['ketpresc']; ?></textarea></td>

<td><input type="text" name="sakit[]" class="txtField" value="<?php echo $row['sakit']; ?>"></td>
<td><input type="text" name="izin[]" class="txtField" value="<?php echo $row['izin']; ?>"></td>
<td><input type="text" name="alfa[]" class="txtField" value="<?php echo $row['alfa']; ?>"></td>

<td><textarea name="catatwalas[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['catatwalas']; ?></textarea></td>

<td><textarea name="keputusan[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['keputusan']; ?></textarea></td>

<td><textarea name="sikap[]" class="txtField" style="height: 99px; width: 223px;text-align: justify;text-align-last: center;"><?php echo $row['sikap']; ?></textarea></td>
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

<style>
.txtField{
  height:100px;
}
.txtField:hover{
  color:red;
}
</style>
