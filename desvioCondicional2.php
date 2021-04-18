<!DOCTYPE html>
<html>
<head>
	<title>Lojinha</title>
</head>
<body>
	<?php
		$cartao_fidelidade = true; //tem o cartão = true;
		$valor_compra = 250;
		$valor_frete = 40;

		if($cartao_fidelidade && $valor_compra > 500){
			$valor_frete = 0;
		}else if($cartao_fidelidade && $valor_compra >= 200) {
			$valor_frete = 10;
		} else if($cartao_fidelidade && $valor_compra >= 100){
			$valor_frete = 20;
		}

		// if($cartao_fidelidade ){
		// 	echo "SIM";
		// }else{
		// 	echo "Nao";
		// }
		//
		//é a mesma coisa que:
		// $cartao_fidelidade ? echo "Sim" : echo "Não";
	?>

	<h2>Relatório da venda</h2>
	<p><strong>Possui cartão fidelidade:</strong> <?= $cartao_fidelidade ? 'Sim' : 'Não' ?></p>
	<p><strong>Valor da compra: </strong> R$ <?= $valor_compra ?></p>
	<p><strong>Valor do frete:</strong> R$ <?= $valor_frete ?></p>
	<hr/>
	<p><strong>Valor total:</strong> R$ <?= $valor_frete + $valor_compra ?></p>
</body>
</html>






