<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $mandap = $_POST['mandap'][$key];
  $desmandap = $_POST['desmandap'][$key];
  $mandak = $_POST['mandak'][$key];
  $desmandak = $_POST['desmandak'][$key];

  $sql = "UPDATE xotkp SET 
  mandap='$mandap',desmandap='$desmandap',mandak='$mandak',desmandak='$desmandak'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xotkp.php');

?>