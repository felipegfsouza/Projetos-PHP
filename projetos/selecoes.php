<?php 
    include("pag10.php");
    if($_POST){
        $v1=$_POST['txtv1'];
        $v2=$_POST['txtv2'];
        $op=$_POST['operacao'];

        if($op=='Soma'){
            $t=$v1+$v2;
            echo("<center> $t </center>");
        }else if ($op== 'Subtração'){
            $t=$v1-$v2;
            echo("<center> $t </center>");
        }else if ($op== 'Multiplicação'){
            $t=$v1*$v2;
            echo("<center> $t </center>");
        }else if ($op== 'Divisão'){
            $t=$v1/$v2;
            echo("<center> $t </center>");
        }
    }
?>