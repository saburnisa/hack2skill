<?php
$conn = new mysqli("localhost","Saparna","rithiga","panda");
if($conn->connect_error)
{
  die("connection failed".$conn->connect_error);
}
else{
  include("hack.php");
}
?>