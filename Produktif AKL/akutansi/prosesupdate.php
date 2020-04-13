<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $akunp = $_POST['akunp'][$key];
  $desakunp = $_POST['desakunp'][$key];
  $akunk = $_POST['akunk'][$key];
  $desakunk = $_POST['desakunk'][$key];

  $sql = "UPDATE xakl SET 
  akunp='$akunp',desakunp='$desakunp',akunk='$akunk',desakunk='$desakunk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: akutansi.php');

?>