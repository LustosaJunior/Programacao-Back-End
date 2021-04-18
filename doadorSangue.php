<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Atividade Sangue</title>
    </head>
    <body>

        <h2>Para ser um doador é necessario ter entre 18 e 60 anos e pesar mais que 50 kilos</h2>
        <?php
        echo "<hr/>";
        $nome ='Decio';
        $idade = 18;
        $peso = 91;
        /*
            entre 18 e 60 e peso >50 
            entre 18 e 60 peso <50
            menor de idade e peso >50
            menor de idade e peso <50
            maior q 60 com peso >50
            maior q 60 com peso <50
        */
        if ($idade >=18 && $idade<=60 && $peso >=50 ){
            echo "Sr(a) " .$nome. " Você já pode ser um doador";
        }else if ($idade <18 || $idade>60 || $peso <50){
            echo "Sr(a) " .$nome. " Você não pode doar sangue";
        }
        ?>
    </body>
</html>