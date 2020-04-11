<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $ekonomip = $_POST['ekonomip'][$key];
  $desekonomip = $_POST['desekonomip'][$key];
  $ekonomik = $_POST['ekonomik'][$key];
  $desekonomik = $_POST['desekonomik'][$key];

  $sql = "UPDATE xakl SET 
  ekonomip='$ekonomip',desekonomip='$desekonomip',ekonomik='$ekonomik',desekonomik='$desekonomik'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: xakl.php');

?>