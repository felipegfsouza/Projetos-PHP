<!-- exercicio 10 -->
<form method="post">
        Valor 1: <input type="text" name="valor1"><br>
        <input type="submit" value="Calcular">
</form>
<?php
    if($_POST)
    {
        $v1=$_POST['valor1'];
        $total=sqrt($v1);
        echo "<p align= 'center'><b> O resultado da raiz quadrada é $total </b></p>";

    }
?>