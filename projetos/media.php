<?php 

    include("ex03.php");
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];
    $media=($nota1*2)+($nota2*3)+($nota3*5)/10;

    echo"<center><h1> Sua média final é  $media </h1></center>";

?>

