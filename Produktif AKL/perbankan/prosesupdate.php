<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $perbankanp = $_POST['perbankanp'][$key];
  $desperbankanp = $_POST['desperbankanp'][$key];
  $perbankank = $_POST['perbankank'][$key];
  $desperbankank = $_POST['desperbankank'][$key];

  $sql = "UPDATE xakl SET 
  perbankanp='$perbankanp',desperbankanp='$desperbankanp',perbankank='$perbankank',desperbankank='$desperbankank'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: perbankan.php');

?>