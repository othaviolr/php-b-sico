<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prova 2 BNE</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Fatoriais e Somatório</h1>

<?php

function fatorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

$numeradores = [224, 228, 232, 236, 240, 244, 248, 252, 256];
$somatorio = 0;

echo '<table>';
echo '<tr><th>Termo</th><th>Fórmula</th><th>Resultado</th></tr>';

for ($i = 2; $i <= 10; $i++) {
    $numerador = $numeradores[$i - 2];
    $fatorial = fatorial($i);
    $termo = $numerador / $fatorial;
    echo "<tr>
            <td>{$i}!</td>
            <td>{$numerador} / {$i}!</td>
            <td>" . number_format($termo, 10, '.', '') . "</td>
          </tr>";
    $somatorio += $termo;
}

echo '</table>';

echo "<div class='somatorio'>Somatório dos termos: " . number_format($somatorio, 10, '.', '') . "</div>";
?>

</body>
</html>
