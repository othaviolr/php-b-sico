<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prova 4 BNE</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<h1>Pesquisa Linear em um Vetor</h1>

<?php

function pesquisar($vetor, $n) {
    for ($i = 0; $i < count($vetor); $i++) {
        if ($vetor[$i] == $n) {
            return $i; 
        }
    }
    return -1; 
}

$vetor = [9, 15, 33, 14, 22];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valor = intval($_POST['valor']);
    $posicao = pesquisar($vetor, $valor);

    if ($posicao != -1) {
        echo "<h3>Valor {$valor} encontrado na posição {$posicao} do vetor</h3>";
    } else {
        echo "<p>Valor {$valor} não encontrado no vetor, tente novamente.</p>";
    }
}
?>

<form method="post" action="">
    <label for="valor">Digite um valor para pesquisar:</label>
    <input type="number" name="valor" id="valor" required>
    <input type="submit" value="Pesquisar">
</form>

</body>
</html>
