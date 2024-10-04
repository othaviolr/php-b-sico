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
        $total = $_REQUEST['seg'] ?? 0;
    ?>
    <main>
        <h1>calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Quaç é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min='0' step='1' required value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php 
        $sobra = $total;
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        $minuto =(int)($sobra / 60);
        $sobra = $sobra % 60;
        $segundo = $sobra;
    ?>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou <strong><?=number_format($total, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>