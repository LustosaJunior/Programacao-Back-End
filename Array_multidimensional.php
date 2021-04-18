<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Básico</title>
</head>
<body>
    <?php
        $Lista = [];

        $Lista['comidas'] = ['Ovos', 'Banana', 24, 'Leite', 'Manteiga', 'Margarina'];
      

        $Lista['ovos'] = ['Ovos', 'Banana', 'Queijo', 'Leite', 'Manteiga'];
        
        $Lista['compras'] = [
            'a' => 'Bananas',
            'b' => 'Ovos',
            '5' => 'Queijo',
            'e' => 'Leite',
            'l' => 'Manteiga',
            'h' => 'Margarina'
        ];
        echo '<pre>';
        print_r($Lista);
        echo '</pre>';
    ?>
</body>
</html>