<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $fisikap = $_POST['fisikap'][$key];
  $desfisikap = $_POST['desfisikap'][$key];
  $fisikak = $_POST['fisikak'][$key];
  $desfisikak = $_POST['desfisikak'][$key];

  $sql = "UPDATE xrpl SET 
  fisikap='$fisikap',desfisikap='$desfisikap',fisikak='$fisikak',desfisikak='$desfisikak'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: fisika.php');

?>