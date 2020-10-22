<?php 
    include("pag11.php");
    if($_POST){
        $v1=$_POST['txtv1'];
        $v2=$_POST['txtv2'];
        $op=$_POST['op'];
        switch($op){
            case 'Somar':
                $t=$v1+$v2;
                echo("<center><h1> $t </h1></center>");
            break;

            case 'Subtrair':
                $t=$v1-$v2;
                echo("<center><h1> $t </h1></center>");
            break;

            case 'Multiplicar':
                $t=$v1*$v2;
                echo("<center><h1> $t </h1></center>");
            break;

            case 'Dividir':
                $t=$v1/$v2;
                echo("<center><h1> $t </h1></center>");
            break;
            default:
                echo("<center><h1>Opção inválida </h1></center>");
            break;
        }
    }
 ?>