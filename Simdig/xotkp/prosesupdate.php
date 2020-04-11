<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $simdigp = $_POST['simdigp'][$key];
  $dessimdigp = $_POST['dessimdigp'][$key];
  $simdigk = $_POST['simdigk'][$key];
  $dessimdigk = $_POST['dessimdigk'][$key];

  $sql = "UPDATE xotkp SET 
  simdigp='$simdigp',dessimdigp='$dessimdigp',simdigk='$simdigk',dessimdigk='$dessimdigk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xotkp.php');

?>