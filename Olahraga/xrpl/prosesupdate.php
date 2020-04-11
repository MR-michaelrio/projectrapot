<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $orp = $_POST['orp'][$key];
  $desorp = $_POST['desorp'][$key];
  $ork = $_POST['ork'][$key];
  $desork = $_POST['desork'][$key];

  $sql = "UPDATE xrpl SET 
  orp='$orp',desorp='$desorp',ork='$ork',desork='$desork'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xrpl.php');

?>