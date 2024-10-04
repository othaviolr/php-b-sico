<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prova 1 BNE</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <h1>Calculadora de Área da Pirâmide</h1>
        <form action="index.php" method="POST">
            <label for="aresta">Digite a aresta da base (em cm):</label>
            <input type="number" id="aresta" name="aresta" min="1" required>
            <button type="submit">Calcular Área Total</button>
        </form>

        <div class="resultado">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $aresta = $_POST['aresta'];

                if ($aresta > 0) {
                    $alturaFace = 20;

                    $areaBase = pow($aresta, 2); 
                    $areaLateral = 2 * $aresta * $alturaFace; 
                    $areaTotal = $areaBase + $areaLateral; 

                    echo "A área total da pirâmide é: <strong>" . number_format($areaTotal, 2, ',', '.') . " cm²</strong>";
                } else {
                    echo "<strong>Insira um valor válido para a aresta.</strong>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
