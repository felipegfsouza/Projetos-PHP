<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
    <h1 align="center">Calculadora </h1>
    <center>
        <form  method="post">
            Valor 1: <input type="number" name="txtv1" placeholder="Digite 1° Valor/base"><br><br>
            Valor 2: <input type="number" name="txtv2" placeholder="Digite 1° Valor/expoente"><br><br>

            <input type="radio" value="Somar" name="op">Somar
            <input type="radio" value="Subtrair" name="op">Subtrair
            <input type="radio" value="Multiplicar" name="op">Multiplicar
            <input type="radio" value="Dividir" name="op">Dividir
            <input type="radio" value="Potencia" name="op">Potência

            <br>
            <br>
            <input type="submit" value="Calcular">
        </form>
    </center>
<?php
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

            case 'Potencia':
                $t= pow($v1, $v2);
                echo("<center><h1> $t </h1></center>");
            break;
            
            default:
                echo("<center><h1>Opção inválida </h1></center>");
            break;
        }
    }
?>       
</body>
</html>