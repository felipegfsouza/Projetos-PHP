<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">METROS PARA CENTIMETROS</h1>
    <center>
        <form method="POST">
           metros:<input type="text" name="metros"
           palaceholder="Digite o valor em metros"><br><br>

           <input type="submit" value="Converter">

        </form>
    </center>
<?php 
    $metros=$_POST['metros'];
    $converter= $metros*100;

    echo"<center><h1>   $converter cm </h1></center>"


?>
   
</body>
</html>