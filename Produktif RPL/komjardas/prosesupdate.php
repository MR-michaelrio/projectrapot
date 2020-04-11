<?php
 include 'koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
  $id = (int) $_POST['id'][$key];
  
  $komjardasp = $_POST['komjardasp'][$key];
  $deskomjardasp = $_POST['deskomjardasp'][$key];
  $komjardask = $_POST['komjardask'][$key];
  $deskomjardask = $_POST['deskomjardask'][$key];

  $sql = "UPDATE xrpl SET 
  komjardasp='$komjardasp',deskomjardasp='$deskomjardasp',komjardask='$komjardask',deskomjardask='$deskomjardask'
  WHERE id=$id";
  mysqli_query($conn,$sql);
 }

 // kembalikan ke index
 header('Location: komjardas.php');

?>