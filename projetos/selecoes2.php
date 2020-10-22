<?php 
    if($_POST){
        include ("teste07.php");
        $v1=$_POST['txtgrau'];
        $op=$_POST['operacao'];
 
        $grau=deg2rad($v1);
 
        switch ($op) {
            case 's':
                echo ('<center>'. sin ($grau). '</center><br>');
                echo("<p align= 'center'><img src='imagens/seno.png' /></p>");
            break;
 
            case 'c':
                echo('<center>'.cos($grau).'</center>');
                echo("<p align= 'center'><img src='imagens/consseno.png' /></p>");
            break;
 
            case 't':
                echo('<center>'.tan($grau).'</center');
                echo("<p align= 'center'><img src='imagens/tangente.png' /></p>");
            break;
 
            default:
            echo("<center> erro </center>");
                break;
        }
    }
?>