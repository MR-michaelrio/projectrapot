<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $pemrogramanp = $_POST['pemrogramanp'][$key];
  $despemrogramanp = $_POST['despemrogramanp'][$key];
  $pemrogramank = $_POST['pemrogramank'][$key];
  $despemrogramank = $_POST['despemrogramank'][$key];

  $sql = "UPDATE xrpl SET 
  pemrogramanp='$pemrogramanp',despemrogramanp='$despemrogramanp',pemrogramank='$pemrogramank',despemrogramank='$despemrogramank'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: progdas.php');

?>