<?php
//Definindo variáveis
    define("NOMECLIENTE",  "Marcos de Melo");
    $endereco = 'Rua das Violetas, 320';
    $bairro = 'Jd. Callegari';
    $estado = 'SP';
    $cep = '13-181-659';
    $idade = 18;
    define ("RG", "28290355-x");
    $fone = '(19) 8886-6960';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Variáveis</title>
</head>
<body>
    <h1>Informações de Contato</h1>
    <p>Nome completo: <?php echo NOMECLIENTE;?> </p>
    <p>Endereço: <?php echo $endereco;?> </p>
    <p><?php echo "$bairro - $estado - CEP: $cep;"?> </p>
    <p>Telefone: <?php echo $fone;?> </p>
    <h2>Documentos</h2>
    <?php echo "<p>Idade: $idade | RG" . RG . "</p>"; ?>
</body>
</html>


