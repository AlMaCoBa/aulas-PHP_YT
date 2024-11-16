<?php
    //Declaração de um produto
    $produto = 'pizza';
    //Declaração de uma varipavel com String com aspas duplas
    $texto = 'Ele comprou uma ' . $produto . ' no Josy\'s';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String com aspas duplas no PHP</title>
</head>
<body>
    <p><?php echo $texto ?></p>
</body>
</html>