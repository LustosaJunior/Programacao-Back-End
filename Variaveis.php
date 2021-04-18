<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        
            //isso é um comentário
            #isso também é um comentario
            /*
                Bloco de comnetario
            */

            # string
            $nome = "Thiago Traue"; # pode usar simples tambem ''

            # int
            $idade = 33;

            # float
            $peso = 90.8;

            #boolean
            $desenvolvedor = false;

        ?>

        <!-- ver o tipo da var e oq ela reserva-->
        <?= var_dump($peso)?>

        <h1>Dados do úsuario</h1>
        <br>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Desenvolvedor: <?= $desenvolvedor ?></p>
    </body>
</html>