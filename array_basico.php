<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Básico</title>
</head>
<body>
    <?php
        $lista = array('Ovos', 'Banana', 24, 'Leite', 'Manteiga', 'Margarina');
        echo '<pre>';
        var_dump($lista);
        echo '</pre>';

        $Lista = ['Ovos', 'Banana', 'Queijo', 'Leite', 'Manteiga'];
        echo '<pre>';
        print_r($Lista);
        echo '</pre>';

        $Lista_Compras = [
            'a' => 'Bananas',
            'b' => 'Ovos',
            '5' => 'Queijo',
            'e' => 'Leite',
            'l' => 'Manteiga',
            'h' => 'Margarina'
        ];
        echo '<pre>';
        print_r($Lista_Compras);
        echo '</pre>';
    ?>
</body>
</html>