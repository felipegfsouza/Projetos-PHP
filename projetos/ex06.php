<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Raio</h1>
    <center>
        <form method="post">
            Raio:<input type="text" name="raio"
            palaceholder="Digite o grau"><br><br>  
            <p align= 'center'><img src='imagens/raio.jpg' /></p><br><br>
            <input type="submit" value="Calcular">

        </form>
    </center>

<?php 

    $raio=$_POST['raio'];
    $resposta= pi()*pow($raio,2);
 
    echo"<center><h1> o raio é  $resposta </h1></center>";


?>
   

    
</body>
</html>