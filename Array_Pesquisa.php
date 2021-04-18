<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Básico</title>
</head>
<body>
    <?php
        $Pessoas = ['Marcos', 'Decio', 'Caue', 'Felipe'];
        echo '<pre>';
        var_dump($Pessoas);
        echo '</pre>';

        //$existe = in_array('Marcos', $Pessoas); //procura se achar da true(1), se for false da vazio
        $existe = array_search('maria', $Pessoas); //se nao encontrar return null
        var_dump($existe);

    ?>
</body>
</html>