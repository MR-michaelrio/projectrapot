<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $admp = $_POST['admp'][$key];
  $desadmp = $_POST['desadmp'][$key];
  $admk = $_POST['admk'][$key];
  $desadmk = $_POST['desadmk'][$key];

  $sql = "UPDATE xakl SET 
  admp='$admp',desadmp='$desadmp',admk='$admk',desadmk='$desadmk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xakl.php');

?>