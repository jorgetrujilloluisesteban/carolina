<?php

  $db = new mysqli('localhost', '31908etrujill4', 'A5pph4%6', '31908etrujill4db');
  if($db->connect_error) {
    $error = $db->connect_error;
  }
