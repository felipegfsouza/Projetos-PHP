<?php 
  include("pag17.php");
  if($_POST){
    $v1 = (float)$_POST['valor1'];
    $v2=(float)$_POST['valor2'];

    function somar($x,$y){
      return $x+$y;
    }
    echo("O resultado é".
    somar($v1,$v2));
  }
?> 
