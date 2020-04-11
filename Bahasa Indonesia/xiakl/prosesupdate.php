<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $bindop = $_POST['bindop'][$key];
  $desbindop = $_POST['desbindop'][$key];
  $bindok = $_POST['bindok'][$key];
  $desbindok = $_POST['desbindok'][$key];

  $sql = "UPDATE xiakl SET 
  bindop='$bindop',desbindop='$desbindop',bindok='$bindok',desbindok='$desbindok'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xiakl.php');

?>