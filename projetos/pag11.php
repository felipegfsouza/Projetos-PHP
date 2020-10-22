<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Calculadora de Radio</h1>
    <center>
        <form action="radios.php" method="post">
            Valor 1: <input type="number" name="txtv1" placeholder="Digite 1° Valor"><br><br>
            Valor 2: <input type="number" name="txtv2" placeholder="Digite 1° Valor"><br><br>

            <input type="radio" value="Somar" name="op">Somar
            <input type="radio" value="Subtrair" name="op">Subtrair
            <input type="radio" value="Multiplicar" name="op">Multiplicar
            <input type="radio" value="Dividir" name="op">Dividir
            <br>
            <br>
            <input type="submit" value="Calcular">
        </form>
    </center>
</body>
</html>