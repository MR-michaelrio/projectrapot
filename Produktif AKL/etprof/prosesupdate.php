<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $etprofp = $_POST['etprofp'][$key];
  $desetprofp = $_POST['desetprofp'][$key];
  $etprofk = $_POST['etprofk'][$key];
  $desetprofk = $_POST['desetprofk'][$key];

  $sql = "UPDATE xakl SET 
  etprofp='$etprofp',desetprofp='$desetprofp',etprofk='$etprofk',desetprofk='$desetprofk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: etprof.php');

?>