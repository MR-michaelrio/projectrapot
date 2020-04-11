<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $bingp = $_POST['bingp'][$key];
  $desbingp = $_POST['desbingp'][$key];
  $bingk = $_POST['bingk'][$key];
  $desbingk = $_POST['desbingk'][$key];

  $sql = "UPDATE xrpl SET 
  bingp='$bingp',desbingp='$desbingp',bingk='$bingk',desbingk='$desbingk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xrpl.php');

?>