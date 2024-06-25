<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de divisão</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $dividendo = $_GET["d1"] ?? 0;
    $divisor = $_GET["d2"] ?? 1;


    ?>

    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="get">

            <div>
                <label for="d1">Dividendo:</label>
                <input type="number" name="d1" min="0" value="<?= $dividendo ?>">
            </div>

            <div>
                <label for="d2">Divisor:</label>
                <input type="number" name="d2" min="1" value="<?= $divisor ?>">
            </div>

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php

        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>

            </tr>
        </table>
    </section>

</body>

</html>