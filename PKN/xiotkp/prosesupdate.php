<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $pknp = $_POST['pknp'][$key];
  $despknp = $_POST['despknp'][$key];
  $pknk = $_POST['pknk'][$key];
  $despknk = $_POST['despknk'][$key];

  $sql = "UPDATE xiotkp SET 
  pknp='$pknp',despknp='$despknp',pknk='$pknk',despknk='$despknk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xiotkp.php');

?>