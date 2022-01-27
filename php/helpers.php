<?php
   //============= HELPERS FUNCTIONS =================//
   
   function fileLog($text) {
      fwrite(fopen(getcwd()."/logs.txt", "w"), " - " . $text . " - ");
   }
?>