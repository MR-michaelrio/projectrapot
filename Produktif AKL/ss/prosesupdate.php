<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $ssp = $_POST['ssp'][$key];
  $desssp = $_POST['desssp'][$key];
  $ssk = $_POST['ssk'][$key];
  $desssk = $_POST['desssk'][$key];

  $sql = "UPDATE xakl SET 
  ssp='$ssp',desssp='$desssp',ssk='$ssk',desssk='$desssk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: ss.php');

?>