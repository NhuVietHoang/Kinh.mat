<?php 
$mysqli = new mysqli("localhost","root","","kinh.mat");
mysqli_set_charset($mysqli,'utf8');
// Check connection
if ($mysqli -> connect_errno) {
  echo "kết nối ko thành công: " . $mysqli -> connect_error;
  exit();
}