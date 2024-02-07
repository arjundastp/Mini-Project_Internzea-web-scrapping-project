<?php
  $command = escapeshellcmd('C:\wamp64\www\miniprojectcs\Mini\test.py');
  $output = shell_exec($command);
  echo $output;
?>