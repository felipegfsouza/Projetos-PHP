<!-- O custo de um carro novo ao consumidor é a soma do custo de fábrica com a 
porcentagem do distribuidor e dos impostos
(aplicados ao custo de fábrica). Supondo que o percentual do distribuidor seja
de 28% e os impostos de 45%, faça uma página em PHP para ler o custo de fábrica
de um carro, calcular e escrever o custo final ao consumidor. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Seu carro novo</h1>
    <center>
        <form method="POST">
        informe o valor de custo de fabrica:
            <input type="text" name="vf" size="20"><br><br>

            <input type="submit" value="calcular"><br><br>
        </form>
    </center>

    <?php 

        $vf=$_POST['vf'];

        $valorimposto=45/100;
        $valorDistribuidor=28/100;

        $valorDistribuidor= $vf +($vf * $valorDistribuidor);
        $valorimposto= $vf + ($vf* $valorimposto );

        $valorCustoConsumidor= $vf + $valorDistribuidor + $valorimposto;

        echo"<h3><center> O valor com impostos ao consumidor é de $valorCustoConsumidor </center></h3>";

    ?>
</body>
</html>