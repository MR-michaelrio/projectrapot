<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $mtkp = $_POST['mtkp'][$key];
  $desmtkp = $_POST['desmtkp'][$key];
  $mtkk = $_POST['mtkk'][$key];
  $desmtkk = $_POST['desmtkk'][$key];

  $sql = "UPDATE xakl SET 
  mtkp='$mtkp',desmtkp='$desmtkp',mtkk='$mtkk',desmtkk='$desmtkk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xakl.php');

?>