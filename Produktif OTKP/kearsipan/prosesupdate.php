<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $arsipp = $_POST['arsipp'][$key];
  $desarsipp = $_POST['desarsipp'][$key];
  $arsipk = $_POST['arsipk'][$key];
  $desarsipk = $_POST['desarsipk'][$key];

  $sql = "UPDATE xotkp SET 
  arsipp='$arsipp',desarsipp='$desarsipp',arsipk='$arsipk',desarsipk='$desarsipk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: kearsipan.php');

?>