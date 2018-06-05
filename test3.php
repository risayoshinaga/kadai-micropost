<?php
 function showMsgBox($message) {
  $len = strlen($message);   // strlen() gets string length.
  $line = "";
  
  for ($i = 0; $i < $len+2; $i++){
      $line = $line . "-";
      
  }
   
   
   print '+' . $line . '+' . PHP_EOL;
   print '| ' . $message . ' |' . PHP_EOL;
   print '+' . $line . '+' . PHP_EOL;
 }

 showMsgBox('This is a sample.');
?>