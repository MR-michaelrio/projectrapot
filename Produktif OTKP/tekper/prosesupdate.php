<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $tekperkantoranp = $_POST['tekperkantoranp'][$key];
  $destekperkantoranp = $_POST['destekperkantoranp'][$key];
  $tekperkantorank = $_POST['tekperkantorank'][$key];
  $destekperkantorank = $_POST['destekperkantorank'][$key];

  $sql = "UPDATE xotkp SET 
  tekperkantoranp='$tekperkantoranp',destekperkantoranp='$destekperkantoranp',tekperkantorank='$tekperkantorank',destekperkantorank='$destekperkantorank'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: tekper.php');

?>