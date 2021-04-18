<!DOCTYPE html>
<html>
<head>
	<title>Desvio condicional</title>
</head>
<body>
	<?php
		/*
		O desvio condicional deve ocorrer
		quando você possui alguma condição
		booleana para realiar o DESVIO do 
		curso de execução do código.
		
		SE (<condição>){
			SE <condição> der TRUE (verdadeiro)
		}SENÃO {
			SE <condição> fer FALSE (FALSO)
		}

		== -> comparação. Ex. 2 == 2 -> Verdadeiro
		!= ou <>  -> diferente. Ex: 2 != 5 -> TRUE
		< ou >   -> menor maior. Ex.: 2 < 5 -> TRUE
		===    -> são iguais E do mesmo tipo?
		!==    -> são diferentes e de tipos diferentes?
		*/

		$idade = 17;

		if($idade >= 18){
			echo "Pode tirar carta!";
		} else {
			echo "Não pode tirar carta!";
		}

		//------------------------
		echo "<hr/>";

		$x = 22;
		$y = "22";

		if($x === $y){
			echo "X é igual a Y!";
		}else{
			echo "X é diferente de Y";
		}

		//------------------------
		echo "<hr/>";
		$fumante = false;

		if(!$fumante){
			echo "Não é fumante";
		}else{
			echo "É fumante";
		}

	?>
</body>
</html>


