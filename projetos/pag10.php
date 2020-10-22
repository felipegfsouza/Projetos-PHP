<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Calculadora de Seleção</h1>
    <center>
        <form action="selecoes.php" method="post">
            Valor1:<input type="text" name="txtv1" placeholder="Digite 1° Valor"><br><br>
            Valor2:<input type="text" name="txtv2" placeholder="Digite 2° Valor"><br><br>

            <select name="operacao">
                <option>Soma</option>
                <option>Subtração</option>
                <option>Multiplicação</option>
                <option>Divisão</option>
            </select>

            <br>
            <br>
            <input type="submit" value="Calcular">
        </form>
    </center>
</body>
</html>