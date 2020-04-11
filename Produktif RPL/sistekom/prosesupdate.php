<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $sistekomp = $_POST['sistekomp'][$key];
  $dessistekomp = $_POST['dessistekomp'][$key];
  $sistekomk = $_POST['sistekomk'][$key];
  $dessistekomk = $_POST['dessistekomk'][$key];

  $sql = "UPDATE xrpl SET 
  sistekomp='$sistekomp',dessistekomp='$dessistekomp',sistekomk='$sistekomk',dessistekomk='$dessistekomk'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: sistekom.php');

?>