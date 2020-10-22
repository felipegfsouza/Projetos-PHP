<?php 
    include ("pag09.php");
    $v1=$_POST['txtv1'];
    $v2=$_POST['txtv2'];

    if(isset($_POST['btnso'])){
        $t=$v1+$v2;
        echo("<center> $t </center>");
    }

    else if (isset($_POST['btnsu'])){
        $t=$v1-$v2;
        echo("<center> $t </center>");
    }

    else if (isset($_POST['btnmu'])){
        $t=$v1*$v2;
        echo("<center> $t </center>");
    }

    else if (isset($_POST['btndi'])){
        $t=$v1/$v2;
        echo("<center> $t </center>");
    }
?>