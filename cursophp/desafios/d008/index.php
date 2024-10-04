<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    $numero = $_GET['num']??1;
    
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);

            echo "<p>Analisando o <strong>número$numero</strong>, temos:";
            echo "<ul><li>A sua raiz quadrada é <strong>".number_format($rq, 3, ",", ".") ."</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>" . number_format($rc, 3, ",", ".") ."</strong></li></ul>";
        ?>
    </section>
</body>
</html>