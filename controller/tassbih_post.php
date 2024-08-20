<?php

// if commit
if (isset($_POST['commit'])) {
  $count= $_POST['number'];
  $dikhr= $_POST['dikhr'];
  for ($i=0; $i <$count ; $i++) {
    echo $dikhr."</br>";
  }
}

 ?>
