<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $agamap = $_POST['agamap'][$key];
  $desagamap = $_POST['desagamap'][$key];
  $agamak = $_POST['agamak'][$key];
  $desagamak = $_POST['desagamak'][$key];

  $sql = "UPDATE xotkp SET 
  agamap='$agamap',desagamap='$desagamap',agamak='$agamak',desagamak='$desagamak'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xotkp.php');

?>