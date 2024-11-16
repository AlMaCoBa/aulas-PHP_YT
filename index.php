<?php
    $texto = "<p>Este é o quarto parágrafo</p>";//#variável php.

?>

<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exercicio 4 de PHP</title>
        </head>
        <body>
            <h1>Exercicio 4 de PHP - Misturando codigos</h1>
            <p>Esse é o primeiro paragrafo.</p>
            <p><?php echo "Este é o segundo parágrafo."; ?></p>
            <p>Este é o terceiro parágrafo</P>
            <?php echo $texto; ?>
        </body>
</html>



