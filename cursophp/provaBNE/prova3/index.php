<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prova 3 BNE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h1>Intercalação de Listas</h1>

<?php

function intercalarListas($lista1, $lista2) {
    $listaIntercalada = [];
    for ($i = 0; $i < count($lista1); $i++) {
        $listaIntercalada[] = $lista1[$i];
        $listaIntercalada[] = $lista2[$i];
    }
    return $listaIntercalada;
}

function calcularSomaEMedia($lista) {
    $soma = array_sum($lista);
    $media = $soma / count($lista);
    return [$soma, $media];
}

$lista1 = range(1, 80);
$lista2 = range(81, 160);

$listaIntercalada = intercalarListas($lista1, $lista2);

list($soma, $media) = calcularSomaEMedia($listaIntercalada);

echo "<h3>Lista Intercalada:</h3>";
echo "<table>";
echo "<tr><th>Índice</th><th>Valor</th></tr>";
foreach ($listaIntercalada as $indice => $valor) {
    echo "<tr><td>{$indice}</td><td>{$valor}</td></tr>";
}
echo "</table>";

echo "<h3>Resultados:</h3>";
echo "<p>Soma da lista intercalada:<strong> {$soma}</p></strong>";
echo "<p>Média da lista intercalada: <strong>" . number_format($media, 2, '.', '') . "</p></strong>";
?>

</body>
</html>
