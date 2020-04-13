<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $korespondensip = $_POST['korespondensip'][$key];
  $deskorespondensip = $_POST['deskorespondensip'][$key];
  $korespondensik = $_POST['korespondensik'][$key];
  $deskorespondensik = $_POST['deskorespondensik'][$key];

  $sql = "UPDATE xotkp SET 
  korespondensip='$korespondensip',deskorespondensip='$deskorespondensip',korespondensik='$korespondensik',deskorespondensik='$deskorespondensik'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: korespondensi.php');

?>