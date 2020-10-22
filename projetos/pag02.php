<form method="post">
        Valor 1: <input type="text" name="valor1"><br>
        Valor 2: <input type="text" name="valor2"><br>
        <input type="submit" value="Calcular">
</form>
<?php
    if($_REQUEST)
    {
        $v1=$_REQUEST['valor1'];
        $v2=$_REQUEST['valor2'];
        $total=pow($v1,$v2);
        echo "<p align= 'center'><b>O valor da potência é $total </b></p>";
    }
?>