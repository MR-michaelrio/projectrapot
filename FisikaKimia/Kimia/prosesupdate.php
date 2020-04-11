<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $kimiap = $_POST['kimiap'][$key];
  $deskimiap = $_POST['deskimiap'][$key];
  $kimiak = $_POST['kimiak'][$key];
  $deskimiak = $_POST['deskimiak'][$key];

  $sql = "UPDATE xrpl SET 
  kimiap='$kimiap',deskimiap='$deskimiap',kimiak='$kimiak',deskimiak='$deskimiak'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: kimia.php');

?>