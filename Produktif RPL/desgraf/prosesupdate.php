<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $desgrafp = $_POST['desgrafp'][$key];
  $desdesgrafp = $_POST['desdesgrafp'][$key];
  $desgrafk = $_POST['desgrafk'][$key];
  $desdesgrafk = $_POST['desdesgrafk'][$key];

  $sql = "UPDATE xrpl SET 
  desgrafp='$desgrafp',desdesgrafp='$desdesgrafp',desgrafk='$desgrafk',desdesgrafk='$desdesgrafk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: desgraf.php');

?>