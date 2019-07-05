<?php
  $connection = mysqli_connect('localhost', 'root', 'root', 'team');
  if(!$connection){
    echo "Database is not connected";
  }
?>
