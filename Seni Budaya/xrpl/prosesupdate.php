<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $sbdp = $_POST['sbdp'][$key];
  $dessbdp = $_POST['dessbdp'][$key];
  $sbdk = $_POST['sbdk'][$key];
  $dessbdk = $_POST['dessbdk'][$key];

  $sql = "UPDATE xrpl SET 
  sbdp='$sbdp',dessbdp='$dessbdp',sbdk='$sbdk',dessbdk='$dessbdk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xrpl.php');

?>