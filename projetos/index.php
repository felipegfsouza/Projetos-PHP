<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./index.php?p=pag01">Página 1</a>
    <a href="./index.php?p=pag02">Página 2</a>
    <br/>
    <?php 
        $valor = @$_GET['p'];

        if ($valor == 'pag01'){require_once 'pag01.php';}
        if ($valor == 'pag02'){require_once 'pag02.php';}
    
    ?>

</body>
</html>