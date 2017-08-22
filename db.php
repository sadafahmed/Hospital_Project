<?php

$mysqli = new mysqli('localhost', 'root', '', 'hospital_mgt_system');
if (mysqli_connect_errno()) {
  print "Connection failed: " . mysqli_connect_errno();
  exit;
}