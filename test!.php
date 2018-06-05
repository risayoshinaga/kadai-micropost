<?php
 function showMsgBox($message) {
  $len = strlen($message);   // strlen() gets string length.
  $line = " ";
  for ($line = 0; $line < $len+2; $line++){
      print '+' . '$line' . '+' . PHP_EOL;
      print '|' . ' ' . 'This is a sample.' . ' ' . '|' . PHP_EOL;
      print '+' . '$line' . '+' . PHP_EOL;
  }
   }

 showMsgBox('This is a sample.');
?>