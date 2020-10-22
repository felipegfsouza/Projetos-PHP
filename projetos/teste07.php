<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Cálculo de Graus</h1>
    <p align="center">
        <img src="imagens/triangulo.png" width="200" height="200">
    </p>
    <center>
        <form action="selecoes2.php" method="post">
            Grau:<input type="text" name="txtgrau"
            palaceholder="Digite o grau"><br><br>
 
                <select name="operacao">
                    <option value="o">Selecione uma opção</option>
                    <option value="s">Seno</option>
                    <option value="c">Cosseno</option>
                    <option value="t">Tangente</option>
                </select>
                <br>
                <br>
            <input type="submit" value="Calcular">
        </form>
        <br>
    </center>
</body>