<?php
$con = new mysqli('localhost', 'root','','offices_information');
if (!$con) {
  die(mysqli_error($con));
}

?>
