<?php

  $db = new mysqli('localhost', '', '', '');
  if($db->connect_error) {
    $error = $db->connect_error;
  }
