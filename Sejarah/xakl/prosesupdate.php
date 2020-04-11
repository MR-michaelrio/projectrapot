<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $sjrp = $_POST['sjrp'][$key];
  $dessjrp = $_POST['dessjrp'][$key];
  $sjrk = $_POST['sjrk'][$key];
  $dessjrk = $_POST['dessjrk'][$key];

  $sql = "UPDATE xakl SET 
  sjrp='$sjrp',dessjrp='$dessjrp',sjrk='$sjrk',dessjrk='$dessjrk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xakl.php');

?>