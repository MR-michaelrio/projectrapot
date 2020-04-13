<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $ipap = $_POST['ipap'][$key];
  $desipap = $_POST['desipap'][$key];
  $ipak = $_POST['ipak'][$key];
  $desipak = $_POST['desipak'][$key];

  $sql = "UPDATE xotkp SET 
  ipap='$ipap',desipap='$desipap',ipak='$ipak',desipak='$desipak'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xotkp.php');

?>