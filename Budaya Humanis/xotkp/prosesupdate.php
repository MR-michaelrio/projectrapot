<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $bhump = $_POST['bhump'][$key];
  $desbhump = $_POST['desbhump'][$key];
  $bhumk = $_POST['bhumk'][$key];
  $desbhumk = $_POST['desbhumk'][$key];

  $sql = "UPDATE xotkp SET 
  bhump='$bhump',desbhump='$desbhump',bhumk='$bhumk',desbhumk='$desbhumk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xotkp.php');

?>