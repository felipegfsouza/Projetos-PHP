<?php 
  $v="Mario";

  function teste() {
    global $v;
    echo $v;
  }
  teste();
?>