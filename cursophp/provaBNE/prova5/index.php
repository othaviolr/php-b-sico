<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>prova 5 BNE</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
    <div class="container">
        <h1>Ordenação Bubble Sort</h1>
    
        <form method="POST">
            <label for="nome">Digite seu nome:</label>
            <input type="text" id="nome" name="nome" required>
    
            <label for="numeros">Digite uma lista de números (separados por espaço):</label>
            <input type="text" id="numeros" name="numeros" required>
    
            <button type="submit">Ordenar</button>
        </form>
    
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            function contarLetrasNome($nome) {
                return strlen(str_replace(' ', '', $nome)); 
            }
    
            function bubbleSort($arr) {
                $n = count($arr);
                for ($i = 0; $i < $n - 1; $i++) {
                    $troca = false;
                    for ($j = 0; $j < $n - $i - 1; $j++) {
                        if ($arr[$j] > $arr[$j + 1]) {
                
                            $temp = $arr[$j];
                            $arr[$j] = $arr[$j + 1];
                            $arr[$j + 1] = $temp;
                            $troca = true;
                        }
                    }
                    if (!$troca) break;
                }
                return $arr;
            }
    
            $nome = trim($_POST["nome"]);
            $numerosInput = trim($_POST["numeros"]);
    
            $tamanhoLista = contarLetrasNome($nome);
    
            $numeros = array_map('intval', explode(' ', $numerosInput));
    
            if (count($numeros) !== $tamanhoLista) {
                echo "<div class='error'>Erro: O número de elementos não corresponde ao tamanho do nome ($tamanhoLista).</div>";
            } else {
                
                $numerosOrdenados = bubbleSort($numeros);
    
        
                echo "<div class='result'>";
                echo "<h2>Resultado</h2>";
                echo "<p>Vetor ordenado (frente para trás): " . implode(', ', $numerosOrdenados) . "</p>";
                echo "<p>Vetor ordenado (trás para frente): " . implode(', ', array_reverse($numerosOrdenados)) . "</p>";
                echo "</div>";
            }
        }
        ?>
    
    </div>
    
    </body>
    </html>
    
  </div>
</body>
</html>
