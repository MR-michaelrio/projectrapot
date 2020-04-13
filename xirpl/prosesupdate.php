<?php
 include '../koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  $dudia = $_POST['dudia'][$key];
  $lokasia = $_POST['lokasia'][$key];
  $lamaa = $_POST['lamaa'][$key];
  $nilaidudia = $_POST['nilaidudia'][$key];
  $ketdudia = $_POST['ketdudia'][$key];

  $dudib = $_POST['dudib'][$key];
  $lokasib = $_POST['lokasib'][$key];
  $lamab = $_POST['lamab'][$key];
  $nilaidudib = $_POST['nilaidudib'][$key];
  $ketdudib = $_POST['ketdudib'][$key];

  $dudic = $_POST['dudic'][$key];
  $lokasic = $_POST['lokasic'][$key];
  $lamac = $_POST['lamac'][$key];
  $nilaidudic = $_POST['nilaidudic'][$key];
  $ketdudic = $_POST['ketdudic'][$key];

  $eskula = $_POST['eskula'][$key];
  $deskripsia = $_POST['deskripsia'][$key];
  $eskulb = $_POST['eskulb'][$key];
  $deskripsib = $_POST['deskripsib'][$key];
  $eskulc = $_POST['eskulc'][$key];
  $deskripsic = $_POST['deskripsic'][$key];

  $presa = $_POST['presa'][$key];
  $ketpresa = $_POST['ketpresa'][$key];
  $presb = $_POST['presb'][$key];
  $ketpresb = $_POST['ketpresb'][$key];
  $presc = $_POST['presc'][$key];
  $ketpresc = $_POST['ketpresc'][$key];

  $sakit = $_POST['sakit'][$key];
  $izin = $_POST['izin'][$key];
  $alfa = $_POST['alfa'][$key];

  $catatwalas = $_POST['catatwalas'][$key];

  $keputusan = $_POST['keputusan'][$key];

  $sikap = $_POST['sikap'][$key];

  $sql = "UPDATE xirpl SET 
  dudia='$dudia',lokasia='$lokasia',lamaa='$lamaa',nilaidudia='$nilaidudia',ketdudia='$ketdudia',
  dudib='$dudib',lokasib='$lokasib',lamab='$lamab',nilaidudib='$nilaidudib',ketdudib='$ketdudib',
  dudic='$dudic',lokasic='$lokasic',lamac='$lamac',nilaidudic='$nilaidudic',ketdudic='$ketdudic',
  eskula='$eskula',deskripsia='$deskripsia',eskulb='$eskulb',deskripsib='$deskripsib',eskulc='$eskulc',deskripsic='$deskripsic',
  presa='$presa',ketpresa='$ketpresa',presb='$presb',ketpresb='$ketpresb',presc='$presc',ketpresc='$ketpresc',
  sakit='$sakit',izin='$izin',alfa='$alfa',
  catatwalas='$catatwalas',keputusan='$keputusan',sikap='$sikap'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: index.php');

?>